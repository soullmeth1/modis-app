@extends('layouts/base')

@section('mainContent')
    
<body class="bg-primary max-h-screen max-w-screen">
    <main class="grid grid-cols-1/2">
        <section class="bg-cover min-h-screen text-right bg-hero" style="">
            <div class="flex justify-end items-start gap-5 pt-6 pr-6">
                <h1 class="text-base text-right uppercase max-w-sm text-white font-bold">Kementrian Perhubungan <br> Direktorat Jenderal Perhubungan Laut Distrik Navigasi Kelas I Tanjung Priok</h1>
                <img src="./assets/Logo Perhubungan FLAT.png" alt="">
                <img src="./assets/Kala Jivam Asti FLAT.png" alt="">
            </div>
        </section>
        <aside class=" flex-1 text-center">
            <div class="text-center py-20 max-w-xl m-auto">
                <img class="inline-block" src="./assets/Group 3431.png" alt="">
                @yield('content')
            </div>
        </aside>
    </main>
</body>

@endsection