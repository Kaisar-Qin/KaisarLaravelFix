<x-admin.layout>

   <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            {{ $title }}
        </h1>

         <div class="mt-4 text-gray-700 dark:text-gray-300">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Halaman About</h2>
            <p>Nama : {{ $nama }}</p>
            <p>Hobi : {{ $hobby }}</p>
            <p>Akun Repository : {{ $repository }}</p>
        </div>
    </div>

</x-admin.layout>
