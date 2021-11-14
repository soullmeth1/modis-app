@extends('layouts/welcome')

@section('content')
<h2 class="text-white uppercase font-bold my-8 text-3xl">Monitoring Disiplin</h2>
<form action="#" class="grid gap-8">
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="35.311" height="26.014" viewBox="0 0 35.311 26.014">
            <g id="Group_3536" data-name="Group 3536" transform="translate(0 0)">
              <path id="Path_84" data-name="Path 84" d="M18.677,157.33a2.007,2.007,0,0,1-2.084,0L0,147.2v13.466a5.213,5.213,0,0,0,5.211,5.211H30.1a5.213,5.213,0,0,0,5.211-5.211V147.2Z" transform="translate(0 -139.862)" fill="#6a042e"/>
              <path id="Path_85" data-name="Path 85" d="M31.981,57.088H7.092a5.18,5.18,0,0,0-5.044,4.086L19.557,71.846,37.025,61.174A5.18,5.18,0,0,0,31.981,57.088Z" transform="translate(-1.881 -57.088)" fill="#6a042e"/>
            </g>
          </svg>
        <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Email Anda">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="23.521" height="36.117" viewBox="0 0 23.521 36.117">
            <g id="Group_3538" data-name="Group 3538" transform="translate(0)">
              <path id="Path_86" data-name="Path 86" d="M245.8,11.989a13.367,13.367,0,0,1,3.2,1.917V8.362A8.372,8.372,0,0,0,240.636,0h-.129a8.371,8.371,0,0,0-8.358,8.362v5.544a13.366,13.366,0,0,1,3.2-1.917c.311-.133.631-.253.95-.361V8.362a4.215,4.215,0,0,1,4.212-4.212h.129a4.215,4.215,0,0,1,4.212,4.212v3.27C245.168,11.736,245.488,11.856,245.8,11.989Z" transform="translate(-228.813)" fill="#6a042e"/>
              <path id="Path_87" data-name="Path 87" d="M151.75,315.165a11.781,11.781,0,1,0,3.336-8.208A11.762,11.762,0,0,0,151.75,315.165Zm8.731-2.374a3.03,3.03,0,1,1,4.639,2.643.824.824,0,0,0-.369.871l.9,4.27a.416.416,0,0,1-.407.5h-3.469a.415.415,0,0,1-.407-.5l.9-4.27a.834.834,0,0,0-.369-.876,3.023,3.023,0,0,1-1.374-2.046A3.1,3.1,0,0,1,160.481,312.791Z" transform="translate(-151.75 -290.809)" fill="#6a042e"/>
            </g>
          </svg>          
          <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Password Anda">
    </div>
    <div class="flex justify-between text-white">
        <label for="rememberme">
            <input name="rememberme" id="rememberme" type="checkbox" value="rememberme">
                Ingatkan Saya
        </label>
        <button formaction="/reset">Lupa Password Anda?</button>
    </div>
    <button type="submit" formaction="/dashboard" class="bg-yellowLight text-darkGray font-bold rounded-lg py-3 px-16 justify-self-center items-center">Masuk</button>
</form>
<p class="mt-20 text-white">Belum punya akun? <a class="font-bold border-b-2" href="/register">Daftar Sekarang</a></p>   
{{-- @include('tes', ["content"=>"ini isinya"])
@include('tes', ["content"=>"ini yang kedua"]) --}}
@endsection
