<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Contact Website' }}</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="p-4">
  <nav class="mb-4">
    <x-nav-link href="/">Home</x-nav-link> |
    <x-nav-link href="/about">About</x-nav-link> |
    <x-nav-link href="/contact">Contact</x-nav-link> |
    <x-nav-link href="/messages">Messages</x-nav-link> |
    <x-nav-link href="/itemForm">Submit Item</x-nav-link>
  </nav>

  {{ $slot }}
</body>

</html>