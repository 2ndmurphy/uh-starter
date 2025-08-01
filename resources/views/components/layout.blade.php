<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'test' }}</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Alpine.js untuk responsivitas -->
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
</head>

<body class="bg-gray-100">
    <!--
    This example to update your Template
    <body class="bg-gray-100">
    -->
    <div class="flex h-screen">
        <!--
          Show/hide based on menu state:
            Visible when: isOpen
            Clicking the button toggles isOpen state

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <button class="fixed inset-0 bg-opacity-50 z-40 lg:hidden">
        </button>

        {{-- Sidebar Desktop --}}
        <x-sidebar>
            
        </x-sidebar>
        
        <div class="flex-1 overflow-auto">
            {{-- Header --}}
            <x-header>
                {{-- {{ $title }} --}}
                Data Siswa
            </x-header>

            <!-- Main Content Area -->
            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>