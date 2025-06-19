<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen">
  <nav class="bg-gray-800 text-white px-6 py-4 shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div class="text-lg font-bold">
        <a href="/" class="hover:text-blue-300 transition">Marketplace</a>
      </div>

      <button id="menu-button" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <div id="menu" class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-6 text-sm mt-4 md:mt-0">
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
        <x-nav-link href="/messages">Messages</x-nav-link>
        <x-nav-link href="/itemForm">Submit Item</x-nav-link>
      </div>
    </div>
  </nav>

  <main class="p-6 max-w-5xl mx-auto">
    {{ $slot }}
  </main>

  <script>
    const button = document.getElementById('menu-button');
    const menu = document.getElementById('menu');

    button.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>

</html>