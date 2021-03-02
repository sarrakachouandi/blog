@extends('layouts.mainlayout')
@section ('content') 
<style type = "text/css"> 
 
</style>


<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
       
            @csrf
           <div class="">
                <div class="col-md-6">
                    <label class="form-label"> Titre de l'article </label>
                    <input type="string" name="titre" class="form-control" value={{ $article->titre }} >
                </div>
            
                <div class="col-md-6">
                    <label class="form-label"> text </label>
                    <input type="text" name="text" class="form-control" value={{ $article->text }} >

                <div class="mt-3 col-md-2">
                    <button type="submit" class="btn btn-success">enregistrer</button>
                </div>

            </div> 
        </form>
      
    </div>
</div>

@endsection