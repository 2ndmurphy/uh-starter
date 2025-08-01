@props(['active' => false])

<a {{ $attributes }} 
  class="{{ $active ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center px-4 py-2 rounded-lg transition-colors duration-200 group">
  {{$slot}}
</a>
