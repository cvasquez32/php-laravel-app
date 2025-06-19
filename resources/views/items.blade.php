<x-layout>
  <x-slot:title>
    Items For Sale
  </x-slot:title>
  @foreach ($items as $item)
  <div>
    <h2 class="mb-1">Item: {{ $item->name }}</h2>
    <h2 class="mb-1">Price: ${{ $item->price }}</h2>
    <p>{{ $item->description }}</p>
  </div>
  @endforeach
</x-layout>