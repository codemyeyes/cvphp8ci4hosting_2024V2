<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index(): string
    {
        return view('welcome_message');
    }
}
