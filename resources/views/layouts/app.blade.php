<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Balance</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/59539ec33f.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-around items-center">
        <!-- Logo -->
        <a class="flex items-center font-semibold" href="/">
            <i class="fa-solid fa-2x fa-wallet mr-3"></i>
            Wallet Balance
        </a>
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-gray-400"><i class="fa-solid fa-file-invoice-dollar mr-2"></i>Transactions</a></li>
            <li><a href="#" class="hover:text-gray-400"><i class="fa-solid fa-gear mr-2"></i>Settings</a></li>
        </ul>
        <!-- Search Bar -->
        <div class="flex items-center">
            <input type="text" placeholder= "Search" class="bg-gray-800 text-white border border-gray-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300 w-60">
        </div>

        <!-- Login/Profile Links -->
        <div class="flex items-center space-x-4">
            <a href="#" class="hover:text-gray-400"><i class="fa-solid fa-circle-user mr-2"></i>Profile</a>
            <a href="#" class="hover:text-gray-400 ml-5"><i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Log out</a>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
