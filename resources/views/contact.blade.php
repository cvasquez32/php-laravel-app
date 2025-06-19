<x-layout>
  <x-slot:title>
    <span class="text-2xl font-bold text-white">Contact Us</span>
    </x-slot>

    <form action="/contact" method="POST" novalidate>
      @csrf

      @if ($errors->any())
      <div class="m-2 p-2 border-2 border-rose-500 rounded-md text-red-300">
        <ul class="text-sm list-disc pl-4">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="mb-4">
        <label for="name" class="block text-sm font-bold mb-2 text-white">Name</label>
        <input type="text" id="name" name="name"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black"
          value="{{ old('name') }}">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm font-bold mb-2 text-white">Email</label>
        <input type="email" id="email" name="email"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black"
          value="{{ old('email') }}">
      </div>

      <div class="mb-6">
        <label for="message" class="block text-sm font-bold mb-2 text-white">Your Message</label>
        <textarea id="message" name="message" rows="4"
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black">{{ old('message') }}</textarea>
      </div>

      <button type="submit"
        class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none">
        Send Message
      </button>
    </form>
</x-layout>