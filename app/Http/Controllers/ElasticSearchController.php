<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ElasticSearchController extends Controller
{
	public function index(Request $request){
		$articles = Article::all();
		$search = $request->input('search');
		return view('elasticSearch')->with([
			'articles'=>$articles,
			'search'=>$search,
		]);
	}

	public function search(Request $request){
		Article::addAllToIndex();
		if($request->has('search')){
			$search = $request->input('search');
			if($search != ''){
				$articles = Article::searchByQuery(['match' => ['title' => $search]]);
			}else{
				$articles = Article::all();
			}
		}

		return view('elasticSearch')->with([
			'articles'=>$articles,
			'search'=>$search,
		]);
	}
}
