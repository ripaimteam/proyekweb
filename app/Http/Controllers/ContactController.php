<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function Contact(){
    	return view('contact');
    }
}