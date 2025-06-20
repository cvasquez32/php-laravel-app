<x-layout>
  <x-slot:title>
    Home
    </x-slot>

    <h1 class="text-3xl font-extrabold text-white mb-6">
      Welcome to Marketplace!
    </h1>
    <p class="text-lg text-gray-300 mb-8">
      Below are the available items for sale:
    </p>

    <x-items :items="$items" />
</x-layout>