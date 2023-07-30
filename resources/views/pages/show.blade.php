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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-lg-5 mr-xl-4 mr-lg-2 " href="{{url('/recipe')}}">Всі<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_first')}}">Перші страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_second')}}">Другі страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_salad')}}">Салати</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_snack')}}">Закуска</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_baking')}}">Випічка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_dessert')}}">Десерти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_drinks')}}">Напої</a>
                    </li>
                    @if(isset($user) && 'admin' === $user->role)
                        <li class="nav-item">
                            <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/admin/recipe')}}">Панель керування</a>
                        </li>
                    @endif
                    @if(isset($user) && 'member' === $user->role)
                        <li class="nav-item">
                            <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/user/pre_confirm_recipe')}}">Панель
                                керування</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <div class="row  p-0 m-0">
        <div class="col-md-12">
            <h1 class="text-md-center ml-lg-5 text-center  text-lg-left recipeName font-weight-bold mt-lg-3 mt-md-4">{{$recipe->recipe_name}}</h1>
            <hr>
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-lg-10 mx-auto mt-3">
            <div class="mb-3 text-right">
                <p class="font-italic">Створено: {{\App\User::find($recipe->user_id)->name}}</p>

            </div>

        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-lg-10 d-flex justify-content-center mt-3">
            <img class="img-fluid mx-auto" src="{{asset('upload/'.$recipe->recipe_image)}}">
        </div>
    </div>

    <div class="row m-0  p-0">

        <div class="col-md-9 mx-auto mt-4 ">
            <p class="">{{$recipe->recipe_description}}</p>
        </div>

    </div>
    <div class="row m-0 p-0">

        <div class="col-lg-10 mx-auto mt-3 ">
            <p class=" text-center mb-4 fontGreat font-weight-bold h2 ">
                Інгредієнти</p>
        </div>
    </div>
    <div class="container">
        <div class="row p-0 m-0">


            @foreach($food_ing as $i)

                @if($loop->index%2 == 0)

                    <div class="col-md-6 ">


                        <ul class="textCenter">
                            <li>{{$i->ingredient_name}} {{$i->ingredient_count}} {{$i->ingredient_kind}}</li>
                        </ul>


                    </div>

                @endif
            @endforeach
            @foreach($food_ing as $i)
                @if($loop->index%2 == 1)

                    <div class="col-md-6 ">

                        <ul class="textCenter">
                            <li>{{$i->ingredient_name}} {{$i->ingredient_count}} {{$i->ingredient_kind}}</li>
                        </ul>


                    </div>

                @endif

            @endforeach


        </div>
    </div>
    <hr>


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
                    <div class="col-md-6 ">
                        <p class="px-lg-2 ">{{$fr->description}}</p>
                    </div>

                    <div class="col-md-6 m-0  p-0">
                        <img class="img-fluid mb-lg-5" src="{{asset('upload/'.$fr->image)}}">
                    </div>
                </div>
            </div>
            <hr class="my-4 ">
        @endforeach

        <div class="container-fluid">
            <div class="row bootstrap">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-sm-8">
                    <div class="panel-heading">
                        <h2 class="text-center mb-4 fontGreat font-weight-bold">
                            Коментарі рецепту:
                        </h2>
                    </div>
                    <div class="panel-body">
                        @if(isset(Auth::user()->id))
                            <form action="{{ url('comment', $recipe->id)}}"
                                  enctype="multipart/form-data" method="post">
                                @csrf
                                <textarea class="form-control" name="text" placeholder="Напишіть коментар..."
                                          rows="3"></textarea>
                                <br>
                                <button type="submit" class="btn btn-dark pull-right">Коментувати</button>
                                <div class="clearfix"></div>
                            </form>

                            <hr>
                        @endif
                        <div class="row m-1 pl-md-1">
                            @foreach($comments as $c)
                                <div class="col-md-12">

                                        <span class="text-muted pull-right">
                                    <small class="text-muted">{{$c->created_at}}</small>
                                        </span>
                                    <strong class="text-dark">{{\App\User::find($c->user_id)->name}}</strong>
                                    <p>
                                        {{$c->text}}
                                    </p>
                                    @if(isset(Auth::user()->id) && ('admin' === Auth::user()->role || $c->user_id === Auth::user()->id))
                                        <a
                                            onclick="event.preventDefault();
                                                     document.getElementById('delete_comment').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor"
                                                 class="bi bi-trash3-fill  pull-right" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                            </svg>
                                        </a>
                                    @endif
                                    <form id="delete_comment" action="{{route('comment.destroy' , $c->id)}}"
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
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
