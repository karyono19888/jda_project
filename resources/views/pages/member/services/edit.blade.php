@extends('layouts.app')

@section('title','Edit Products')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Edit Your Product
                    </h2>
                    <p class="text-sm text-gray-400">
                        Edit the Products you provide
                    </p>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{route('member.product.product_index')}}" class="text-gray-400">My Products</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="font-medium">Edit Your Product</a>
                </li>
            </ol>
        </nav>
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        <form action="{{route('member.product.product_update',1)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label for="title_product" class="block mb-3 font-medium text-gray-700 text-md">Judul Product</label>
                                            <input placeholder="Product apa yang ingin kamu tawarkan?" type="text" name="title_product" id="title_product" autocomplete="title_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="description_product" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Product</label>
                                            <input placeholder="Jelaskan Product apa yang kamu tawarkan?" type="text" name="description_product" id="description_product" autocomplete="description_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="keunggulan_product" class="block mb-2 font-medium text-gray-700 text-md">Keunggulan Product kamu</label>
                                            <p class="block mb-3 text-sm text-gray-700">
                                                Hal apa aja yang didapakan dari product kamu?
                                            </p>
                                            <input placeholder="Keunggulan 1" type="text" name="keunggulan_product" id="keunggulan_product" autocomplete="keunggulan_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 2" type="text" name="keunggulan_product" id="keunggulan_product" autocomplete="keunggulan_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 3" type="text" name="keunggulan_product" id="keunggulan_product" autocomplete="keunggulan_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <div id="newServicesRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addServicesRow">
                                                Tambahkan Keunggulan +
                                            </button>
                                        </div>
                                        <div class="col-span-6 -mb-6">
                                            <label for="estimation" class="block mb-3 font-medium text-gray-700 text-md">Estimasi product & Jumlah</label>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <select id="estimation" name="estimation" autocomplete="estimation" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>Butuh Berapa hari product kamu ready?</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <select id="maximal_product" name="maximal_product" autocomplete="maximal_product" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>Maksimal Pesan Prodcut kamu</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="price_product" class="block mb-3 font-medium text-gray-700 text-md">Harga Product Kamu</label>
                                            <input placeholder="Total Harga Product Kamu" type="number" name="price_product" id="price_product" autocomplete="price_product" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="thumbnail_product" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Product Feeds</label>
                                            <input placeholder="Keunggulan 1" type="file" name="thumbnail_product" id="thumbnail_product" autocomplete="thumbnail_product" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 2" type="file" name="thumbnail_product" id="thumbnail_product" autocomplete="thumbnail_product" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 3" type="file" name="thumbnail_product" id="thumbnail_product" autocomplete="thumbnail_product" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <div id="newThumbnailRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">
                                                Tambahkan Gambar +
                                            </button>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="keunggulan" class="block mb-3 font-medium text-gray-700 text-md">Keunggulan kamu</label>
                                            <input placeholder="Keunggulan 1" type="text" name="keunggulan" id="keunggulan" autocomplete="keunggulan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 2" type="text" name="keunggulan" id="keunggulan" autocomplete="keunggulan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <input placeholder="Keunggulan 3" type="text" name="keunggulan" id="keunggulan" autocomplete="keunggulan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <div id="newAdvantagesRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addAdvantagesRow">
                                                Tambahkan Keunggulan +
                                            </button>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="catatan" class="block mb-3 font-medium text-gray-700 text-md">Note <span class="text-gray-400">(Optional)</span></label>
                                            <input placeholder="Hal yang ingin disampaikan oleh kamu?" type="text" name="catatan" id="catatan" autocomplete="catatan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="tagline" class="block mb-3 font-medium text-gray-700 text-md">Tagline <span class="text-gray-400">(Optional)</span></label>
                                            <div id="newTaglineRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addTaglineRow">
                                                Tambahkan Tagline +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{route('member.product.product_index')}}" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                        Cancel
                                    </a>
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection

@push('after-script-dashboard')
    <script src="{{url("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")}}"></script>
    <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="advantages[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newAdvantagesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addServicesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="services[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newServicesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeServicesRow', function() {
            $(this).closest('#inputFormServicesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addTaglineRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="tagline[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newTaglineRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan 3" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
    </script>
@endpush