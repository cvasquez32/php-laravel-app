@foreach ($items as $item)
<div class="mt-4">
  <h2 class="mb-1">Item: {{ $item->name }}</h2>
  <h2 class="mb-1">Price: ${{ $item->price }}</h2>
  <p>{{ $item->description }}</p>
</div>
@endforeach