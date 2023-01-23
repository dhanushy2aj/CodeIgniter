<?php

namespace App\Controllers;

class View extends \CodeIgniter\Controller
{
    public function index()
    {
        echo view("myview");
    }
}