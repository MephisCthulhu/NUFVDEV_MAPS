<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SchedulerController extends BaseController
{
    public function index()
    {
        echo view('scheduler');
    }
}
