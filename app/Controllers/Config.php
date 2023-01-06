<?php

namespace App\Controllers;

use App\Models\ConfigModel;

class Config extends BaseController
{
    protected $configmodel;
    public function __construct()
    {
        $this->configmodel = new ConfigModel();
    }
    public function index()

    {
        $datas = [
            "title" => "Config",
            "config" => $this->configmodel->get(),
            "validation" => \Config\Services::validation()
        ];
        return view('config/index', $datas);
    }
    public function update()
    {
        $rules = [
            "appname" => ['required', 'errors' => ['required' => "Aplikasi Name is Required"]],
            "copyright" => ['required', 'errors' => ['required' => "copyright is Required"]],
            "Keywords" => ['required', 'errors' => ['required' => "Keywords is Required"]],
            "author" => ['required', 'errors' => ['required' => "author is Required"]],
            "description" => ['required', 'errors' => ['required' => "description is Required"]],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata("error", "Data Gagal Di Simpan");
            return redirect()->to('config')->withInput();
        }
    }
}
