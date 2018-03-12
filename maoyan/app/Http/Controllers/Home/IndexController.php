<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   
	public function getIndex(){
		return view('home/index');
	}

	public function getFilms(){
		 return view('home/films');
	}

	public function getCinemas(){
		 return view('home/cinemas');
	}

	public function getBoard(){
		 return view('home/board');
	}

	public function getNews(){
		 return view('home/news');
	}

	public function getLogin(){
		 return view('home/login');
	}


}
