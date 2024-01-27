@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="my-40 text-center">
            <h2 class="font-w500 mb-20">
                <i class="fa fa-search text-muted mr-5"></i> Аналіз психофізичного стану та емоційного благополуччя
            </h2>

        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form method="post" action="{{ route('poll.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Photos -->
                    <h2 class="content-heading text-black">Питання 1</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Виберіть правильну відповідь
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="general_1" value="1" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="general_1" value="2" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading text-black">Питання 2</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Виберіть правильну відповідь
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="stress_2" value="3" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="stress_2" value="4" id="flexRadioDefault4" >
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                    </div>

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
                </form>
            </div>
        </div>
    </div>
@endsection
