@extends('layouts.mainlayout')
@section('content')
<div class="container">
    
     





        
        @foreach ($articles as $article)
       
            

 <div class="col-lg-4 col-md-10 mx-auto my-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              {{ $article->id }})    {{ $article->titre  }}
            </h2>
            <h3 class="post-subtitle">
              {{ $article->text }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>

        </div>
        <hr>
       
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right"  href="{{route('blogs.show',$article->id)  }}">voir cet article &rarr;</a>
        </div>
      </div>
   
  </div>
@endforeach
  <hr>
@endsection