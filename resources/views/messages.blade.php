<x-layout>
  <x-slot:title>
    <span class="text-2xl font-bold text-white">Messages</span>
    </x-slot>

    <div class="grid gap-6 mt-6">
      @forelse ($messages as $message)
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-1">Sender: {{ $message->sender_name }}</h2>
        <h3 class="text-sm text-indigo-600 mb-2">Email: {{ $message->sender_email }}</h3>
        <p class="text-sm text-gray-800">{{ $message->message }}</p>
      </div>
      @empty
      <p class="text-gray-300">No messages found.</p>
      @endforelse
    </div>
</x-layout>