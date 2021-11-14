@extends('layouts/dashboard')

@section('content')
<header class="flex justify-between items-center">
    <section class="flex">
        <button class="p-3 self-center mr-10 bg-white rounded-lg">
            <img src="assets/Menu.svg" alt="Menu">
        </button>
        <span>
            <h2 class="text-xl">Dashboard</h2>
            <p class="text-sm text-softGray">Selamat Datang di MODIS</p>
        </span>
    </section>
    <section class="relative w-96">
        <img class="absolute ml-2 top-1/2 transform-gpu -translate-y-1/2" src="assets/Search.svg" alt="Search">
        <input type="text" class="w-full py-2 pl-12 rounded-lg" placeholder="Search...">
    </section>
    <section class="flex gap-2 justify-between items-center">
        <img class="bg-lightenGray p-3 rounded-full" src="assets/Notif.svg" alt="Notif Icon">
        <img src="assets/FotoProfile.svg" alt="Profile Photo">
        <span>
            <h2 class="text-xl">Super Admin</h2>
            <p class="text-softGray text-sm">Admin</p>
        </span>
        <img src="assets/ArrowDown.svg" alt="Arrow Icon">
    </section>
</header>
@endsection