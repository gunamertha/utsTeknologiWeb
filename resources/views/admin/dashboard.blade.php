<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <body class="bg-gray-100 font-family-karla flex">

            
        <h1 class="text-3xl text-black pb-6">DATA SISWA</h1>
<!--Container-->
            <div class="bg-white overflow-auto">

              <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Kelas</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">Adi</td>
                            <td class="w-1/3 text-left py-3 px-4">2</td>
                          
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">ngurah</td>
                            <td class="w-1/3 text-left py-3 px-4">2</td>
                          
                        </tr>
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">pande</td>
                            <td class="w-1/3 text-left py-3 px-4">2</td>
                           
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">ayu</td>
                            <td class="w-1/3 text-left py-3 px-4">2</td>
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