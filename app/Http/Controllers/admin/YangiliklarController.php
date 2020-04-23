<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Auth;
use App\ArticleCategory;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user();
        $category = ArticleCategory::get();
       
       
        $users = DB::table('users')
        //->join('users_roles', 'users.id', '=', 'users_roles.user_id')
       ->join('roles', 'users.id', '=', 'roles.id')            
        ->select('users.*', 'roles.*')
        ->where('users.id', '=',  $user->id )
        ->get();
        //dd($users);  


        return view('admin.crud.yangiliklar-crud.articles-create', compact( 'users','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
         $request->validate([
            'title' => 'required|unique:yangiliklar,title',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'image' => 'required',
            'cate_id' => 'required',
            'desc' => 'required',
            'slug' => 'required|unique:yangiliklar,slug',
            'user_id' => 'required',
           // 'kafedra_id' => 'required',
            //'tasdiq' => 'required',
            'active' => 'required',
            

        ],
    
         [
            'title.required' => 'Yangilik nomini yozishingiz shart.',
            'slug.required'  => 'Yangilik slug (saytdagi manzilini) yozishingiz shart.',
            'image.required'  => 'Yangilik asosiy suratini yuklang.',
            'cate_id.required'  => "Yangilik bo'limini tanlang.",
            'description.required'  => "Asosiy yangilik contentini yozing.",
            'title.unique'  => "Bu nomlanishdagi yangilik, saytda mavjud. Iltimos nomlanishi o'zgartiring.",
            'slug.unique'  => "Bu nomlanishdagi yangilik manzili, saytda mavjud.",

        ]
    
    );
       
       
        

            // Suratni yuklash kodi
            $image = $request->file('image');

            $new_name =  rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('yangiliklar'), $new_name);
        
            $new_name = 'yangiliklar/'.$new_name;

            // tugadi

        //dd($new_name);
      $yangilik = new Article([
        
        'title' => $request->get('title'),
        'slug' => $request->get('slug'),
        'image' => $new_name ,
        'desc' => $request->get('desc'),
        'cate_id' => $request->get('cate_id'),
        'user_id' => $request->get('user_id'),
        
        'active' => $request->get('active')

    ]);

    //dd($yangilik);
    $yangilik->save();
      
         return redirect()->route('yangiliklar')->with('success', "Siz yozgan yangilik bazaga kiritildi.");
         
       
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
