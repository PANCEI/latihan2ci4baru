<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ConfigSeeder extends Seeder
{
    public function run()
    {
        $data = [
            "appname" => "User Mangaer",
            "copyright" => " @ 2022  || Aswar Hamid",
            "logo" => "logo.png",
            "Keywords" => "Ci4 ,Bs5",
            "author" => "Aswar Hamid",
            "description" => "Aplikasi Ini Merupakan User Manager",
            "config_created_at" => Time::now(),
            "config_updated_at" => Time::now(),

        ];
        $this->db->table('config')->insert($data);
    }
}
