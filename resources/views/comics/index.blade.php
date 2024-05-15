@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-6 g-4">

                @foreach ($comicsList as $comic)
                    <div class="col">


                        <div class="card border-0">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}"
                                alt="">
                            <div class="card-body">
                               <div class="card-text"> {{ $comic->title }}</div>
                               <div class="card-text"> {{ $comic->type }}</div>
                               <div class="card-text"> {{ $comic->series }}</div>
                               <div class="card-text"> {{ $comic->price }}</div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            <div class="text-center p-4"><button type="button" class="btn btn-primary text-white">LOAD MORE</button>
            </div>
    </main>
@endsection
