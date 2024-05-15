@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $comic->thumb }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                    </div>
                    <div class="card-body">                 
                        <div class="card-text"><strong>Type:</strong> {{ $comic->type }}</div>       
                        <div class="card-text"><strong>Series:</strong> {{ $comic->series }}</div>
                        <div class="card-text"><strong>Description:</strong> {{ $comic->description }}</div>
                        <div class="card-text"><strong>Price:</strong> {{ $comic->price }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
