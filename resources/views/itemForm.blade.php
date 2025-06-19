<x-layout>
  <x-slot:title>
    Create New Item
    </x-slot>
    <form action="/itemForm" method="POST" novalidate>
      @csrf

      @if ($errors->any())
      <div class="m-2 p-2 border-2 border-rose-500 rounded-md">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="mb-4">
        <label for="name" class="block text-sm font-bold mb-2">Item</label>
        <input type="text" id="name" name="name"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" value="{{ old('name') }}">
      </div>


      <div class="mb-4">
        <label for="price" class="block text-sm font-bold mb-2">price</label>
        <input type="number" id="price" name="price"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" value="{{ old('price') }}">
      </div>

      <div class="mb-6">
        <label for="description" class="block text-sm font-bold mb-2"> Description</label>
        <textarea id="description" name="description" rows="4"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">{{old('description')}}</textarea>
      </div>

      <button type="submit"
        class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none">
        Submit Item
      </button>
    </form>
</x-layout>