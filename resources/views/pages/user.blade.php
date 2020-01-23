@extends('layouts.base')
@section('userContent')
<div class="wrapper d-flex flex-column">
    @include('components.header')
    <main class="d-flex flex-nowrap flex-grow-1">
        <div class="wrapper-profile w-100">
            <div class="container-profile d-flex flex-nowrap">
                <div class="left-profile">
                    <div class="photo-profile d-flex justify-content-center align-items-center">
                        PHOTO
                    </div>
                </div>
                <div class="right-profile">
                    <ul>
                        <li>
                            <div class="profile-title">NAME</div>
                            <div>Alsjdjf skjfklajf</div>
                        </li>
                        <li>
                            <div class="profile-title">LASTNAME</div>
                            <div>Diaajweà</div>
                        </li>
                        <li>
                            <div class="profile-title">NICKNAME</div>
                            <div>MHD98</div>
                        </li>
                        <li>
                            <div class="profile-title">POST</div>
                            <div>MHD98</div>
                            <div class="profile-title">LAST POST</div>
                            <div>fjiawòpoifjawoòifj</div>
                        </li>
                        <li>
                            <div class="profile-title">DATE SUBSCRIPTION</div>
                            <div>12/12/12</div>
                        </li>
                        <li>
                            <div class="profile-title text-danger">REMOVE ACCOUNT</div>
                            <button class="btn">REMOVE</button>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </main>
    @include('components.footer')
</div>
@endsection