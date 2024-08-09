<body>
    <div class="bg-white h-[67px] flex items-center justify-between px-4">
        <div class="flex items-center">
            <i id="menu-toggle" class="fa-solid fa-bars text-black text-xl cursor-pointer ml-[10px]"></i>
        </div>
        <img src="{{ asset('assets/logo.jpg') }}" alt="" class="w-[148px] h-[26px] mx-auto">
        <i class="fa-regular fa-user bg-[#D9D9D9] text-[15px] p-[6px] mr-[10px] rounded-full"></i>
    </div>
    <div id="sidebar">
        <div class="p-4">
            <i id="close-menu" class="fa-solid fa-times text-2xl cursor-pointer"></i>
        </div> 
        <ul class="mt-4">
            <li><a href="#" class="py-2 px-4">Home</a></li>
            <li><a href="#" class="py-2 px-4" id="categories-toggle">Categories</a></li>
            <div class="dropdown-content" id="categories-dropdown">
                <a href="" class="py-2 px-4">Mouse</a>
                <a href="" class="py-2 px-4">Keyboard</a>
                <a href="" class="py-2 px-4">Audio</a>
                <a href="" class="py-2 px-4">Gears</a>
            </div>
            <li><a href="#" class="py-2 px-4">Services</a></li>
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
    </script>
</body>