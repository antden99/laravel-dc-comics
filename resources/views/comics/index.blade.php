@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-6 g-4">

                @foreach ($comicsList as $array)
                    <div class="col">


                        <div class="card border-0">
                            <img class="card-img-top" src="{{ $array['thumb'] }}"
                                alt="image describing the following array {{ $array['title'] }}">
                            <div class="card-body">
                               <div class="card-text"> {{ $array['title'] }}</div>
                               <div class="card-text"> {{ $array['type'] }}</div>
                               <div class="card-text"> {{ $array['series'] }}</div>
                               <div class="card-text"> {{ $array['price'] }}</div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            <div class="text-center p-4"><button type="button" class="btn btn-primary text-white">LOAD MORE</button>
            </div>
    </main>
@endsection
