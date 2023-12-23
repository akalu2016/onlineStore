!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <title>Home Page</title>
 </head>
 <body>
 

  @extends('layout.app')


@section('title') Our Employees @endsection


@section('content')


   <div class="container info">
       <div class="row">
           @foreach($employees as $employee )


               <div class="card col-lg-3 col-md-3 col-sm-12 text-center mx-auto">
                   <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                   <div class="card-body">
                       <h4 class="card-title">{{$employee[0]}}</h4>
                       <br>
                       <h6>{{$employee[1]}} At {{$employee[2]}}</h6>
                       <p> <i> {{$employee[3]}} </i> </p>
                   </div>
               </div>


           @endforeach
       </div>
   </div>
@endsection





   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




 </body>
</html>