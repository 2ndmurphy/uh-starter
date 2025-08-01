@props(['rows' => []])

<!-- Table Section -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
  <!-- Table Header -->
  <div class="px-6 py-4 border-b border-gray-200">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
      <h3 class="text-lg font-semibold text-gray-800">
        <!-- GANTI: Judul tabel -->
        Daftar Siswa
      </h3>
    </div>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            No</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            NIS</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nama Siswa</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Kelas</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Jenis Kelamin</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($rows as $siswa)
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              {{ $loop->iteration }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              {{ $siswa->nis }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">{{ $siswa->nama }}</div>
              <div class="text-sm text-gray-500">{{ $siswa->email }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              {{ $siswa->kelas }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              {{ $siswa->jenis_kelamin }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
    <div class="flex items-center justify-between">
      <div class="text-sm text-gray-700">
        Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">10</span> dari <span
          class="font-medium">97</span> hasil
      </div>
      <div class="flex space-x-2">
        <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50 disabled:opacity-50"
          disabled>
          Sebelumnya
        </button>
        <!-- Active Button: "bg-blue-600 text-white", Default: "border border-gray-300" -->
        <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md hover:bg-blue-700">1</button>
        <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">2</button>
        <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">3</button>

        <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">
          Selanjutnya
        </button>
      </div>
    </div>
  </div>
</div>
