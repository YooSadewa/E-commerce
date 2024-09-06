<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="card-group w-full flex justify-center mt-4">
    @foreach($barangs as $barang)
          <div class="flex flex-col">
          <div class="card w-[220px] h-[95px] border-[1px] rounded-[12px] border-black bg-white sm:w-[350px] sm:h-[125px] md:w-[490px] md:h-[180px] lg:w-[670px] lg:h-[250px]">
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
    </div>