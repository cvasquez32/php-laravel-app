<x-layout>
  <x-slot name="title">
    Messages
  </x-slot>
  @foreach ($messages as $message)
  <div class="mb-4">
    <h2 class="mb-1">Sender: {{ $message->sender_name }}</h2>
    <h2 class="mb-1">Email: {{ $message->sender_email }}</h2>
    <p>{{ $message->message }}</p>
  </div>
  @endforeach
</x-layout>