@extends('layouts.app')

@section('content')
    <h1>index</h1>
    <div class="container">

        {{-- @if (session('deleted'))
            <div class="alert alert-info" role="alert">
                {!! session('deleted') !!}
            </div>
        @endif --}}

        <table class="table table-striped bg-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">nation</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($museums as $museum)
                    <tr>
                        <td>{{ $museum->id }}</td>
                        <td>{{ $museum->name }}</td>
                        <td>{{ $museum->nation }}</td>
                        <td>
                            <a class="btn btn-primary" href="XXXXXXXXXXXXXXXXXXXXXXXXX" title="show"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning " href="XXXXXXXXXXXXXXXXXXXX" title="edit"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="XXXXXXXXXXXXXXXXXXX"
                                onsubmit="return confirm('Confermi l\'eliminazione di : {{ $museum->name }}')"
                                class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger " href="#" title="delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <h1>Nessun prodotto trovato</h1>
                @endforelse

            </tbody>
        </table>
        {{ $museums->links() }}
        <div>
            <a class="btn btn-success" href="#">Crea un nuovo comic</a>
        </div>
    </div>

@endsection
