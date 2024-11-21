<body>
    <div class="bg-white h-[67px] flex items-center justify-between px-4 lg:justify-start fixed w-full top-0 border-b-[1px] border-black z-50">
        <div class="flex items-center lg:hidden">
            <i id="menu-toggle" class="fa-solid fa-bars text-black text-xl cursor-pointer ml-[10px]"></i>
        </div>
        <img src="{{ asset('assets/logo.jpg') }}" alt="" class="w-[148px] h-[26px] mx-auto mx-auto lg:mx-0 lg:mr-auto">
        <ul class="flex space-x-4 mt-4 hidden lg:flex mb-4 mr-4 relative">
            <li><a href="{{route('welcomeadmin')}}" class="py-2">Home</a></li>
            <li class="relative">
                <a href="#" class="py-2 hover:bg-gray-100" id="categories-toggle1">Categories</a>
                <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 dropdown-content" id="categories-dropdown1">
                    <a href="{{ route('category.show', 'mouse') }}" class="py-2 block hover:bg-gray-100 ml-1">Mouse</a>
                    <a href="{{ route('category.show', 'keyboard') }}" class="py-2 block hover:bg-gray-100 ml-1">Keyboard</a>
                    <a href="{{ route('category.show', 'audio') }}" class="py-2 block hover:bg-gray-100 ml-1">Audio</a>
                    <a href="{{ route('category.show', 'gears') }}" class="py-2 block hover:bg-gray-100 ml-1">Gears</a>
                </div>
            </li>
            <li><a href="{{route('index.about')}}" class="py-2">About Us</a></li>
            <li><a href="{{route('index.kontak')}}" class="py-2 mr-2">Contacts</a></li>
        </ul>
        @if (session('admin_id'))
            <a href="{{ route('admin.profile') }}" class="fa-regular fa-user bg-[#D9D9D9] text-[15px] p-[6px] mr-[10px] rounded-full pointer"></a>
        @else
            <a href="{{ route('loginadmin') }}" class="fa-regular fa-user bg-[#D9D9D9] text-[15px] p-[6px] mr-[10px] rounded-full pointer"></a>
        @endif

    </div>
    <div id="sidebar">
        <div class="p-4">
            <i id="close-menu" class="fa-solid fa-times text-2xl cursor-pointer"></i>
        </div> 
        <ul class="mt-4">
            <li><a href="{{route('welcomeadmin')}}" class="py-2 px-4">Home</a></li>
            <div class="box border-solid">
            <li><a href="#" class="py-2 px-4 hover:bg-gray-100" id="categories-toggle">Categories</a></li>
            <div class="dropdown-content" id="categories-dropdown">
                <a href="{{ url('category/mouse') }}" class="py-2 px-4 block">Mouse</a>
                <a href="{{ url('category/keyboard') }}" class="py-2 px-4 block">Keyboard</a>
                <a href="{{ url('category/audio') }}" class="py-2 px-4 block">Audio</a>
                <a href="{{ url('category/gears') }}" class="py-2 px-4 block">Gears</a>
            </div>
        </div>
        <div class="box border-solid">
            <li><a href="#" class="py-2 px-4 hover:bg-gray-100" id="categories-toggle2">Company</a></li>
            <div class="dropdown-content" id="categories-dropdown2">
                <a href="{{route('index.about')}}" class="py-2 px-4 block">About Us</a>
                <a href="" class="py-2 px-4 block">Contacts</a>
            </div>
        </div>
        </ul>
    </div>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').style.transform = 'translateX(0)';
        });
        
        document.getElementById('close-menu').addEventListener('click', function() {
            document.getElementById('sidebar').style.transform = 'translateX(-100%)';
        });

        document.getElementById('categories-toggle').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const dropdown = document.getElementById('categories-dropdown');
            if (dropdown.classList.contains('open')) {
                dropdown.classList.remove('open');
            } else {
                dropdown.classList.add('open');
            }
        });

        document.getElementById('categories-toggle1').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const dropdown = document.getElementById('categories-dropdown1');
            if (dropdown.classList.contains('open')) {
                dropdown.classList.remove('open');
            } else {
                dropdown.classList.add('open');
            }
        });
        document.getElementById('categories-toggle2').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const dropdown = document.getElementById('categories-dropdown2');
            if (dropdown.classList.contains('open')) {
                dropdown.classList.remove('open');
            } else {
                dropdown.classList.add('open');
            }
        });
    </script>
</body>