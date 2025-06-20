<x-layout>
  <x-slot:title>
    Messages
    </x-slot>

    <div class="grid gap-6 mt-6">
      @forelse ($messages as $message)
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow">
      <h5 class="text-sm mb-2">Sent on: {{ $message->created_at->format('F j, Y g:i A')}}</h5>
        <h2 class="text-lg font-semibold mb-1">Sender: {{ $message->sender_name }}</h2>
        <h3 class="text-sm text-indigo-600 mb-2">Email: {{ $message->sender_email }}</h3>
        <p class="text-sm text-gray-800">{{ $message->message }}</p>
      </div>
      @empty
      <p class="text-gray-300">No messages found.</p>
      @endforelse
    </div>
</x-layout>