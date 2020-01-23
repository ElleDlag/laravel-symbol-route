@extends('layouts.base')
@section('adminContent')
<div class="wrapper d-flex flex-column">
    @include('components.header')
    <main class="d-flex flex-nowrap flex-grow-1">
        <div class="wrapper-resume w-100">
            <div class="container-resume">
                <div class="title-section">
                    CATEGORIES
                </div>
                <div class="list-6-col">
                    <ul>
                        <li class="d-flex flex-nowrap">
                            <div class="comment">COMMENT</div>
                            <div class="author">AUTHOR</div>
                            <div class="create">CREATED AT</div>
                            <div class="like">LIKE</div>
                            <div class="text-center icn-table">UPDATE</div>
                            <div class="text-center icn-table">DELETE</i></div>
                        </li>
                        <li class="d-flex flex-nowrap">
                            <div class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, atque quibusdam cumque et dolorum quis ex fugit tenetur totam quae delectus numquam suscipit rem voluptatibus iste ea in ab nesciunt?</div>
                            <div class="author">AUTHOR</div>
                            <div class="create">CREATION</div>
                            <div class="like">LIKE</div>
                            <div class="text-center icn-table"><i class="fas fa-pen"></i></div>
                            <div class="text-center icn-table"><i class="fas fa-trash"></i></div>
                        </li>
                        <li class="d-flex flex-nowrap">
                            <div class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, atque quibusdam cumque et dolorum quis ex fugit tenetur totam quae delectus numquam suscipit rem voluptatibus iste ea in ab nesciunt?</div>
                            <div class="author">AUTHOR</div>
                            <div class="create">CREATION</div>
                            <div class="like">LIKE</div>
                            <div class="text-center icn-table"><i class="fas fa-pen"></i></div>
                            <div class="text-center icn-table"><i class="fas fa-trash"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @include('components.footer')
</div>
    
@endsection