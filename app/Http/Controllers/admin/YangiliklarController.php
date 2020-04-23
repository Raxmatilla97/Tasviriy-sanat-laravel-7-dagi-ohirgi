<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Article;

class YangiliklarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->orderBy("created_at")->paginate(10);

        $articleStat = Article::get();
        //dd($users->getRoleNames());
        //$user = $request->user();
       

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');
       


    return view('admin.crud.yangiliklar-crud.articles-list', compact(       
        'articles',          
        'articleStat',
        'articleStatActive',
        'articleStatNotActive'

        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activmas()
    {
        $articles = Article::latest()->where('active', '=', '0')->orderBy("created_at")->paginate(10);


        $articleStat = Article::get();
        //dd($users->getRoleNames());
        //$user = $request->user();
       

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');
       


    return view('admin.crud.yangiliklar-crud.articles-list', compact(       
        'articles',          
        'articleStat',
        'articleStatActive',
        'articleStatNotActive'

        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }



    
    public function active()
    {
        $articles = Article::latest()->where('active', '=', '1')->orderBy("created_at")->paginate(10);


        $articleStat = Article::get();
        //dd($users->getRoleNames());
        //$user = $request->user();
       

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');
       


    return view('admin.crud.yangiliklar-crud.articles-list', compact(       
        'articles',          
        'articleStat',
        'articleStatActive',
        'articleStatNotActive'

        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }


}
