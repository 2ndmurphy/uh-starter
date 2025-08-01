{{-- Desktop --}}
<div class="hidden lg:block lg:relative w-64">
  <div class="bg-gray-900 text-white h-full p-4 relative">
    <div class="flex items-center mb-8">
      <i class="fas fa-graduation-cap text-2xl mr-3 flex-shrink-0"></i>
      <h2 class="text-xl font-bold">
        <!-- GANTI: Nama Sekolah/Sistem Anda -->
        SMK KEREN
      </h2>
    </div>

    <!-- Navigation Menu -->
    <!-- Active Button: bg-gray-700 text-white, Default: text-gray-300 hover:bg-gray-700 hover:text-white -->
    <nav class="space-y-2">
      {{-- <x-nav_link href=""></x-nav_link> --}}
      <x-nav_link href="/dashboard" :active="request()->routeIs('dashboard')">
        <i
          class="fas fa-tachometer-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Dashboard</span>
      </x-nav_link>
      <x-nav_link href="/siswa" :active="request()->routeIs('siswa')">
        <i class="fas fa-users text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Data Siswa</span>
      </x-nav_link>
      <x-nav_link href="/kelas" :active="request()->routeIs('kelas')">
        <i class="fas fa-chalkboard text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Kelas</span>
      </x-nav_link>
      <x-nav_link href="/nilai" :active="request()->routeIs('nilai')">
        <i class="fas fa-chart-line text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Nilai</span>
      </x-nav_link>
      <x-nav_link href="/laporan" :active="request()->routeIs('laporan')">
        <i class="fas fa-file-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Laporan</span>
      </x-nav_link>
    </nav>

    <!-- User Profile Section (Bottom) -->
    <div class="absolute bottom-4 left-4 right-4">
      <div class="flex items-center p-3 bg-gray-800 rounded-lg">
        <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full flex-shrink-0">
        <div class="ml-3">
          <p class="text-sm font-medium">Admin User</p>
          <p class="text-xs text-gray-400">Administrator</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- MOBILE --}}
<div class="lg:hidden fixed inset-y-0 left-0 w-64 z-50">

  <!-- Sidebar Content untuk Mobile -->
  <div class="bg-gray-900 text-white h-full p-4 relative">
    <!-- Logo/Header Section -->
    <div class="flex items-center mb-8">
      <i class="fas fa-graduation-cap text-2xl mr-3 flex-shrink-0"></i>
      <h2 class="text-xl font-bold">
        <!-- GANTI: Nama Sekolah/Sistem Anda -->
        SMK KEREN
      </h2>
    </div>

    <!-- Navigation Menu -->
    <!-- Active Button: bg-gray-700 text-white, Default: text-gray-300 hover:bg-gray-700 hover:text-white -->
    <nav class="space-y-2">
      {{-- <x-nav_link href=""></x-nav_link> --}}
      <x-nav_link href="#">
        <i
          class="fas fa-tachometer-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Dashboard</span>
      </x-nav_link>
      <x-nav_link href="#">
        <i class="fas fa-users text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Data Siswa</span>
      </x-nav_link>
      <x-nav_link href="#">
        <i class="fas fa-chalkboard text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Kelas</span>
      </x-nav_link>
      <x-nav_link href="#">
        <i class="fas fa-chart-line text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Nilai</span>
      </x-nav_link>
      <x-nav_link href="#">
        <i class="fas fa-file-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
        <span class="ml-3">Laporan</span>
      </x-nav_link>
    </nav>

    <!-- User Profile Section (Bottom) -->
    <div class="absolute bottom-4 left-4 right-4">
      <div class="flex items-center p-3 bg-gray-800 rounded-lg">
        <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full flex-shrink-0">
        <div class="ml-3">
          <p class="text-sm font-medium">Admin User</p>
          <p class="text-xs text-gray-400">Administrator</p>
        </div>
      </div>
    </div>
  </div>
</div>
