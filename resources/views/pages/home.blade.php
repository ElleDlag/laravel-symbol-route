@extends('layouts.base')
@section('listPostHome')
<div class="wrapper d-flex flex-column">
    @include('components.header')
    <main class="d-flex flex-nowrap flex-grow-1">
        @include('components.category')
        @include('components.list-post')
    </main>
    @include('components.footer')
</div>
    
@endsection