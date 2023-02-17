@extends('layouts.app')
@section('title', 'Comics')

@section('content')
<div class="jumbotron bg-danger">
    <div class="container">
        <div class="Series">
            <h1>CURRENT SERIES</h1>
        </div>
    </div>            
</div>
<div class="container">
    <div class="mb-t mt-2">
        @foreach ($comics as $comic)
            <div class="card-sp-main">
                <a href="{{ route('detail-comic', ['series' => $comic['series']])}}">
                    <div class="card-image-sp-main">
                        <img src="{{  $comic['thumb'] }}" alt="{{  $comic['series'] }}">        
                    </div>
                    {{ $comic['series']}}
                </a>
            </div>            
        @endforeach                        
    </div>
    <div class="btn-s">  
        <button>LOAD MORE</button>
    </div>
</div>
@endsection
