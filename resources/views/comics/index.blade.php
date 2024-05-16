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
                                        <!-- Modal trigger button -->
                                        <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $comic->id }}">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">
                                                            Be careful, you are eliminating the comic from your list!!
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">You are deleting the comic {{ $comic->title }}
                                                        permanently!</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Cancel <!--Annulla la modale-->
                                                        </button>
                                                        <form action="{{ route('comics.destroy', $comic) }}"
                                                            method="post">
                                                            @csrf <!--ricorda di aggiungere sempre il token univoco-->
                                                            @method('DELETE')
                                                            <!--aggiungi sempre method 'delete' per indicare che questo form post è di tipo delete-->
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



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
