<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlesCategory = ArticleCategory::latest()->orderBy("title")->paginate(10);

        return view('admin.crud.yangiliklar-crud.article-category-list', compact(
            
            'articlesCategory',
       
            
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
        $request->validate([
            'title' => 'required|unique:article_category,title',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:640',          
            'slug' => 'required|unique:article_category,slug',
           
            

        ],
    
         [
            'title.required' => 'Yangilik nomini yozishingiz shart.',
            'slug.required'  => 'Yangilik slug (saytdagi manzilini) yozishingiz shart.',
            'img.required'  => 'Yangilik asosiy suratini yuklang.',
            // 'category_id.required'  => "Yangilik bo'limini tanlang.",
            // 'description.required'  => "Asosiy yangilik contentini yozing.",
            // 'title.unique'  => "Bu nomlanishdagi yangilik, saytda mavjud. Iltimos nomlanishi o'zgartiring.",
            'slug.unique'  => "Bu nomlanishdagi yangilik manzili, saytda mavjud.",
            'img.max'  => "Suratga Max: :max - kbite dan kotta bo'lmagan suratlarni yuklang.",

        ]
    
    );
       
       
        

            // Suratni yuklash kodi
            $image = $request->file('img');

            $new_name =  rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('yangiliklar'), $new_name);
        
            $new_name = 'yangiliklar/'.$new_name;

            // tugadi
            $category = new ArticleCategory([
        
                'title' => $request->get('title'),
                'slug' => $request->get('slug'),
                'img' => $new_name ,
             
        
            ]);
        
            //dd($yangilik);
            $category->save();
              
                 return redirect()->route('yangilik-bolim.index')->with('success', "Yangilik bo'limi yaratildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        //
    }
}
