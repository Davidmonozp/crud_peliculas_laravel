@extends('layouts.app')

@section('template_title')
    {{ $movie->name ?? __('Show') . " " . __('Movie') }}
@endsection



@section('content')



    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('movies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        

                                                
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $movie->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categoria:</strong>
                                    {{ $movie->categoria }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    {{ $movie->price }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
