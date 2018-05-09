<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hamcuaCl(){
    	$name = 'binhtran';
    	return view('catalog_sidebar')->with('minh',$name);
    }

    function about(){
    	return view('about');
    }
    function home(){
    	return view('home');
    }

    function Postproduct(Request $request){
            echo $request->tensanpham;

            if($request->hasFile('imagesSP'))
        {
            $fileImg = $request->file('imagesSP');
            $filename = $fileImg -> getclientOriginalName('imagesSP');
            echo $filename;
            $fileImg->move('resources\assets\images\products',$filename);
        }
            else
        {
            echo "Chua co file";
        }

            if($request->hasFile('imagesGCN'))
        {
            $fileImg = $request->file('imagesGCN');
            $filename = $fileImg->getclientOriginalName('imagesGCN');
            echo $filename;
            $fileImg->move('resources\assets\images\Certificate',$filename);
        }
            else
        {
            echo "Chua co file";
        }

    }

}
