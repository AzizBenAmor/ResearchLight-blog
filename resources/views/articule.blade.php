@extends('layouts.layout')
@section('content')

<div class="Title">
    <h2>{{ $articule->title }}</h2>
    <p>{{ $articule->sub_title }}</p>
<br><br>
<br>
</div>

<div class="ImageArticuleContainer">
    <img class="articuleImage" src="{{ asset("storage/$articule->image") }}" alt="{{ $articule->title }}">
    </div>

    <div class="centered-div">
        <hr>
        <div class="user-info">
            <div class="avatar-container">
                <img class="avatar" src="{{ asset("storage/".$articule->user->avatar) }}" alt="User Avatar">
            </div>
            <div class="user-text">
                <h3>{{ $articule->user->name }}</h3>
                <p> {{ $articule->created_at->diffForHumans() }}</p>
            </div>
            <div class="social-icons">
                <a href="{{ $articule->user->facebook ? $articule->user->facebook : "#"}}">
                <img src="{{ asset('assets/css/img/facebook.png') }}" alt="Facebook">
                </a>
                <a href="{{ $articule->user->twitter ? $articule->user->twitter : "#"}}">
                <img src="{{ asset('assets/css/img/twitter.png') }}" alt="Twitter">
                </a>
            </div>
        </div>
        
    </div>
    <article class="article-content">
        <div class="content">
       {!! $articule->content !!}
    </div>
    <div class="shareFBTW">
    <img src="{{ asset('assets/css/img/shareFBTW.png') }}" alt="Twitter">
    </div>
    <div class="tagsArticule">
        <h4>Tags:
            @foreach ($articule->tags as $tag)
            <u>{{ $tag->title }},</u>
            @endforeach 
            </h4>
            <hr >
    </div>
    <div class="user-info">
        <div class="avatar-container">
            <img class="avatar" src="{{ asset("storage/".$articule->user->avatar) }}" alt="User Avatar">
        </div>
        <div class="user-text">
            <p><b>{{ $articule->user->name }}</b> {{ $articule->user->description }}</p>
           
        </div>
    </article>

    <img class="Eyes" src="{{ asset('assets/css/img/eyesFull.png') }}" alt="">
    <div class="AllArticule">
    <h1>What to read next</h1>
    </div>
  
        
   
<div class="ThreearticleContainer">
    @foreach ($articles as $article)
        <div class="articleThree">
            <a href="{{ route('article',$article->id) }}">
            <img src="{{ asset("storage/$article->image") }}" alt=" Image">
            </a>
            <div class="articleText">
                <h2>{{ $article->title }}</h2>
            </div>
        </div>
        @endforeach
</div>

<div class="newsletter">
    <h1>Sign up for the newsletter</h1>
    <p>if you want relevant updates occasionally , sign up for the private newsletter. Your email is never shared. </p>
    <form action="{{ route('StoreNewsletter') }}" method="POST"> 
        @csrf
        <input type="text" name='email' placeholder="Enter your email..."/>
        <button >SIGN UP</button>
    </form>
</div>
@endsection