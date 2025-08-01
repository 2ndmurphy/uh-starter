  <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between">
      <div class="flex items-center">

        <button class="lg:hidden mr-4 text-gray-500 hover:text-gray-700 transition-colors duration-200">
          <i class="fas fa-bars text-xl"></i>
        </button>

        <!-- Page Title -->
        <h1 class="text-2xl font-bold text-gray-800">
          <!-- GANTI: Judul halaman dinamis berdasarkan halaman aktif -->
          {{ $slot }}
        </h1>
      </div>
    </div>
  </header>
