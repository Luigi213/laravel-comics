@extends('layouts.app')
@section('title', 'Comic detail')

@section('content')
<div class="jumbotron bg-danger">
    <div class="container">
        <div class="Serie">
            <img src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
        </div>
    </div>            
</div>
<div class="bg-sp"></div>
<div class="bg-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-7">
                <h1>{{strtoupper($single['title'])}}</h1>
                <p>{{$single['description']}}</p>
            </div>
            <div class="col-5">
                <div>
                    <h6>ADVERTISEMENT</h6>
                    <img src="../img/adv.jpg" alt="adv">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
