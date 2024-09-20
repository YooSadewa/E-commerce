<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@props(['barangs'])
<div class="card-group w-full flex justify-center mt-4">
    @foreach($barangs as $barang)
          <div class="flex flex-col">
          <div class="card w-[220px] h-[95px] border-[1px] rounded-[12px] border-black bg-white sm:w-[350px] sm:h-[125px] md:w-[490px] md:h-[180px] lg:w-[670px] lg:h-[250px] lg:mt-[10px]">
                <div class="card-img mt-[2.5px] ml-[2.5px] sm:mt-[3px]">
                    <img class="w-[106px] rounded-[15px] h-[88px] object-cover sm:w-[150px] sm:h-[118px] md:w-[220px] md:h-[173px] lg:w-[645px] lg:h-[150px] lg:ml-2 lg:mt-2" src="{{asset('assets/alia.jpg')}}" alt="">
                </div>
                <div class="card-header relative w-[88px] alia sm:w-[170px] sm:left-[47%] md:w-[250px] md:left-[47%] md:bottom-[95%] lg:left-[3%] lg:bottom-[0%]  lg:w-[615px]">
                    <p class="text-[8px] sm:text-[11px] md:text-[15px] lg:text-[16px] font-semibold">{{ $barang->nama_barang }}</p>
                    <div class="flex justify-between sm:mt-1 md:mt-4">
                        <p class="text-[red] text-[7px] font-bold md:text-[12px]">In Stock</p>
                        <div class="kotak w-[22px] h-[10px] bg-[#D9D9D9] rounded-[3px] flex items-center justify-center md:w-[30px] md:h-[19px] lg:relative lg:bottom-9 lg:w-[40px]"><i class="fa-solid fa-star text-[6px] text-[#EAB700] md:text-[10px]"></i>
                            <p class="text-[6px] md:text-[10px]">4,9</p>
                        </div>
                    </div>
                    <p class="text-[10px] sm:text-[11px] md:text-[16px] font-bold">Rp. 299.000</p>
                </div>
                <div class="card-footer relative alia mt-1.5 w-[90px] sm:w-[152px] sm:mt-7 sm:left-[47%] md:w-[230px] md:bottom-[95%] md:left-[47%] lg:bottom-[30%] lg:left-[57%]">
                    <p class="text-[5px] sm:text-[6px] font-sans flex justify-end mr-0.5 md:text-[10px]">10rb+ Terjual</p>
                    <div class="beli w-[90px] h-[19px] bg-[#FF0000] rounded-[5px] flex items-center justify-center font-sans sm:w-[152px] sm:h-[25px]  md:w-[230px] md:h-[30px] lg:rounded-[10px]">
                        <a href="{{ route('infoproduct.show', $barang->id_barang) }}" class="text-[8px] md:text-[12px] text-[white] font-semibold sm:text-[10px]">Info Product</a>
                    </div>
                </div>
            </div>
    @endforeach      
    
        </div>
        @if($barangs->count() > 2)
    <div class="card col-span-1 row-span-2 h-full border-[1px] rounded-[12px] border-black bg-white w-full">
        <div class="card-img mt-[2.5px] ml-[2.5px] sm:mt-[3px]">
            <img class="w-[106px] rounded-[15px] h-[88px] object-cover sm:w-[150px] sm:h-[118px] md:w-[220px] md:h-[173px] lg:w-[645px] lg:h-[150px] lg:ml-2 lg:mt-2" src="{{asset('assets/all.jpg')}}" alt="">
        </div>
        <div class="card-header relative w-[88px] alia sm:w-[170px] sm:left-[47%] md:w-[250px] md:left-[47%] md:bottom-[95%] lg:left-[3%] lg:bottom-[0%] lg:w-[615px]">
            <p class="text-[8px] sm:text-[11px] md:text-[15px] lg:text-[16px] font-semibold">{{ $barangs[2]->nama_barang }}</p>
            <div class="flex justify-between sm:mt-1 md:mt-4">
                <p class="text-[red] text-[7px] font-bold md:text-[12px]">In Stock</p>
                <div class="kotak w-[22px] h-[10px] bg-[#D9D9D9] rounded-[3px] flex items-center justify-center md:w-[30px] md:h-[19px] lg:relative lg:bottom-9 lg:w-[40px]">
                    <i class="fa-solid fa-star text-[6px] text-[#EAB700] md:text-[10px]"></i>
                    <p class="text-[6px] md:text-[10px]">4,9</p>
                </div>
            </div>
            <p class="text-[10px] sm:text-[11px] md:text-[16px] font-bold">Rp. 299.000</p>
        </div>
        <div class="card-footer relative alia mt-1.5 w-[90px] sm:w-[152px] sm:mt-7 sm:left-[47%] md:w-[230px] md:bottom-[95%] md:left-[47%] lg:bottom-[30%] lg:left-[57%]">
            <p class="text-[5px] sm:text-[6px] font-sans flex justify-end mr-0.5 md:text-[10px]">10rb+ Terjual</p>
            <div class="beli w-[90px] h-[19px] bg-[#FF0000] rounded-[5px] flex items-center justify-center font-sans sm:w-[152px] sm:h-[25px] md:w-[230px] md:h-[30px] lg:rounded-[10px]">
                <p class="text-[8px] md:text-[12px] text-[white] font-semibold sm:text-[10px]">Masukkan Ke Troli</p>
            </div>
        </div>
    </div>
    @endif
    </div>

    {{-- <div class="grid grid-cols-2 gap-4 mt-4">
        <!-- First two product cards stacked on the left -->
        <div class="space-y-4">
            @foreach($barangs->take(2) as $barang)
            <div class="card border-[1px] rounded-[12px] border-gray-200 bg-white p-4 shadow-md">
                <div class="card-img">
                    <img class="rounded-[12px] object-cover w-full h-[150px]" src="{{ asset('assets/alia.jpg') }}" alt="">
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
                    <a href="{{ route('infoproduct.show', $barang->id_barang) }}" class="block bg-red-500 text-white text-center py-2 rounded-lg font-bold">
                        Masukkan Ke Troli
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    
        <!-- Third product card on the right with height spanning two rows -->
        @if($barangs->count() > 2)
        <div class="card border-[1px] rounded-[12px] border-gray-200 bg-white p-4 shadow-md row-span-2 h-full">
            <div class="card-img">
                <img class="rounded-[12px] object-cover w-full h-[320px]" src="{{ asset('assets/all.jpg') }}" alt="">
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
            <div class="card-footer mt-4">
                <a href="#" class="block bg-red-500 text-white text-center py-2 rounded-lg font-bold">
                    Masukkan Ke Troli
                </a>
            </div>
        </div>
        @endif
    </div>
     --}}