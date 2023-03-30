@extends('layout.layouts')

@section('titulo')
 historia de 
@endsection

@section('contenido')
<div class="card-body text-dark" style="background-color: rgba(128, 128, 128, 0.10)">
 
  @if($posts -> count())
  <h1 class="card-title text-center">PUBLICACIONES</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
   @foreach ($posts as $post)
   <div class="col">
     <div class="card h-100">
       <img src="{{ asset('uploads').'/'.$post->imagen }}" class="card-img-top" alt="Devstagram"/>
       <div class="card-body">
         <h5 class="card-title">{{ $post->titulo }}</h5>
         <p class="card-text">
           <small class="text-info">{{ '@'.$post->user->username }}</small>
           <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
         </p>
       </div>
       <div class="card-footer">
         <a href="{{ route('posts.show', ['post' => $post , 'user' => $user]) }}" ><i class="far fa-comment"></i></a>
       </div>
     </div>
   </div>
   @endforeach
 </div>
 <div> {{ $posts->links('pagination::bootstrap-5') }}
  @else
  <h1 class="text-center">NO HAY PUBLICACIONES</h1>
  @endif








</div>
</div>
@endsection
