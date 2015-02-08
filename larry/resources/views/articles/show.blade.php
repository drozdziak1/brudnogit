@extends('app')

@section('content')
<h1>Article</h1>
<hr/>

<article>
  <h2>
    <a href="#">{{ $article->title }}</a>
  </h2>


  <div class="body">{{ $article->body }}</div>

</article>
@stop
