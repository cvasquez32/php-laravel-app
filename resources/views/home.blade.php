<x-layout>
  <x-slot:title>>
    Home
  </x-slot>
  <h1>Welcome to Marketplace! Below are the available items for sale</h1>
  <x-items :items="$items" />
</x-layout>