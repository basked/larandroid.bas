<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class BrandController extends Controller
{
    public function BrandGuzzleParse()
    {
        $client = new Client([
            'base_uri' => 'https://brestmoda.com',
            'timeout' => 2.0
        ]);
        $request = $client->request('GET', '/katalog.php',
            [
                'proxy' => [
                    // 'http' => 'http://gt-asup6:teksab@172.16.15.33:3128',
                    // 'https' => 'http://gt-asup6:teksab@172.16.15.33:3128'
                ],
                [
                    'headers' => [
                        'Connection' => 'keep-alive',
                        'Cache-Control' => 'max-age=0',
                        'Upgrade-Insecure-Requests' => '1',
                        'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36',
                        'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
                        'Accept-Encoding' => 'gzip, deflate, br',
                        'Accept-Language' => 'ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7'
                    ]
                ]
            ]);

        // echo iconv("windows-1251", "utf-8", $request->getBody()->getContents());
        $brand = [
            '0' =>
                [
                    'Book ID' => 1,
                    'Book Name' => "Computer Architecture",
                    'Category' => "Computers",
                    'Price' => 125.60
                ],
            '1' =>
                [
                    'Book ID' => 2,
                    'Book Name' => "Asp.Net 4 Blue Book",
                    'Category' => "Programming",
                    'Price' => 56.00
                ]
        ];
        echo '<pre>';
       dd(json_encode($brand));
        echo '</pre>';


        /*,
            [
                "Book ID": "2",
                "Book Name": "Asp.Net 4 Blue Book",
                "Category": "Programming",
                "Price": "56.00"
            ],
            {
                "Book ID": "3",
                "Book Name": "Popular Science",
                "Category": "Science",
                "Price": "210.40"
            }
    )*/
    }
    /**
     * Search snapdeal products by given url
     * @param Request $request
     */
    public function searchProductsByUrl(Request $request) {
        $pageUrl = 'http://annamajewska.by/newyear/';
        if(!$pageUrl) {
            return response()->json($this->getActionStatus("ERROR", "Product page url not found."));
        }
        $errors = array();

        $result = $this->makeWebRequest($pageUrl, $errors);
        if(empty($errors)) {
            $response['content'] = $this->parseQuickProductsJson($result, '');
            $response['Status'] = 'SUCCESS';
            $response['Message'] = 'Products downloaded successfully';
        } else {
            $response['Errors'] = $errors;
            $response['Status'] = 'ERROR';
            $response['Message'] = "Error in fetching products from the url. Errors: " . implode('|', $errors);
        }
        return response()->json($response);
    }

    /**
     * Parse json string into array
     * @param string $result
     * @param string $category
     */
    private function parseQuickProductsJson($result, $category) {
        $response = '';
        try {
            $crawler = new Crawler($result);
            $filter = $crawler->filter('div.collection-item.size4');
            dd($filter->html());
            foreach ($filter as $i => $domElement) {
                $_crawler = new Crawler($domElement);
                dd($domElement);
                $arr[$i] = array(
                    'productName' => $_crawler->filter('p.product-title')->text(),
                    'productUrl' => $_crawler->filter('a.noUdLine')->attr('href'),
                    'imageUrl' => $_crawler->filter('input.compareImg')->attr('value'),
                    'offerPrice' => $_crawler->filter('span.product-price')->text(),
                    'inStock' => $_crawler->filter('span.badge-soldout')->count() > 0 ? false : true,
                    'size' => $_crawler->filter('span.attr-value')
                );
            }
        } catch (Exception $ex) {
        }
        return $arr;
    }

    /**
     * Make web request to affiliate server url
     * @param String $url
     */
    private function makeWebRequest($url, &$errors) {
        $client = new Client();
        $response = $client->get($url);

        if($response->getStatusCode() == 200) {
            return (string)$response->getBody();
        } else {
            array_push($errors, $response->getReasonPhrase());
            return;
        }
    }

}
