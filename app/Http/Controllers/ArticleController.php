<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        // $id = Auth::id();
        
    
 $articles = Article::all();
        return view('homeblog')->with('articles', $articles);
       
        // $articles = Article::where('user_id',$id)->get();
        // // dd($articles);

             
        // return view('articles.create',compact('articles')); 




    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        // dd($id);
        $request->validate([
            'titre'=>'required',
            'text'=>'required'
        ]);

        $article = new article([
            'titre' => $request->get('titre'),
            'text' => $request->get('text'),
            'user_id' => $id
        ]);
        $article->save();
        // return redirect('/users')->with('success', 'Article saved!');
        $articles = Article::all();
        return view('homeblog')->with('articles', $articles);
    }



 
                // $file = Image::create([
                //    'name' => $validated['name'],
                //     'path' => $url,
                //     'user_id'=> $id,
                // ]);
            

    //     return back()
    //         ->with('success','You have successfully upload image.');


    // }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function show($id)
 {
// 
 $userID = Auth::id();
 $article = Article::find($id);
//dd($article->user_id === $userID);
//  $canEdit = $userID === $id;

return View('articles.show',compact('article','userID'));

 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = article::find($id);
        return view('articles.edit', compact('article'));   
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
}
