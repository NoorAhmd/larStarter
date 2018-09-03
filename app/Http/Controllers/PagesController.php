<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel course';
        return view('pages.index', compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title'=>'Services',
            'services'=> ['Web Design', 'Programmin', 'Design']
        );
        return view('pages.services')->with($data);
    }
    public function contact(){
        return view('pages.contact');
    }
}
