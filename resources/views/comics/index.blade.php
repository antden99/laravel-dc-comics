@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Thumb</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Series</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comicsList as $comic)
                                <tr>
                                    <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" height="100" width="75">
                                    </td>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->type }}</td>
                                    <td>{{ $comic->series }}</td>
                                    <td>{{ $comic->price }}</td>
                                    <td>
                                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-dark">
                                            <i class="fa-regular fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-dark">
                                            <i class="fa-solid fa-pen-nib"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                            @csrf <!--ricorda di aggiungere sempre il token univoco-->
                                            @method('DELETE') <!--aggiungi sempre method 'delete' per indicare che questo form post è di tipo delete-->
                                            <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
