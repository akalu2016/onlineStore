
   

@extends('layout.app')

@section('title') Testing Adding New Menu @endsection

@section('menu_items')

@parent

                   <li class="nav-item">
                   <a class="nav-link" href="#">New Link1</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link" href="#">New Link2</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link" href="#">New Link3</a>
                   </li>              
@endsection

@section('content')
<div class="jumbotron">
<h1 class="display-4">New Menus Added</h1>
</div>
@endsection

  