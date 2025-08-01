@props(['title', 'value', 'icon'])

<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
  <div class="flex items-center">
    <div class="p-3 rounded-full bg-blue-100 mr-4">
      <i class="{{ $icon }} text-blue-600 text-xl"></i>
    </div>
    <div>
      <p class="text-sm text-gray-600">{{ $title }}</p>
      <p class="text-2xl font-bold text-gray-800">
        {{ $value }}
      </p>
    </div>
  </div>
</div>
