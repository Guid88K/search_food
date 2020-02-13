<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet " href="{{asset('main.css')}}">
    <title>FoodSearch</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rye&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid  m-0 p-0">
    <div id="ll">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-3 ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-5 mr-4 " href="{{url('/recipe')}}">Всі<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_first')}}">Перші страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_second')}}">Другі страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_salad')}}">Салати</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_snack')}}">Закуска</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_baking')}}">Випічка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_dessert')}}">Десерти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 " href="{{url('/search_drinks')}}">Напої</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row  p-0 m-0">
        <div class="col-md-12">
            <h1 class="text-md-center ml-lg-5 text-lg-left recipeName font-weight-bold mt-3">{{$recipe->recipe_name}}</h1>
            <hr>
        </div>

        <div class="col-lg-10 mx-auto mt-3">
            <div class="mb-3 text-right">
                <i class="fa fa-star  fa-2x"></i>
                <i class="fa fa-star  fa-2x"></i>
                <i class="fa fa-star  fa-2x"></i>
                <i class="fa fa-star  fa-2x"></i>
                <i class="fa fa-star  fa-2x"></i>

            </div>
            <img class="img-fluid mx-auto" src="{{asset('upload/'.$recipe->recipe_image)}}">
        </div>

        <div class="row m-0  p-0">

                <div class="col-md-9 mx-auto mt-4 ">
                    <p class="">{{$recipe->recipe_description}}</p>
                </div>

        </div>
        <div class="col-lg-10 mx-auto mt-3 ">
            <p class=" text-center mb-4 fontGreat font-weight-bold h2 ">
                Інгредієнти:</p>
{{--            <div class="row p-0 m-0"> зробити так щоб інгредієнти були роздідені в двох колонках--}}
{{--                <div class="col-md-6">--}}
{{--                    @foreach($food_ing as $i)--}}
{{--                        <ul>--}}
{{--                            <li>{{$i->ingredient_name}} {{$i->ingredient_count}} {{$i->ingredient_kind}}</li>--}}
{{--                        </ul>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
            <hr>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4 fontGreat font-weight-bold ">Приготування</h2>
        @foreach($food_recipe as $fr)
            <div class="blocks">
                <div class="row m-0 mb-4  p-0">
                    <div class="col-md-12 mx-auto my-auto">
                        <h2 class="text-left step fontGreat font-weight-bold "> {{$loop->index+1}} крок</h2>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="px-2 ">{{$fr->description}}</p>
                        </div>

                    <div class="col-md-6 m-0  p-0">
                        <img class="img-fluid" src="{{asset('upload/'.$fr->image)}}">
                    </div>
                </div>
            </div>
            <hr class="my-4 ">
        @endforeach
    </div>

{{--    <div class="row mt-5 m-0">--}}
{{--        <div class="col-lg-10 mx-auto">--}}
{{--            <nav aria-label="Page navigation example">--}}
{{--                <ul class="pagination  justify-content-center">--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link rounded-circle text-white bg-dark" href="#" aria-label="Previous">--}}
{{--                            <span aria-hidden="true">&laquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="  page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">3</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link rounded-circle text-white bg-dark" href="#" aria-label="Next">--}}
{{--                            <span aria-hidden="true">&raquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="row mt-3 m-0">
        <div class="p-4 bg-dark text-white col-md-3">
            <h2 class="mb-5">Pingendo</h2>
            <p>A company for whatever you may need, from website prototyping to publishing</p>
            <i class="mr-3 fa fa-twitter "></i>
            <i class="mr-3 fa fa-facebook"></i>
            <i class="mr-3 fa fa-google-plus"></i>
            <i class="mr-3 fa fa-pinterest-square"></i>

        </div>
        <div class="p-4  bg-dark text-white col-md-3">
            <h2 class="mb-5">Mapsite</h2>
            <ul class="list-unstyled"><a href="#" class="text-white">Home</a> <br> <a href="#" class="text-white">About
                    us</a> <br> <a href="#" class="text-white">Our services</a> <br> <a href="#"
                                                                                        class="text-white">Stories</a>
            </ul>
        </div>
        <div class="p-4 bg-dark text-white col-md-3">
            <h2 class="mb-5">Contact</h2>
            <p><a href="#" class="text-white">
                    <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a></p>
            <p><a href="#" class="text-white">
                    <i class=" fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>
            <p><a href="#" class="text-white">
                    <i class=" fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a></p>
        </div>
        <div class="p-4 bg-dark text-white col-md-3">
            <h2 class="mb-5">Subscribe</h2>
            <form>
                <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label> <input
                        type="email" class="form-control " placeholder="Enter email"></fieldset>
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </form>
        </div>
    </div>


</div>

<script
    src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
