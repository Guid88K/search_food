@extends('admin.layout')

@section('content')
    <div class=" text-right m-3">
        @if(0 === \count($recommendation))
            <a href="{{route('poll.create')}}" class="btn btn-alt-secondary">
                <i class="fa fa-plus"></i>
                Пройти опитування
            </a>
        @endif
    </div>

    @if(0 === \count($poll))
        <div class="m-2">
            <p class="font-size-h5 text-danger text-center">для того щоб отримати рекомендації потрібно пройти опитування на загальний психофізичний стан і емоційне благополуччя </p>
        </div>
    @else
        <div class=" text-right m-3">
            <a href="{{route('recommendation.create')}}" class="btn btn-alt-secondary">
                <i class="fa fa-"></i>
                отримати рекомендацію
            </a>
        </div>
    @endif


@endsection
