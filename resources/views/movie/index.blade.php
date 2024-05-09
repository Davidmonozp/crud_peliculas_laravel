@extends('layouts.app')

@section('template_title')
    Movies
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movies') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('movies.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Categoria</th>
                                        <th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies as $movie)
                                        <tr>
                                            

                                            <td>{{ $movie->nombre}}</td>
                                            <td>{{ $movie->categoria }}</td>
                                            <td>{{ $movie->price }}</td>

                                            <td>
                                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('movies.show', $movie->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('movies.edit', $movie->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Seguro quieres eliminar este registro?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <form action="{{ route('movies.show', ['movie' => $movie->id]) }}" method="GET" class="mb-2">
                                        <div class="input-group justify-content-end">
                                            <input type="text" class="form-control-sm" name="buscar"
                                                placeholder="Buscar por nombre...">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                            <a href="{{ route('movies.index') }}" class="btn btn-dark ">Listado
                                                de peliculas</a>
                                        </div>
                                    </form>

                                    <form action="/buscar" method="GET">
                                        <div class="input-group">
                                            <input type="search" name="buscar" class="form-control">
                                            <span class="input-group-prepend">
                                                <button type="submit" class="btn btn-info btn-sm"
                                                    style="border-radius: 10px">Buscar por Numero</button>
                                            </span>
                                        </div>
                                    </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $movies->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
