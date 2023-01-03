<?php

namespace App\Controllers;

class Config extends BaseController
{
    public function index()

    {
        $datas = [
            "title" => "Config"
        ];
        return view('config/index', $datas);
    }
}
