@extends('layouts/welcome')

@section('content')
<h2 class="text-white uppercase font-bold my-8 text-3xl">Selamat Datang</h2>
<form action="#" class="grid grid-cols-2 gap-8" id="filldata">
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="26.89" height="34.23" viewBox="0 0 26.89 34.23">
            <g id="Group_3537" data-name="Group 3537" transform="translate(-0.001)">
              <path id="Path_83" data-name="Path 83" d="M106.93,240.148a18.353,18.353,0,0,0-3.971-11.574,12.1,12.1,0,0,0-18.947,0,18.347,18.347,0,0,0-3.971,11.559,32.759,32.759,0,0,0,13.445,3.427A29.916,29.916,0,0,0,106.93,240.148Z" transform="translate(-80.039 -209.33)" fill="#6a042e"/>
              <circle id="Ellipse_12" data-name="Ellipse 12" cx="6.724" cy="6.724" r="6.724" transform="translate(6.721)" fill="#6a042e"/>
            </g>
          </svg>          
        <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Nama Lengkap">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="35.311" height="26.014" viewBox="0 0 35.311 26.014">
            <g id="Group_3536" data-name="Group 3536" transform="translate(0 0)">
              <path id="Path_84" data-name="Path 84" d="M18.677,157.33a2.007,2.007,0,0,1-2.084,0L0,147.2v13.466a5.213,5.213,0,0,0,5.211,5.211H30.1a5.213,5.213,0,0,0,5.211-5.211V147.2Z" transform="translate(0 -139.862)" fill="#6a042e"/>
              <path id="Path_85" data-name="Path 85" d="M31.981,57.088H7.092a5.18,5.18,0,0,0-5.044,4.086L19.557,71.846,37.025,61.174A5.18,5.18,0,0,0,31.981,57.088Z" transform="translate(-1.881 -57.088)" fill="#6a042e"/>
            </g>
          </svg>
        <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="NIK">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="23.521" height="36.117" viewBox="0 0 23.521 36.117">
            <g id="Group_3538" data-name="Group 3538" transform="translate(0)">
              <path id="Path_86" data-name="Path 86" d="M245.8,11.989a13.367,13.367,0,0,1,3.2,1.917V8.362A8.372,8.372,0,0,0,240.636,0h-.129a8.371,8.371,0,0,0-8.358,8.362v5.544a13.366,13.366,0,0,1,3.2-1.917c.311-.133.631-.253.95-.361V8.362a4.215,4.215,0,0,1,4.212-4.212h.129a4.215,4.215,0,0,1,4.212,4.212v3.27C245.168,11.736,245.488,11.856,245.8,11.989Z" transform="translate(-228.813)" fill="#6a042e"/>
              <path id="Path_87" data-name="Path 87" d="M151.75,315.165a11.781,11.781,0,1,0,3.336-8.208A11.762,11.762,0,0,0,151.75,315.165Zm8.731-2.374a3.03,3.03,0,1,1,4.639,2.643.824.824,0,0,0-.369.871l.9,4.27a.416.416,0,0,1-.407.5h-3.469a.415.415,0,0,1-.407-.5l.9-4.27a.834.834,0,0,0-.369-.876,3.023,3.023,0,0,1-1.374-2.046A3.1,3.1,0,0,1,160.481,312.791Z" transform="translate(-151.75 -290.809)" fill="#6a042e"/>
            </g>
          </svg>          
          <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Email">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="23.521" height="36.117" viewBox="0 0 23.521 36.117">
            <g id="Group_3538" data-name="Group 3538" transform="translate(0)">
              <path id="Path_86" data-name="Path 86" d="M245.8,11.989a13.367,13.367,0,0,1,3.2,1.917V8.362A8.372,8.372,0,0,0,240.636,0h-.129a8.371,8.371,0,0,0-8.358,8.362v5.544a13.366,13.366,0,0,1,3.2-1.917c.311-.133.631-.253.95-.361V8.362a4.215,4.215,0,0,1,4.212-4.212h.129a4.215,4.215,0,0,1,4.212,4.212v3.27C245.168,11.736,245.488,11.856,245.8,11.989Z" transform="translate(-228.813)" fill="#6a042e"/>
              <path id="Path_87" data-name="Path 87" d="M151.75,315.165a11.781,11.781,0,1,0,3.336-8.208A11.762,11.762,0,0,0,151.75,315.165Zm8.731-2.374a3.03,3.03,0,1,1,4.639,2.643.824.824,0,0,0-.369.871l.9,4.27a.416.416,0,0,1-.407.5h-3.469a.415.415,0,0,1-.407-.5l.9-4.27a.834.834,0,0,0-.369-.876,3.023,3.023,0,0,1-1.374-2.046A3.1,3.1,0,0,1,160.481,312.791Z" transform="translate(-151.75 -290.809)" fill="#6a042e"/>
            </g>
          </svg>
          <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Nomer Handphone / WA">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="23.521" height="36.117" viewBox="0 0 23.521 36.117">
            <g id="Group_3538" data-name="Group 3538" transform="translate(0)">
              <path id="Path_86" data-name="Path 86" d="M245.8,11.989a13.367,13.367,0,0,1,3.2,1.917V8.362A8.372,8.372,0,0,0,240.636,0h-.129a8.371,8.371,0,0,0-8.358,8.362v5.544a13.366,13.366,0,0,1,3.2-1.917c.311-.133.631-.253.95-.361V8.362a4.215,4.215,0,0,1,4.212-4.212h.129a4.215,4.215,0,0,1,4.212,4.212v3.27C245.168,11.736,245.488,11.856,245.8,11.989Z" transform="translate(-228.813)" fill="#6a042e"/>
              <path id="Path_87" data-name="Path 87" d="M151.75,315.165a11.781,11.781,0,1,0,3.336-8.208A11.762,11.762,0,0,0,151.75,315.165Zm8.731-2.374a3.03,3.03,0,1,1,4.639,2.643.824.824,0,0,0-.369.871l.9,4.27a.416.416,0,0,1-.407.5h-3.469a.415.415,0,0,1-.407-.5l.9-4.27a.834.834,0,0,0-.369-.876,3.023,3.023,0,0,1-1.374-2.046A3.1,3.1,0,0,1,160.481,312.791Z" transform="translate(-151.75 -290.809)" fill="#6a042e"/>
            </g>
          </svg>          
          <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Jabatan">
    </div>
    <div class="relative">
        <svg class="absolute top-1/2 left-9 transform-gpu -translate-y-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="23.521" height="36.117" viewBox="0 0 23.521 36.117">
            <g id="Group_3538" data-name="Group 3538" transform="translate(0)">
              <path id="Path_86" data-name="Path 86" d="M245.8,11.989a13.367,13.367,0,0,1,3.2,1.917V8.362A8.372,8.372,0,0,0,240.636,0h-.129a8.371,8.371,0,0,0-8.358,8.362v5.544a13.366,13.366,0,0,1,3.2-1.917c.311-.133.631-.253.95-.361V8.362a4.215,4.215,0,0,1,4.212-4.212h.129a4.215,4.215,0,0,1,4.212,4.212v3.27C245.168,11.736,245.488,11.856,245.8,11.989Z" transform="translate(-228.813)" fill="#6a042e"/>
              <path id="Path_87" data-name="Path 87" d="M151.75,315.165a11.781,11.781,0,1,0,3.336-8.208A11.762,11.762,0,0,0,151.75,315.165Zm8.731-2.374a3.03,3.03,0,1,1,4.639,2.643.824.824,0,0,0-.369.871l.9,4.27a.416.416,0,0,1-.407.5h-3.469a.415.415,0,0,1-.407-.5l.9-4.27a.834.834,0,0,0-.369-.876,3.023,3.023,0,0,1-1.374-2.046A3.1,3.1,0,0,1,160.481,312.791Z" transform="translate(-151.75 -290.809)" fill="#6a042e"/>
            </g>
          </svg>
          <input type="text" class="py-3 pl-16 rounded-md block w-full" placeholder="Password">
    </div>
</form>
<button type="submit" form="filldata" formaction="/" class="mt-20 bg-yellowLight text-darkGray font-bold rounded-lg py-3 px-16 justify-self-center items-center">Simpan</button>
@endsection