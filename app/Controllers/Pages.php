<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('user/index');
    }

    public function book()
    {
        return view('user/book');
    }

    public function customer()
    {
        return view('user/customer');
    }

    public function cart()
    {
        return view('user/chart');
    }
}
