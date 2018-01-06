<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class RegisterController extends Controller
{
    private $client;

    /**
     * RegisterController constructor.
     * @param $client
     */
    public function __construct()
    {
        $this->client = Client::find(1);

    }

    public function register(Request $request)
    {
        // dd($request->all('name','password')); // массив из параметров запроса
        // dd($request->name); // значение поля из параметров запроса
        // dd($request['name']); // значение поля из параметров запроса
        // dd(request('name'));
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        //создаём пользователя
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        // параметры для заполнения
        $params = [
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => request('email'),
            'password' => request('password'),
            'scope' => '*',
        ];


        $request->request->add($params);

        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);
    }

    public function index()
    {
        dd('khsdhsd');
    }
}
