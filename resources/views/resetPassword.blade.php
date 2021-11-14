@extends('layouts/welcome')

@section('content')
<h2 class="text-white uppercase font-bold my-8 text-3xl">Reset Password Anda?</h2>
<form action="#" class="grid gap-8">
    <p class="text-white">Masukan email address anda yang terhubung dengan akun anda</p>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="35.311" height="26.014" viewBox="0 0 35.311 26.014">
            <g id="Group_3536" data-name="Group 3536" transform="translate(0 0)">
              <path id="Path_84" data-name="Path 84" d="M18.677,157.33a2.007,2.007,0,0,1-2.084,0L0,147.2v13.466a5.213,5.213,0,0,0,5.211,5.211H30.1a5.213,5.213,0,0,0,5.211-5.211V147.2Z" transform="translate(0 -139.862)" fill="#6a042e"/>
              <path id="Path_85" data-name="Path 85" d="M31.981,57.088H7.092a5.18,5.18,0,0,0-5.044,4.086L19.557,71.846,37.025,61.174A5.18,5.18,0,0,0,31.981,57.088Z" transform="translate(-1.881 -57.088)" fill="#6a042e"/>
            </g>
          </svg>
        <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Email Anda">
    </div>
    
    <button type="submit" class="bg-yellowLight text-darkGray font-bold rounded-lg py-3 px-16 justify-self-center items-center">Reset Password</button>
    <a class="justify-self-center text-white border-b-2" href="/">Kembali</a>
</form>
@endsection