@extends('layout.app')


@section('title', $viewData['title'])


@section('content')
       <div class="row">
           <div class="col-md-6 col-lg-4 mb-2">
               <img src="{{ asset('/image/game.png') }}" class="img-fluid rounded">
           </div>
           <div class="col-md-6 col-lg-4 mb-2">
               <img src="{{ asset('/image/safe.png') }}" class="img-fluid rounded">
           </div>
           <div class="col-md-6 col-lg-4 mb-2">
               <img src="{{ asset('/image/submarine.png') }}" class="img-fluid rounded">
           </div>
       </div>


@endsection
