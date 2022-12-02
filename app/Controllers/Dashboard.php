<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()

    {
        $datas = [
            "title" => "Dashboard"
        ];
        return view('Dashboard/index', $datas);
    }
}
