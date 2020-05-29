@extends('main')
@section('library')
    @if(isset($pages->page))
        {{ "../css/$pages->page.css" }}
    @endif
@endsection
@section('content')
    @if(isset($pages->page))
        @include($pages->page)
    @endif
@endsection
