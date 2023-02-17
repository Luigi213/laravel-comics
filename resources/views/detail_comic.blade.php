@extends('layouts.app')
@section('title', 'Comic detail')

@section('content')
<div class="jumbotron bg-danger">
    <div class="container">
        <div class="Serie">
            <img src="{{ $single['thumb'] }}" alt="">
        </div>
    </div>            
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-white">
            sono il dettaglio
        </div>
    </div>
</div>
@endsection
