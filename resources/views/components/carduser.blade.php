<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@props(['barangs'])
    <div class="grid grid-cols-2 gap-4 mt-4">
        <!-- First two product cards stacked on the left -->
        <div class="space-y-4">
            @foreach($barangs->take(2) as $barang)
            <div class="card border-[1px] rounded-[12px] border-gray-200 bg-white p-4 shadow-md">
                <div class="card-img">
                    <img class="rounded-[12px] object-cover w-full h-[150px]" 
                         src="{{ $barang->foto_utama ? asset($barang->foto_utama) : asset('assets/alia.jpg') }}" 
                         alt="{{ $barang->nama_barang }}">
                </div>
                <div class="card-body mt-4">
                    <p class="font-semibold text-lg">{{ $barang->nama_barang }}</p>
                    <p class="text-red-500 text-sm font-bold mt-2">In Stock</p>
                    <div class="flex justify-between mt-2">
                        <p class="text-lg font-bold">Rp. {{ number_format($barang->harga_barang, 0, ',', '.') }}</p>
                        <div class="flex items-center space-x-1">
                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <p class="text-sm font-medium">4.9</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">10rb+ Terjual</p>
                </div>
                <div class="card-footer mt-4">
                    <a href="{{ route('infoproduct.show', $barang->id_barang) }}" class="block bg-red-500 text-white text-center py-2 rounded-lg font-bold text-[12px] md:text-[16px]">
                        Detail Product
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Third product card on the right with height spanning two rows -->
        @if($barangs->count() > 2)
        <div class="card border-[1px] rounded-[12px] border-gray-200 bg-white p-4 shadow-md row-span-2 h-[740px] md:h-[751px] lg:h-[751px]">
            <div class="card-img">
                <img class="rounded-[12px] object-cover w-full h-[320px]" 
                     src="{{ $barangs[2]->foto_utama ? asset($barangs[2]->foto_utama) : asset('assets/all.jpg') }}" 
                     alt="{{ $barangs[2]->nama_barang }}">
            </div>
            <div class="card-body mt-4">
                <p class="font-semibold text-lg">{{ $barangs[2]->nama_barang }}</p>
                <p class="text-red-500 text-sm font-bold mt-2">In Stock</p>
                <div class="flex justify-between mt-2">
                    <p class="text-lg font-bold">Rp. {{ number_format($barangs[2]->harga_barang, 0, ',', '.') }}</p>
                    <div class="flex items-center space-x-1">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <p class="text-sm font-medium">4.9</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-1">10rb+ Terjual</p>
            </div>
            <div class="card-footer mt-[223px] md:mt-[229px]">
                <a href="{{ route('infoproduct.show', $barangs[2]->id_barang) }}" class="block bg-red-500 text-white text-center py-2 rounded-lg font-bold text-[12px] md:text-[16px]">
                    Detail Product
                </a>
            </div>
        </div>
        @endif
        
    </div>
    