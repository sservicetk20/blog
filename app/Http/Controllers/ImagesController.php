<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests\ImageRequest;

class ImagesController extends Controller
{
    public function index(Request $request)
    {

    	//$images = Image($request->all());
    	$images = Image::all();
    	$images->each(function($images){
    		$images->article;
    	});
    	return view('admin.images.index')->with('images', $images);
    }
}
