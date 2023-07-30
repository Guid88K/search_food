@extends('admin.layout')

@section('content')
    <div class="content ">
        <div class="row gutters-tiny invisible" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="{{url('/recipe')}}">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-primary">
                        <div class="ribbon-box">{{$recipe->count()}}</div>
                        <p class="mt-5">
                            <i class="si si-book-open fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Сайт</p>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="{{url('/admin/recipe/create')}} ">
                    <div class="block-content bg-gd-primary">
                        <p class="mt-5">
                            <i class="si si-plus fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Новий рецепт</p>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="{{url('/admin/confirm')}} ">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-primary">
                        <div class="ribbon-box">{{$pre_confirm->count()}}</div>
                        <p class="mt-5">
                            <i class="si si-check fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">На підтвердження</p>
                    </div>
                </a>
            </div>

        </div>

        <div class="content">
            <div class="row">
                @foreach($pre_confirm as $s)
                    <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">

                        <div class="block block-rounded">
                            <div class="block-content p-0 overflow-hidden">
                                <a class="img-link" href="
                                    {{route('pre_confirm_recipe.show',$s->id )}}
                                    ">
                                    <img class="img-fluid rounded-top" src="{{ asset('upload/'.$s->recipe_image)}}"
                                         alt="">
                                </a>
                            </div>
                            <div class="block-content border-bottom">
                                <h4 class="font-size-h5 mb-10">{{$s->recipe_name}}</h4>
                                <p class="text-muted">
                                    @if(!$s->is_published) <i class="fa fa-map-pin mr-5 text-warning"> На підтверджені</i> @endif
                                    @if($s->is_published) <i class="fa fa-map-pin mr-5 text-success"> Підтвережно </i> @endif
                                </p>
                            </div>
                            <div class="block-content"></div>
                            <div class="block-content block-content-full">
                                <div class="row">
                                    <div class="col-6">
                                        <form action="{{url('admin/confirm/'.$s->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-alt-secondary text-center">
                                                Підтвердити
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{url('admin/confirm/'.$s->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-alt-primary text-center ">
                                                Видалити
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
