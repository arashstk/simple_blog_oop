<?php

namespace App\Controller;

use App\Model\DB;
use App\Model\Users;

class HomeController
{
    public function index()
    {
        $db = new Users();
        var_dump($db->select());
    }
}
