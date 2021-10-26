<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS</title>
        <meta name="author" content="guna">
        <meta name="description" content="">
    
        <!-- Tailwind -->
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        </style>
    </head>

    <body class="bg-gray-100 font-family-karla flex">

            
                    <h1 class="text-3xl text-black pb-6">DATA TABUNGAN SISWA</h1>
 <!--Container-->
 
                    <div class="w-full mt-6">
                      
                        
                        
                       
                          
                        <div class="bg-white overflow-auto">

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right pb-3 flex">
                            tambah data
                        </button>
 <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-list mr-3"></i> Tabel Sisiwa
                        </p>
                          <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Kelas</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jumlah Tabungan</th>
                                        <th class="text-center py-3 px-4 uppercase font-semibold text-sm">ADMIN</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Adi</td>
                                        <td class="w-1/3 text-left py-3 px-4">2</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">Rp.150.000</a></td>
                                        <td 
                                        <div class="inline-flex">
                                            <button class="bg-green-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                              Edit
                                            </button>
                                            <button class="bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                              Delete
                                            </button>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">ngurah</td>
                                        <td class="w-1/3 text-left py-3 px-4">2</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">Rp.50.000</a></td>
                                        <td 
                                        <div class="inline-flex">
                                            <button class="bg-green-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                              Edit
                                            </button>
                                            <button class="bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                              Delete
                                            </button>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">pande</td>
                                        <td class="w-1/3 text-left py-3 px-4">2</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">Rp.250.000</a></td>
                                        <td 
                                        <div class="inline-flex">
                                            <button class="bg-green-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                              Edit
                                            </button>
                                            <button class="bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                              Delete
                                            </button>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">ayu</td>
                                        <td class="w-1/3 text-left py-3 px-4">2</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">Rp.400.000</a></td>
                                        <td 
                                        <div class="inline-flex">
                                            <button class="bg-green-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                              Edit
                                            </button>
                                            <button class="bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                              Delete
                                            </button>
                                          </div> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>    
        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    </body>
</x-admin-layout>
