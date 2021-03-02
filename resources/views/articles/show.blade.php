@extends('layouts.mainlayout')
@section ('content') 
<style type = "text/css"> 
 
</style>
@include ('layouts.partials.nav')



<div class="container">
    <div class="col-md-12">
   

    <a href="post.html">
        <h2 class="post-title">
          {{ $article->id }})    {{ $article->titre  }}
        </h2></a>
        <h5 class="post-subtitle">
          {{ $article->text }}
        </h5>
      
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on September 24, 2019</p>
        
        <div class="clearfix">
            @if ($article->user_id === $userID)
            <a class="btn btn-success float-right"  href="{{route('blogs.edit',$article->id)  }}">Modifier</a>
            <form action="{{ route('blogs.destroy', $article->id)}}" method="post" >
                @csrf
                @method('DELETE')
                <button class="btn btn-danger float-right" type="submit">Delete</button>
              </form>
                {{-- <a class="btn btn-danger float-right"  href="{{route('blogs.destroy',$article->id)  }}">Supprimer</a> --}}
                
            @endif
            
            
          </div>
    </div>
    <hr>



    </div>
    </div>
   @stop