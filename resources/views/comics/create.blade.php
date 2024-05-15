@extends('layout.app')




@section('content')
    <main>
        <div class="container">
            <h1>Add a new Comic</h1>
            <form action="{{route('comics.store')}}" method="post">
                @csrf <!--ricorda questo codice a ogni nuovo form di tipo post per evitare problemi-->
                <!--ricorda sempre name univoco uguale al nome delle tabelle perchè dopo è èpiù facile recuperare il valore-->
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="descriptionHelp" name="title">
                    <div id="titleHelp" class="form-text">Type a title for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleInputDescription" aria-describedby="descriptionHelp" name="description"></textarea>
                    <div id="descriptionHelp" class="form-text">Type a description for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputThumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="exampleInputThumb" aria-describedby="descriptionHelp" name="thumb">
                    <div id="ThumbHelp" class="form-text">Type a Thumb for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleInputPrice" aria-describedby="descriptionHelp" name="price">
                    <div id="PriceHelp" class="form-text">Type a Price for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputSeries" class="form-label">Series</label>
                    <input type="text" class="form-control" id="exampleInputSeries" aria-describedby="descriptionHelp" name="series">
                    <div id="SeriesHelp" class="form-text">Type a Series for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputSaleDate" class="form-label">SaleDate</label>
                    <input type="text" class="form-control" id="exampleInputSaleDate" aria-describedby="descriptionHelp" name="sale_date">
                    <div id="SaleDateHelp" class="form-text">Type a SaleDate for the current</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputType" class="form-label">Type</label>
                    <input type="text" class="form-control" id="exampleInputType" aria-describedby="descriptionHelp" name="type">
                    <div id="TypeHelp" class="form-text">Type a Type for the current</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
