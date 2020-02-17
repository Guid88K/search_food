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
<body>
<div class="container-fluid m-0 p-0 ">
    <div class="bg">

        <table style="max-height: 20%; width: 100%; min-height: 95%;">
            <tbody>
            <tr>
                <td class="align-middle">
                    <div>
                        <h2 class="align-middle EnjCook font-weight-bold text-white text-center ">Насолоджуйтесь
                            приготуванням їжі</h2>
                        {{--                        <p class="align-middle mt-3 recipes font-weight-bold  text-white text-center ">Понад--}}
                        {{--                            {{$count->count()}} смачних рецептів.</p>--}}
                    </div>
                    <div class="text-center mt-5">
                        <button type="button"
                                class=" btn btn-success mb-5 bay-diagnosis-btn col-md-2 col-7  " data-toggle="modal"
                                data-target="#recipe_search">Підібрати рецепт
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>

        </table>
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
                            <a href="{{route('recipe.show',  $r->id)}}">
                            <h3 class="text-center recipeName">{{$r->recipe_name}}</h3>
                            </a>
                            <hr class="hrr"/>
                            <div class="mt-4 mb-2 ml-ld-5 text-lg-right">
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>

                            </div>


                            <p class="ml-2 res_description">{{mb_strcut(strip_tags($r->recipe_description),1,300)."..."}}</p>
                        </div>


                    </div>
                </div>
            @endif
            @if($loop->index%2==1)
                <div class="row d-flex p-0 m-0">

                    <div class="col-lg-6 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2 order-xs-2 order-2">
                        <div class="m-3 ">
                            <a href="{{route('recipe.show',  $r->id)}}">
                            <h3 class="text-center recipeName">{{$r->recipe_name}}</h3>
                            </a>
                            <hr class="hrr"/>
                            <div class="mt-4 mb-2 mr-lg-5 text-lg-left">
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>
                                <i class="fa fa-star  fa-2x"></i>

                            </div>
                            <p class="ml-2 res_description">{{mb_strcut(strip_tags($r->recipe_description),1,300)."..."}}</p>

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


    <div class="row mt-5 m-0">
        <div class="col-lg-10 mx-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center">
                    {{$recipe->links('vendor.pagination.default')}}

                    {{--                        <li class="page-item ">--}}
                    {{--                            <a class="page-link rounded-circle text-white bg-dark" href="#" aria-label="Previous">--}}
                    {{--                                <span aria-hidden="true">&laquo;</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="  page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">1</a></li>--}}
                    {{--                        <li class="page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">2</a></li>--}}
                    {{--                        <li class="page-item"><a class="page-link rounded-circle  text-white bg-dark" href="#">3</a></li>--}}
                    {{--                        <li class="page-item">--}}
                    {{--                            <a class="page-link rounded-circle text-white bg-dark" href="#" aria-label="Next">--}}
                    {{--                                <span aria-hidden="true">&raquo;</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                </ul>
            </nav>
        </div>
    </div>
{{--    <div class="row mt-3 m-0" style="background-color: #202326">--}}
{{--        <div class="p-4 bg-dark text-white col-md-3">--}}
{{--            <h2 class="mb-5">Pingendo</h2>--}}
{{--            <p>A company for whatever you may need, from website prototyping to publishing</p>--}}
{{--            <i class="mr-3 fa fa-twitter "></i>--}}
{{--            <i class="mr-3 fa fa-facebook"></i>--}}
{{--            <i class="mr-3 fa fa-google-plus"></i>--}}
{{--            <i class="mr-3 fa fa-pinterest-square"></i>--}}

{{--        </div>--}}
{{--        <div class="p-4  bg-dark text-white col-md-3">--}}
{{--            <h2 class="mb-5">Mapsite</h2>--}}
{{--            <ul class="list-unstyled"><a href="#" class="text-white">Home</a> <br> <a href="#" class="text-white">About--}}
{{--                    us</a> <br> <a href="#" class="text-white">Our services</a> <br> <a href="#" class="text-white">Stories</a>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="p-4 bg-dark text-white col-md-3">--}}
{{--            <h2 class="mb-5">Contact</h2>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a></p>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class=" fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class=" fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a></p>--}}
{{--        </div>--}}
{{--        <div class="p-4 bg-dark text-white col-md-3">--}}
{{--            <h2 class="mb-5">Subscribe</h2>--}}
{{--            <form>--}}
{{--                <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label> <input--}}
{{--                        type="email" class="form-control " placeholder="Enter email"></fieldset>--}}
{{--                <button type="submit" class="btn btn-outline-dark">Submit</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}


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
        var max_fields = 20;
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
