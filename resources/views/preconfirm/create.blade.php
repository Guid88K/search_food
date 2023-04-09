@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Створення нового рецепту
            </h2>

        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form method="post" action="{{ route('pre_confirm_recipe.store') }}" enctype="multipart/form-data">
                    <!-- Photos -->
                    <h2 class="content-heading text-black">Фото</h2>
                    <div class="row items-push">

                        <div class="col-lg-3">
                            <p class="text-muted">
                                Додайте приємні фотографії, щоб краще продемонструвати рецепт
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <div class="custom-file form">
                                @csrf

                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->

                                    <input type="file" class="custom-file-input" id="re-listing-photos"
                                           name="main_image"
                                           data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="re-listing-photos">Choose files</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END Photos -->

                    <!-- Vital Info -->

                    <h2 class="content-heading text-black">Назва рецепту</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Введіть назву свого рецепта
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="re-listing-name">Назва</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-name"
                                       name="name">
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading text-black">Категорія</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Введіть категорію свого рецепту
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="re-listing-name">Категорія</label>
                                <select class="form-control" id="kind_of_recipe" name="kind_of_recipe">
                                    <option value="first_dish">Перші страви</option>
                                    <option value="second_dish">Другі страви</option>
                                    <option value="salad">Салати</option>
                                    <option value="snack">Закуска</option>
                                    <option value="baking">Випічка</option>
                                    <option value="dessert">Десерти</option>
                                    <option value="drinks">Напої</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading text-black">Опис рецепту</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Додайте опис, щоб зацікавити рецептом
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="re-listing-description">Опис</label>
                                <textarea class="form-control form-control-lg" id="re-listing-description"
                                          name="description_for_recipe" rows="8"></textarea>
                            </div>

                        </div>
                    </div>
                    <!-- Additional Info -->

                    <!-- END Additional Info -->

                    <!-- Contact Info -->
                    <h2 class="content-heading text-black">Інгредієнти</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Які потрібно інгредієнти для вашого рецепту
                            </p>
                        </div>
                        <div class="col-lg-6  offset-lg-1 container2">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Інгредієнти:</label>
                                <div class="input-group mb-3">
                                    <div class="col-md-7 p-0">
                                        {{--                                            <input type="text" class="form-control"--}}
                                        {{--                                                   aria-label="Text input with checkbox" name="ing[]"/>--}}
                                        <input
                                            type="text" class="form-control" list="ing"
                                            aria-label="Text input with checkbox" name="ing[]"/>
                                    </div>
                                    <datalist id="ing">
                                        @foreach($ingredient as $i)
                                            <option value="{{$i->name}}">{{$i->name}}</option>
                                        @endforeach
                                    </datalist>
                                    <input
                                        type="text" class="form-control col-xs-2 ml-3"
                                        aria-label="Text input with checkbox" name="count[]"/>
                                    <input
                                        type="text" class="form-control col-xs-2 ml-3 mr-3"
                                        aria-label="Text input with checkbox" name="kind[]"/>

                                    <div class="input-group-prepend">
                                        <div class="input-group-text  add_form_field_copy ">
                                            <i class="fa fa-plus text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading text-black">Інструкція</h2>
                    <div class="row items-push  container3">
                        <div class="div">
                            <div class="div">
                                {{--                                    <input type="file" accept="image/*" onchange="loadFile(event)" name="image[]">--}}
                                <div class="form-group">
                                    <div class="custom-file form">
                                        <input type="file" accept="image/*" onchange="loadFile(event)"
                                               class="custom-file-input" name="image[]"
                                               data-toggle="custom-file-input" multiple>
                                        <label class="custom-file-label" for="re-listing-photos">Choose files</label>
                                    </div>
                                    <div class="div">

                                        <img width="300" height="200" id="output"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">

                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="re-listing-description"
                                              name="description[]" rows="11"></textarea>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text  add_form_field_copy1 ">
                                            <i class="fa fa-plus text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Submission -->
                    <div class="row items-push">
                        <div class="col-lg-7 offset-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i>
                                    Зберегти
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Form Submission -->
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var max_fields = 100;
            var wrapper2 = $(".container2");
            var add_button1 = $(".add_form_field_copy");

            var wrapper = $(".container3");
            var add_button = $(".add_form_field_copy1");

            var y = 1;
            $(add_button1).click(function (e) {
                e.preventDefault();
                if (y < max_fields) {
                    y++;
                    $(wrapper2).append('\n' +
                        '<div class="form-group">\n' +
                        '<div class="input-group mb-3">\n' +
                        '<div class="col-md-7 p-0">\n' +
                        '<input type="text" class="form-control"\n' +
                        'aria-label="Text input with checkbox" name="ing[]"/>\n' +
                        '</div>\n' +
                        '<input\n' +
                        'type="text" class="form-control col-xs-2 ml-3"\n' +
                        'aria-label="Text input with checkbox" name="count[]"/>\n' +
                        '<input\n' +
                        'type="text" class="form-control col-xs-2 ml-3 mr-3"\n' +
                        'aria-label="Text input with checkbox" name="kind[]"/>\n' +
                        '<div class="input-group-prepend delete">\n' +
                        '<div class="input-group-text  ">\n' +
                        '<i class="fa fa-minus text-dark"></i>\n' +
                        '</div>\n' +
                        '</div>\n' +
                        '</div>                                    ' +
                        '</div>' +
                        ''
                    ); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper2).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                y--;
            });

            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append(' <div class="block-content">' +
                        '<div class="row items-push  container3" id="div">\n' +
                        '<div class="div">\n' +
                        '                                <div class="div">\n' +
                        '                                    <div class="form-group">\n' +
                        '                                        <div class="custom-file form">\n' +
                        '                                            <input type="file" accept="image/*" onchange="loadFile(event)"\n' +
                        '                                                   class="custom-file-input" name="image[]"\n' +
                        '                                                   data-toggle="custom-file-input" multiple>\n' +
                        '                                            <label class="custom-file-label" for="re-listing-photos">Choose files</label>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="div">\n' +
                        '                                            <img width="300" height="200" id="output"/>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                            <div class="col-lg-7 offset-lg-1">\n' +
                        '                                <div class="form-group">\n' +
                        '                                    <div class="input-group mb-3">\n' +
                        '                                    <textarea class="form-control" id="re-listing-description"\n' +
                        '                                              name="description[]" rows="11"></textarea>\n' +
                        '                                        <div class="input-group-prepend delete">\n' +
                        '                                            <div class="input-group-text  add_form_field_copy1 ">\n' +
                        '                                                <i class="fa fa-minus text-dark"></i>\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>' +
                        '                        </div>' +
                        '                        </div>' +
                        ''
                    ); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').parent('div').parent('div').parent('div').parent('div').remove();

                x--;
            });
        });
    </script>
    <script>
        var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output');
                output.src = reader.result;
                document.getElementById('output').id = 'two';
            };
            reader.readAsDataURL(event.target.files[0]);

        };
    </script>

@endsection
