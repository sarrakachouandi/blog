@extends ('layouts.mainlayout')
@section ('content') 
<style type = "text/css"> 
 
</style>
@include ('layouts.partials.nav')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-danger text-center my-5"> New Article </h2>
            
        </div>
        
    </div>
</div>

<div>
 

    
           
<!-- <div>
        <a style="margin: 19px;" href=""  class="btn btn-info">Upload Image </a>
        </div> -->

    
            
       
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
       
            @csrf
           <div class="">
                <div class="col-md-6">
                    <label class="form-label"> Titre de l'article </label>
                    <input type="string" name="titre" class="form-control">
                </div>
            
                <div class="col-md-6">
                    <label class="form-label"> text </label>
                    <textarea  name="text" class="form-control"></textarea>
                </div>

                <div class="mt-3 col-md-2">
                    <button type="submit" class="btn btn-success">enregistrer</button>
                </div>

            </div> 
        </form>



<div class="row">
   

 
  
   
    
    {{-- <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <h2 class="card-header w-100 m-1 text-center text-danger my-5">Upload Image</h2>
        </div> --}}
    

    {{-- <div id="center" class="col-lg-4 p-5">
        <div class="card" style="width: 18rem;">
            <img src="{{ $image->path }}" alt="{{ $image->name }}"/>
            <div class="card-body">
              <p class="card-text"> {{ $image->name }}</p>
            </div>
          </div> --}}





<div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    {{-- <img src="images/{{ Session::get('image') }}"> --}}
    @endif


    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
</div>



      
    </div>

 <div class="mb-5">
  
        
   
   
 </div>
  
 </div>

</div>
 @endsection