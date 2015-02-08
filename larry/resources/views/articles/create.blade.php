@extends('app')

@section('content')

<h1>Stwórz nowy artykuł!</h1>

{!! Form::open(['url' => 'articles']) !!}
<div id='article-title'>
  {!! Form::label('title', 'Tytuł:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div id='article-body'>
  {!! Form::label('body', null, ['class' => 'article-body-label']) !!}
  {!! Form::textarea('body', null, ['class' => 'article-body']) !!}
</div>
{!! Form::submit('Add Article', ['class' => 'add']) !!}

{!! Form::close() !!}
@stop
