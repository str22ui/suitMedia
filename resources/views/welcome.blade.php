<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Test</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <!-- Menggunakan CDN untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<script>
    // Implement JavaScript to fetch API data using fetch or other methods
    // Example:
    fetch('/fetch-data') // Assuming the route is defined as '/fetch-data'
        .then(response => response.json())
        .then(data => {
            // Process and display data here
            console.log(data);
        })
        .catch(error => console.error(error));
</script>

<body>
    <header>
        <nav class="container mx-auto flex justify-between items-center ">
            <div class="navbar-logo">
                <a href="#"><img src="{{ asset('images/logo2.png') }}"alt="Logo" class="w-20"></a>
            </div>
            <ul class="navbar-menu flex space-x-4 text-white">
                <li><a href="#work">Work</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#ideas">Ideas</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner bg-cover bg-center h-80 flex flex-col justify-center items-center text-white relative"
        style="background-image: url('/images/bg.jpg');">
        <!-- Konten banner -->
        <h1 class="text-4xl font-bold">Ideas</h1>
        <div>
            <p>Where all our great things begin</p>
        </div>
        <!-- Area miring pada bagian bawah banner -->
        <div class="banner-bottom-shape absolute bottom-0 left-0 right-0" style="height: 50px;">
            <div class="w-full h-full"
                style="background: linear-gradient(to bottom right, transparent calc(50% - 1px), white calc(50% + 1px)); clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
            </div>
        </div>
    </div>
    <div class="justify-center items-center mb-4 mx-10">
        <div class="flex justify-between  mb-4">
            <div>
                Showing 1 - 10 of 100 <!-- Informasi jumlah item yang ditampilkan -->
            </div>
            <div class="flex items-center space-x-4">
                <!-- Dropdown untuk memilih jumlah item per halaman -->
                <label for="showPerPage">Show per Page:</label>
                <select id="showPerPage" class="border rounded-md px-2 py-1">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <!-- Tambahkan opsi lain jika diperlukan -->
                </select>
                <!-- Dropdown untuk sort by -->
                <label for="sortBy">Sort by:</label>
                <select id="sortBy" class="border rounded-md px-2 py-1">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-center justify-center">

            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="" alt="Image" class="w-full h-40 object-cover object-center">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2"></h3>
                    <p class="text-gray-600"></p>
                </div>
            </div>

        </div>
        <div class="flex items-center justify-center space-x-2">
            <!-- Tombol "<<" (previous) -->
            <button class="bg-gray-200 px-3 py-1 rounded-md" disabled>&laquo;</button>
            <!-- Tombol "<" (previous page) -->
            <button class="bg-gray-200 px-3 py-1 rounded-md" disabled>&lsaquo;</button>
            <!-- Nomor halaman -->
            <button class="bg-gray-200 px-3 py-1 rounded-md">1</button>
            <button class="bg-gray-200 px-3 py-1 rounded-md">2</button>
            <button class="bg-gray-200 px-3 py-1 rounded-md">3</button>
            <!-- ... (lanjutkan dengan nomor halaman lainnya) -->
            <!-- Tombol ">" (next page) -->
            <button class="bg-gray-200 px-3 py-1 rounded-md">&rsaquo;</button>
            <!-- Tombol ">>" (next) -->
            <button class="bg-gray-200 px-3 py-1 rounded-md">&raquo;</button>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
