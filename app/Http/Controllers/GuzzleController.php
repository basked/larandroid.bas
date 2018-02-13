<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Psr7\str;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function parseBelbazar()
    {
        $client = new Client([
            'base_uri' => 'https://belbazar24.by/',
            'timeout' => 300.0
        ]);
        $headers = [
            'headers' => [
                'Server' => 'nginx/1.10.1',
                'Date' => 'Tue, 13 Feb 2018 17:15:44 GMT',
                'Content-Type' => 'text/html; charset=UTF-8',
                'Transfer-Encoding' => 'chunked',
                'Connection' => 'keep-alive',
                'X-Powered-By' => 'PHP/5.3.3',
                'Expires' => 'Thu, 19 Nov 1981 08:52:00 GMT',
                'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
                'Pragma' => 'no-cache',
                'Vary' => 'Accept-Encoding',
                'Content-Encoding' => 'gzip',
                'Strict-Transport-Security' => 'max-age=31536000;',
                'Accept' => 'application/json, text/javascript, */*; q=0.01',
                'Accept-Encoding' => 'gzip, deflate, br',
                'Accept-Language' => 'ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
                'Connection' => 'keep-alive',
                'Content-Length' => 185,
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Host' => 'belbazar24.by',
                'Origin' => 'https://belbazar24.by',
                'Referer' => 'https://belbazar24.by/catalog/',
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36',
                'X-Requested-With' => 'XMLHttpRequest'
            ]
        ];


        $form_param =
            [
                'form_params' => [
                    'action'=>'view',
                    'limit_to'=>99]
                ];
        $form_params =
            [
                'form_params' => [

                    '1[338]'=>'338',
                    '1[500]'=>'500',
                    '1[499]'=>'499',
                    '1[489]'=>'489',
                    '1[485]'=>'485',
                    '1[386]'=>'386',
                    '1[282]'=>'282',
                    '1[469]'=>'469',
                    '1[375]'=>'375',
                    '1[258]'=>'258',
                    '1[520]'=>'520',
                    '1[511]'=>'511',
                    '1[443]'=>'443',
                    '1[509]'=>'509',
                    '1[480]'=>'480',
                    '1[420]'=>'420',
                    '1[516]'=>'516',
                    '1[296]'=>'296',
                    '1[504]'=>'504',
                    '1[247]'=>'247',
                    '1[510]'=>'510',
                    '1[468]'=>'468',
                    '1[521]'=>'521',
                    '1[393]'=>'393',
                    '1[524]'=>'524',
                    '1[236]'=>'236',
                    '1[515]'=>'515',
                    '1[269]'=>'269',
                    '1[523]'=>'523',
                    '1[439]'=>'439',
                    '1[333]'=>'333',
                    '1[249]'=>'249',
                    '1[527]'=>'527',
                    '1[233]'=>'233',
                    '1[462]'=>'462',
                    '1[496]'=>'496',
                    '1[492]'=>'492',
                    '1[455]'=>'455',
                    '1[472]'=>'472',
                    '1[495]'=>'495',
                    '1[486]'=>'486',
                    '1[494]'=>'494',
                    '1[322]'=>'322',
                    '1[508]'=>'508',
                    '1[477]'=>'477',
                    '1[518]'=>'518',
                    '1[493]'=>'493',
                    '1[416]'=>'416',
                    '1[371]'=>'371',
                    '1[519]'=>'519',
                    '1[340]'=>'340',
                    '1[339]'=>'339',
                    '1[514]'=>'514',
                    '1[488]'=>'488',
                    '1[245]'=>'245',
                    '1[272]'=>'272',
                    '1[300]'=>'300',
                    '1[287]'=>'287',
                    '1[484]'=>'484',
                    '1[491]'=>'491',
                    '1[278]'=>'278',
                    '1[270]'=>'270',
                    '1[359]'=>'359',
                    '1[293]'=>'293',
                    '1[264]'=>'264',
                    '1[471]'=>'471',
                    '1[382]'=>'382',
                    '1[263]'=>'263',
                    '1[271]'=>'271',
                    '1[253]'=>'253',
                    '1[276]'=>'276',
                    '1[490]'=>'490',
                    '1[248]'=>'248',
                    '1[308]'=>'308',
                    '1[525]'=>'525',
                    '1[522]'=>'522',
                    '1[267]'=>'267',
                    '1[497]'=>'497',
                    '1[341]'=>'341',
                    '1[265]'=>'265',
                    '1[526]'=>'526',
                    '1[413]'=>'413',
                    '1[479]'=>'479',
                    '1[301]'=>'301',
                    '1[259]'=>'259',
                    '1[389]'=>'389',
                    '1[328]'=>'328',
                    '1[266]'=>'266',
                    '1[298]'=>'298',
                    '1[448]'=>'448',
                    '1[226]'=>'226',
                    '1[303]'=>'303',
                    '1[397]'=>'397',
                    '1[241]'=>'241',
                    '1[302]'=>'302',
                    '1[461]'=>'461',
                    '1[370]'=>'370',
                    '1[482]'=>'482',
                    '1[256]'=>'256',
                    '1[239]'=>'239',
                    '1[421]'=>'421',
                    '1[501]'=>'501',
                    '1[157]'=>'157',
                    '1[159]'=>'159',
                    '3[351]'=>'351',
                    '3[102]'=>'102',
                    '3[101]'=>'101',
                    '3[33]'=>'33',
                    '3[34]'=>'34',
                    '3[35]'=>'35',
                    '3[164]'=>'164',
                    '3[165]'=>'165',
                    '3[166]'=>'166',
                    '3[167]'=>'167',
                    '3[168]'=>'168',
                    '3[169]'=>'169',
                    '3[170]'=>'170',
                    '3[171]'=>'171',
                    '3[172]'=>'172',
                    '3[173]'=>'173',
                    '3[174]'=>'174',
                    '3[175]'=>'175',
                    '3[176]'=>'176',
                    '3[199]'=>'199',
                    '3[200]'=>'200',
                    '3[507]'=>'507',
                    '4[153]'=>'153',
                    '4[180]'=>'180',
                    '4[476]'=>'476',
                    '1[266]'=>266,
                    'min_summa' => 0,
                    'max_summa' => 410,
                    'action' => 'get_poducts',
                    'cat_id' => 246,
                    'search' => 'введите арт. модели',
                    'dateObj' => 'Tue Feb 13 2018 20:36:52 GMT 0300 (Беларусь (зима))',
                    'page'=>2
                ]
            ];


       $request = $client->request('POST', '/ajax.php',$headers+$form_params);
        //    $request = $client->request('POST', '/catalog',$headers+$form_param);
       $html= $request->getBody()->getContents();


       // $html = iconv("windows-1251", "utf-8", $request->getBody()->getContents());
        echo '<pre>';
        var_dump(\GuzzleHttp\json_decode($html));
        echo '</pre>';
    }

    /** парсим Candylady
     * @return string
     */
    public function parseCandylady()
    {
        $client = new Client([
            'base_uri' => 'https://candylady.by/search/',
            'timeout' => 60.0
        ]);
        // параметры запроса
        $form_params =
            [
                'form_params' => [
                    'maker' => [],   // производитель
                    // 'maker' => json_encode(["BUTER", "ALANI"]),   // производитель
                    'type' => [],                                 // тип
                    'size' => [],                // размеры
                    //  'size' => json_encode(["42"]),                // размеры
                    'model' => [],                                // модели
                    'limit' => 12000,                                // лимит  по выборке
                    'priceFrom' => 0,                             // цена с
                    'priceTo' => 241                              // цена по
                ]
            ];
        $request = $client->request('POST', 'view.php', $this->getProxy() + $form_params);
        $html = $request->getBody()->getContents();
        $this->parseProductsJson($html, '');
        // return $html;
    }

    /** Set Proxy Connect
     * @param bool $isActive
     * @return array
     */
    private function getProxy($isActive = false)
    {
        $proxy = [];
        if ($isActive == true) {
            $proxy = [
                'proxy' => [
                    'http' => 'http://gt-asup6:teksab@172.16.15.33:3128',
                    'https' => 'http://gt-asup6:teksab@172.16.15.33:3128'
                ]
            ];
        }
        return $proxy;
    }

    private function parseProductsJson($html)
    {
        $products = [];
        $response = '';
        $kurs = $this->getCurs();
        try {
            $crawler = new Crawler($html);
            $filter = $crawler->filter('li');
            foreach ($filter as $i => $domElement) {
                $_crawler = new Crawler($domElement);
                if ($_crawler->filter('.description>p')->count() == 4) {
                    $products[$i] = array(
                        'prodUrl' => $_crawler->filter('a')->first()->attr('href'),
                        'ProdImage' => $_crawler->filter('img')->attr('src'),
                        'prodModel' => str_replace('Модель: ', '', $_crawler->filter('.description>p')->eq(0)->text()),
                        'prodMaker' => str_replace('Фирма: ', '', $_crawler->filter('.description>p')->eq(1)->text()),
                        'prodCategory' => $this->categoryToArray($_crawler->filter('.description>p')->eq(2)->text()),
                        'prodSize' => $this->sizeToArray($_crawler->filter('.description>p')->eq(3)->text()),
                        'prodPriceUSD' => $_crawler->filter('.price')->attr('data-val'),
                        'prodPriceRUR' => $_crawler->filter('.price>span')->text(),
                        'prodPriceBYN' => $_crawler->filter('.price')->attr('data-val') * $kurs
                    );
                }
            }
        } catch (Exception $ex) {
            echo "i=$i" . $ex->getMessage();
        }
        echo '<pre>';
        print_r($products);
        echo '</pre>';
    }

    /**
     * @return null|string
     */
    private function getCurs()
    {
        $client = new Client([
            'base_uri' => 'https://candylady.by/',
            'timeout' => 2.0
        ]);
        $request = $client->request('GET', 'currency.php', $this->getProxy());
        $res = $request->getBody()->getContents();
        $crawler = new Crawler($res);
        $kurs = $crawler->filter('option')->attr('index');
        return $kurs;
    }

    /**  Переводим строку категорий в массив и заполням значениями
     * @param string $category
     * @return array
     */
    private function categoryToArray($category = '')
    {
        $categories = [];
        if ($category != '') {
            $category = str_replace('Категория: ', '', $category);
            $categories = explode(', ', $category);
        }
        return $categories;
    }

    /** Переводим строку размеров в массив и заполням значениями
     * @param string $size
     * @return array
     */
    private function sizeToArray($size = '')
    {
        try {
            $sizes = [];
            if ($size != '') {
                $size = str_replace('Размеры: ', '', $size);
                $size = str_replace('Размер: ', '', $size);

                $arrSize = explode('-', $size);
                if (count($arrSize) == 2) {
                    if (is_numeric($arrSize[0]) && is_numeric($arrSize[1])) {
                        for ($i = $arrSize[0]; $i <= $arrSize[1]; $i += 2) {
                            $sizes[] = $i;
                        }
                    } else {
                        $sizes[] = $size;
                    }
                } else {
                    $sizes[] = $size;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $sizes;
    }

    public function test()
    {
        print_r($this->sizeToArray('49k2'));
        echo '<br>';
        print_r($this->categoryToArray('костюмы, комплекты'));
    }
}