<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
  @foreach ($items as $item)
  <div class="bg-white text-gray-900 rounded-lg shadow p-6 flex flex-col justify-between">
    <div>
      <h2 class="text-xl font-semibold mb-2">{{ $item->name }}</h2>
      <h5 class="text-sm mb-2 text-gray-600">
        Posted on: {{ $item->created_at->format('F j, Y') }}
      </h5>
      <h3 class="text-lg text-indigo-600 font-medium mb-2">
        ${{ number_format($item->price, 2) }}
      </h3>
      <p class="text-sm text-gray-700 mb-4">{{ $item->description }}</p>
    </div>

    <form action="{{ route('destroy', $item->id) }}" method="POST" class="mt-auto">
      @csrf
      @method('DELETE')

      <button type="submit"
        class="bg-red-600 text-sm hover:bg-red-700 text-white font-semibold p-2 rounded w-full transition duration-200">
        Delete Item
      </button>
    </form>
  </div>
  @endforeach
</div>