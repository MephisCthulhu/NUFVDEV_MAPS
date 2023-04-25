<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    //handle login logic, validate and authenticate users
    public function index()
    {
        $session = session();
        //handles user login from user input in login view
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('username', $this->request->getVar('username'))
                              ->first();

                if (!$user || !password_verify($this->request->getVar('password'), $user['password'])) {
                    $data['error'] = 'Incorrect username or password';
                } else {
                    $session->set('isLoggedIn', true);
                    $session->set('userId', $user['id']);

                    return redirect()->to('/');
                }
            }
        }

        echo view('home');
    }

    public function logout()
    {
        $session = session();

        $session->remove('isLoggedIn');
        $session->remove('userId');

        return redirect()->to('/login');
    }

    public function home()
    {
            echo view('home');
    }
}
