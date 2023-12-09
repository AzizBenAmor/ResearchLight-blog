@extends('layouts.layout')

@section('content')
<div class="imageArticule">
<img class="mainImage" src="{{ asset('storage/users/347551414_827621192262134_5534499047653291553_n.jpg') }}" alt="Centered Image">
</div>
<div class="Title">
    <h2>Title Here aaaaaaaaaaaaaaaaaaaa asasasas asasass aaaaaaaaaa aaaaaaaaaa aaaaaaaaa</h2>
    <p>Title Here aaaaaaaaaaaaaaaaaaaa asasasas asasass aaaaaaaaaa aaaaaaaaaa aaaaaaaaa</p>
    <hr>
    <h1>All articles</h1>

</div>

<div class="articleContainer">
    <!-- First Article -->
    <div class="article">
        <img src="{{ asset('storage/users/347551414_827621192262134_5534499047653291553_n.jpg') }}" alt="Article 1 Image">
        <div class="articleText">
            <h2>Title 1</h2>
          
        </div>
    </div>

    <!-- Second Article -->
    <div class="article">
        <img src="{{ asset('storage/users/347551414_827621192262134_5534499047653291553_n.jpg') }}" alt="Article 2 Image">
        <div class="articleText">
            <h2>Title 2</h2>
          
        </div>
    </div>

    <!-- Add more articles as needed -->

</div>
@endsection