<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageAccController extends BaseController
{
    public function index()
    {
        echo view('manageaccount');
    }
}
