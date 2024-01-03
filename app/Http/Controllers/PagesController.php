<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "welcome To Laravel!";
      return view('pages.index', compact('title'));
    }

    public function about(){
      $title = 'About us';
      return view ('pages.about')->with('title', $title);
    }

    public function services(){
      
      // $title ='Our services';
      $data = array(
        'title' => 'Services',
        'services'=> ['web designing', 'programming', "web development "]
      );
      return view('pages.services')->with($data);
    }
}
