<x-layout>

  <x-breadcrumd :items="[['label' => 'home', 'url' => '/dashboard'], ['label' => 'Data Siswa']]" />

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <x-stat-card title="Total Siswa" value="245" icon="fas fa-users text-blue-600" />
    <x-stat-card title="Siswa Aktif" value="20" icon="fas fa-user-check text-green-600" />
    <x-stat-card title="Total Kelas" value="12" icon="fas fa-chalkboard text-yellow-600" />
    <x-stat-card title="Tidak Aktif" value="15" icon="fas fa-user-times text-red-600" />
  </div>

  <x-data-table :rows="$siswas" />

</x-layout>
