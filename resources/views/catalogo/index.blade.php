@extends('layouts.app')

@section('content')
    <h1>Lista de productos</h1>
    <div class="row">
        @foreach ($listaprod as $p)
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('storage/'.$p->img)}}" class="img-fluid rounded-start" alt="Card title">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$p->nombre}}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
