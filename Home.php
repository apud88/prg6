<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pinjam_model;

class Home extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }
    public function pinjam()
    {
        $model = new Pinjam_model;
        $data['title']= 'Data Join';
        $data['join'] = $model->query_join();
        return view('pinjam', $data);
    }
}