<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
  @foreach ($items as $item)
  <div class="bg-white text-gray-900 rounded-lg shadow p-6">
    <h2 class="text-xl font-semibold mb-2">{{ $item->name }}</h2>
    <h3 class="text-lg text-indigo-600 font-medium mb-2">${{ number_format($item->price, 2) }}</h3>
    <p class="text-sm text-gray-700">{{ $item->description }}</p>
  </div>
  @endforeach
</div>