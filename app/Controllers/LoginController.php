<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    //handle login logic, validate and authenticate users
    public function index()

    {
        echo view('home');
    }
}
