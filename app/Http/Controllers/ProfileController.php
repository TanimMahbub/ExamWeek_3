<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];
        
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = '127.0.0.1';
        $secure = false;
        $httpOnly = true;

        Cookie::queue($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data, 200)->withCookie(Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly));
    }
}