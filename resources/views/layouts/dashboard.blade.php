@extends('layouts/base')

@section('mainContent')

<body class="flex">
    <aside class="bg-primary max-w-xs min-w-max max-h-screen min-h-screen overflow-hidden flex flex-col flex-1">
        <figure class=" py-10 px-20 m-auto">
            <img src="./assets/Group 3431.png" alt="Modis Logo" class="w-32">
        </figure>
        <section class="overflow-y-scroll">
            <nav class="text-white uppercase">
                <ul>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Home.svg" alt="">
                        <a href="dashboard">Dashboard</a>
                    </li>
                    <li class="py-3 pl-12 font-bold">MASTER</li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus">
                        <img class="inline-block" src="assets/Pegawai.svg" alt="">
                        <a href="">Pegawai</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/User.svg" alt="">
                        <a href="">User</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Provinsi</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Kota</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Instalasi</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Pangkat</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Golongan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Dasar Penugasan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Jenis Penugasan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Jenjang Pendidikan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Jenis Kegiatan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Dasar Pelaksanaan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Jenis Cuti</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Penyakit</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Star.svg" alt="">
                        <a href="">Lokasi Kegiatan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Organisasi & Jabatan</a>
                    </li>
                    <li class="py-3 pl-12 flex items-center gap-6 hover:bg-primaryFocus cursor-pointer">
                        <img class="inline-block" src="assets/Work.svg" alt="">
                        <a href="">Jam Kerja Pegawai</a>
                    </li>
                    <li class="py-3 pl-12 font-bold">Transaksi</li>
                </ul>
            </nav>
        </section>
    </aside>
    <main class="bg-lightGray flex-1 p-7">
        @yield('content')
    </main>
</body>

@endsection