@extends('layouts.layout')

@section('content')
@if (!$MainArticule)
    <h1>No Article For The Momment</h1>
@else

<div class="imageArticule">
<a href="{{ route('article',$MainArticule->id) }}">
    <img class="mainImage" src="{{ asset("storage/$MainArticule->image") }}" alt="{{ $MainArticule->title }}">
</a>
</div>

    
<div class="Title">
    <h2>{{ $MainArticule->title }}</h2>
    <p>{{ $MainArticule->sub_title }}</p>
    <hr>
    <h1>All articles</h1>

</div>


<div class="articleContainer">
    @foreach ($articules as $articule)
        <div class="article">
            <a href="{{ route('article',$articule->id) }}">
            <img src="{{ asset("storage/$articule->image") }}" alt="{{ $articule->title }} Image">
            </a>
            <div class="articleText">
                <h2>{{ $articule->title }}</h2>
            </div>
        </div>
    @endforeach
</div>
@endif
@endsection