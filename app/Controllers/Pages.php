<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Manage your book with one click | Bookment 2022',
            'tab' => 'home',
            'css' => '',
        ];

        return view('user/index', $data);
    }

    public function book()
    {
        $data = [
            'title' => 'Books | Bookment 2022',
            'tab' => 'book',
            'css' => '',
        ];

        return view('user/book', $data);
    }

    public function customer()
    {
        $data = [
            'title' => 'Customer | Bookment 2022',
            'tab' => 'customer',
            'css' => '',
        ];

        return view('user/customer', $data);
    }

    public function cart()
    {
        $data = [
            'title' => 'Cart | Bookment 2022',
            'tab' => 'cart',
            'css' => '',
        ];

        return view('user/chart', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login Bookment',
            'css' => '<link rel="stylesheet" href="/assets/css/login.css">',
        ];

        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register Bookment',
            'css' => '<link rel="stylesheet" href="/assets/css/login.css">',
        ];

        return view('auth/register', $data);
    }
}
