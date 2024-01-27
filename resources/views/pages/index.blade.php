@php use App\User; @endphp
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
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">

</head>
<style>
    .navbar-custom {
        height: 45px; /* Задайте желаемую высоту здесь */
    }
</style>
<body>
<div class="container-fluid m-0 p-0 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Search food
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Вхід</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Реєстрація</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                        @if(isset($user) && 'admin' === $user->role)
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('/admin/recipe')}}">Панель керування</a>
                            </li>
                        @endif
                        @if(isset($user) && 'member' === $user->role)
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('/user/pre_confirm_recipe')}}">Панель
                                    керування</a>
                            </li>
                            @endif
                            </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluidd">
        <div class="row-fluid">
            <div class="centering text-center">
                <h2 class="align-middle EnjCook font-weight-bold text-white text-center ">Насолоджуйтесь
                    приготуванням їжі</h2>
                <button type="button"
                        class=" btn btn-success mt-5 mb-5 bay-diagnosis-btn col-md-2 col-7  " data-toggle="modal"
                        data-target="#recipe_search">Підібрати рецепт
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="recipe_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Пошук рецепту</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span class="text-light" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{asset('search')}}">
                        <div class="form-group container2">
                            <label for="exampleFormControlInput1">Інгредієнти:</label>
                            <div class="input-group mb-3">
                                <input
                                    type="text" class="form-control col-xs-2 ml-3" list="ing"
                                    aria-label="Text input with checkbox" name="ingredient_filter[]"
                                    autocomplete="off"/>

                                <datalist id="ing">
                                    @foreach($ingredient as $i)
                                        <option value="{{$i->name}}">{{$i->name}}</option>
                                    @endforeach
                                </datalist>
                                <div class="input-group-prepend">
                                    <div class="input-group-text  add_form_field_copy ">
                                        <i class="fa fa-plus text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                            <button type="submit" class="btn btn-dark">Пошук</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div id="ll">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link mr-xl-4 mr-lg-2 " href="{{url('/recipe')}}">Всі<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2  " href="{{url('/search_by_category/first_dish')}}">Перші
                            страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2  " href="{{url('/search_by_category/second_dish')}}">Другі
                            страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2  " href="{{url('/search_by_category/salad')}}">Салати</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2  " href="{{url('/search_by_category/snack')}}">Закуска</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_by_category/baking')}}">Випічка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2  " href="{{url('/search_by_category/dessert')}}">Десерти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-xl-4 mx-lg-2 " href="{{url('/search_by_category/drinks')}}">Напої</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>


    <div class="container mt-5">
        @foreach($recipe as $r)
            @if($loop->index%2==0)
                <div class="row d-flex  m-0 p-0">

                    <div
                        class="col-lg-6 col-md-12 col-sm-12 m-0 p-0  order-lg-1 order-md-1 order-sm-1 order-xs-1 order-1 ">
                        <a href="{{route('recipe.show',  $r->id)}}">
                            <img src="{{ asset('upload/'.$r->recipe_image)}}" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12  order-lg-2 order-md-2 order-sm-2 order-xs-2 order-2">
                        <div class="m-3 ">
                            <a class="textName" href="{{route('recipe.show',  $r->id)}}">
                                <h3 class="text-center recipeName">{{$r->recipe_name}}</h3>
                            </a>

                            <div class="mt-4 mb-2 ml-ld-5 text-lg-right">
                                <p class="font-italic">Створено: {{User::find($r->user_id)->name}}</p>

                            </div>
                            @if(0 < strlen($r->recipe_description))
                                <p class="ml-2 res_description">
                                    {{\mb_strcut(\strip_tags($r->recipe_description),0,300)."..."}}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>

            @endif
            @if($loop->index%2==1)
                <div class="row d-flex p-0 m-0">

                    <div class="col-lg-6 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2 order-xs-2 order-2">
                        <div class="m-3 ">
                            <a class="textName" href="{{route('recipe.show',  $r->id)}}">
                                <h3 class="text-center recipeName">{{$r->recipe_name}}</h3>
                            </a>

                            <div class="mt-4 mb-2 ml-ld-5 text-lg-right">
                                <p class="font-italic">Створено: {{User::find($r->user_id)->name}}</p>

                            </div>
                            @if(0 < strlen($r->recipe_description))
                                <p class="ml-2 res_description">
                                    {{mb_strcut(strip_tags($r->recipe_description),0,300)."..."}}
                                </p>
                            @endif
                        </div>

                    </div>
                    <div
                        class="col-lg-6 col-md-12 col-sm-12 m-0 p-0  order-lg-1 order-md-1 order-sm-1 order-xs-1 order-1 ">
                        <a href="{{route('recipe.show',$r->id)}}">
                            <img src="{{ asset('upload/'.$r->recipe_image)}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="row mt-5 m-0">
        <div class="col-lg-10 mx-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center">
                    {{$recipe->links('vendor.pagination.default')}}

                </ul>
            </nav>
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
<script>
    $(document).ready(function () {
        var max_fields = 100;
        var wrapper2 = $(".container2");
        var add_button1 = $(".add_form_field_copy");

        var y = 1;
        $(add_button1).click(function (e) {
            e.preventDefault();
            if (y < max_fields) {
                y++;
                $(wrapper2).append('\n' +
                    '<div class="input-group mb-3">\n' +
                    ' <input\n' +
                    'type="text" class="form-control col-xs-2 ml-3" list="ing"\n' +
                    'aria-label="Text input with checkbox" name="ingredient_filter[]"  autocomplete="off"/>' +
                    '<div class="input-group-prepend delete">\n' +
                    '<div class="input-group-text  add_form_field_copy ">\n' +
                    '<i class="fa fa-minus text-dark"></i>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '</div>'
                ); //add input box
            } else {
                alert('Ви перевищили ліміт')
            }
        });
        $(wrapper2).on("click", ".delete", function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            y--;
        });
    });
</script>
</body>
</html>
