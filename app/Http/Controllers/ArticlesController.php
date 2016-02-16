<?php

namespace App\Http\Controllers;

/*The error message is due to the call not going through the Request facade*/
// use Illuminate\Http\Request;
use Request;

// Use carbon class to generate time(now)
use Carbon\Carbon;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index() {
    	// return 'Hello Article Controller';

    	/*// Show all the articles
		$articles = Article::all();*/
    	
    	// Sort the newest article on the top...
    	$articles = Article::latest('published_at')->get();

    	/*// Show data of the database laracast5
    	return $articles;*/
    	
    	// Return view of articles table using either compact or with
    	return view('articles.index', compact('articles'));
    	//return view('articles.index', with('articles', $articles));
    }


    public function show($id) {
    	// return only what we type in the URL
    	
    	// return $id;


    	// Way to find $id when searching for the id
/*    	$article = Article::find($id);

    	return $article;
*/
/*    	// return Null value when id is not available
    	dd($articles);
*/
    	// Show the 404 error page not found if there is no id match
    	/*if (is_null($articles)){
    		abort(404);
    	}
    	*/	
    	
		// Way to find $id when searching for the id or FAIL if cant find $id
    	$article = Article::findOrFail($id);

    	return view('articles.show', compact('article'));
    }


    public function create(){
    	// return 'Create Successful';

    	return view('articles.create');
    }


    public function store() {

    	$input = Request::all();
    	$input['published_at'] = Carbon::now();


    	Article::create($input);

    	return redirect('articles');
    }



}
