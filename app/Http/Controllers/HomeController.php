<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $url_data = [
            [
                'title' => 'laravel',
                'url' => 'https://google.com'
            ],
            [
                'title' => 'YuoTube',
                'url' => 'http://youtube.com'
            ]
        ];

        $url_data = json_encode($url_data);

        return view('home', [
            'url_data' => $url_data,
        ]);
    }

    public function getJson()
    {
        return [
            [
                'title' => 'AJAX',
                'url' => 'https://google.com'
            ],
            [
                'title' => 'JavaScript',
                'url' => 'http://youtube.com'
            ]
        ];
    }
}
