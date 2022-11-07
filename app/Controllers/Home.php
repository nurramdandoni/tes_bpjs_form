<?php

namespace App\Controllers;
use App\Models\ResourceModel;

class Home extends BaseController
{

    // protected $ResourceModel;

    // public function __construct(){

    //     $this->ResourceModel = new ResourceModel();
    // }

    public function index()
    {
        // $list = new ResourceModel();
        // $data = $list->findAll();
        // dd($list);
        return view('personal_detail');
    }
}
