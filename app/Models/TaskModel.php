<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model

{
	protected $table= 'task';
	protected $allowedFields=['description'];
	protected $validationRules=['description'=>'required'];
}