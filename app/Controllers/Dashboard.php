<?php

namespace App\Controllers;

use App\Models\ConfigModel;

class Dashboard extends BaseController
{
    protected $configmodel;
    public function __construct()
    {
        $this->configmodel = new ConfigModel();
    }
    public function index()

    {
        $datas = [
            "title" => "Dashboard",
            "config" => $this->configmodel->get()
        ];
        return view('Dashboard/index', $datas);
    }
}
