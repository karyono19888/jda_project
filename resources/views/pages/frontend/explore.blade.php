@extends('layouts.front')

@section('title','Explore')

@section('content')
    <!-- content -->
    <div class="content">
        <!-- services -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">Produk Lokal</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        Petani langsung 100% Lokal Indonesia
                    </p>
                </div>
                <nav class="my-8 text-center" aria-label="navigation">
                    <a class="bg-serv-bg text-white block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Semua Produk
                    </a>
                    <a class="bg-serv-explore-button text-serv-bg block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Buah-buahan
                    </a>
                    <a class="bg-serv-explore-button text-serv-bg block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Sayur-Mayur
                    </a>
                    <a class="bg-serv-explore-button text-serv-bg block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Organik
                    </a>
                    <a class="bg-serv-explore-button text-serv-bg block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Bahan Pokok &amp; Rempah
                    </a>
                </nav>
                <div class="grid grid-cols lg:grid-cols-3 md:grid-cols-2 gap-4">
                    @include('components.frontend.services-explore')
                </div>
                <div class="text-center mt-10">
                    <a class="bg-serv-explore-button text-serv-bg block sm:inline-block my-2 py-2 px-8 mx-4 font-medium rounded-xl" href="#">
                        Load More
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection