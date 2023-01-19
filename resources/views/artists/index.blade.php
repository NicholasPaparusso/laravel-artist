@extends('layouts.app')

@section('content')
    <h1>index</h1>
    <div class="container">

        @if (session('deleted'))
            <div class="alert alert-info" role="alert">
                {!! session('deleted') !!}
            </div>
        @endif
        <table class="table bg-light table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artists as $artist)
                    <tr>
                        <td>{{$artist->id}}</td>
                        <td>{{$artist->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="" title="show"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning " href="" title="edit"><i
                                    class="fa-solid fa-pencil"></i></a>
                            {{-- <form action=""
                                onsubmit="return confirm('Confermi l\'eliminazione di :')"
                                class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger " href="#" title="delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form> --}}

                        </td>
                    </tr>
                @empty
                    <h1>Nessun prodotto trovato</h1>
                @endforelse

            </tbody>
        </table>
        <div>
            <a class="btn btn-success" href="">Crea un nuovo comic</a>
        </div>
    </div>
@endsection
