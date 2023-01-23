<?php

namespace App\Controllers;

use \CodeIgniter\View\Table;
class Data extends \CodeIgniter\Controller
{
    public function index()
    {
        $table=new Table();
		$data=  [
    ['Name', 'Color', 'Size'],
    ['Fred', 'Blue', 'Small'],
    ['Mary', 'Red', 'Large'],
    ['John', 'Green', 'Medium'],
     ];
		 $records['users']= $table->generate($data);
		 echo view("dataview",$records);
    }
}