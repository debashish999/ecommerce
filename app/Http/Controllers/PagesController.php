<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $logo = 'meds.jpg';
        $poster = 'pharmacy.jpg';

        $Images = array('logo' => $logo ,
                    'poster' => $poster);
        

        return view('pages.index')->with($Images);
    }
    public function about(){
        $title = 'Aboutus';
        return view('pages.about',compact('title'));
    }

    // public function services(){
    //     $data = array(
    //         'title' => 'services',
    //         'services' => ['web design','coding','networking']
    //     );
    //     return view('pages.services')->with($data);
    // }
    
    public function contact(){
        return view('pages.contact',['users'=>['debashish','sam','asa']]);
    }


 
}
