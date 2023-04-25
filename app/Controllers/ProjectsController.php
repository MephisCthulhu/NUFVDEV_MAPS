<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProjectsController extends BaseController
{
    public function index() {

        echo view('projects');

    }
}
