<x-app-layout>
  <x-slot name="header">
      <h2 class="font-bold text-2xl text-white leading-tight tracking-wider">
          {{ __('About Diagnose') }}
      </h2>
  </x-slot>

  <section class="py-10 px-3 lg:px-6">
      <div class="bg-white overflow-hidden shadow-md px-4 py-8 sm:rounded-lg">
          <div class="flex flex-col items-center">
          <img class="h-24 w-auto" src="{{ asset('storage/logo.png') }}" alt="Diagnose Logo">
          <p class="mt-8 text-center text-lg sm:max-w-lg md:text-xl">
              {{ __('Diagnose is an expert system for early detection of anxiety disorders.') }}
            </p>
            <span class="mt-12 text-center sm:text-lg">
              {{ __("Thank's for") }}
            </span>
            <div class="flex flex-row justify-center mt-6 space-x-6">
              <address class="not-italic text-center w-4/12">
                <p class="font-bold text-xl">
                  Universitas Bina Darma
              </p>
                <a href="https://www.binadarma.ac.id/" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex">
                  <img src="https://www.binadarma.ac.id/wp-content/uploads/2023/05/logoubd.png" alt=" Logo" class="h-10 w-auto">
                </a>
                <p class="font-bold mt-3">
                  {{ __('Address') }} :
                </p>
                <a href="#" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex hover:text-purple-700">
                Jl. Jenderal A. Yani No. 3 Palembang Sumatera Selatan, Indonesia                </a>
                <p class="font-bold mt-3">
                  {{ __('Telephone') }} :
                </p>
                <a href="tel:0711-515582" class="mt-2 inline-flex hover:text-purple-700">
                0711-515582
                </a>
              </address>
              <address class="not-italic text-center w-4/12">
                <p class="font-bold text-xl">
                  Universitas Bina Darma
              </p>
                <a href="https://www.binadarma.ac.id/" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex">
                  <img src="https://www.binadarma.ac.id/wp-content/uploads/2023/05/logoubd.png" alt=" Logo" class="h-10 w-auto">
                </a>
                <p class="font-bold mt-3">
                  {{ __('Address') }} :
                </p>
                <a href="#" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex hover:text-purple-700">
                Jl. Jenderal A. Yani No. 3 Palembang Sumatera Selatan, Indonesia                </a>
                <p class="font-bold mt-3">
                  {{ __('Telephone') }} :
                </p>
                <a href="tel:0711-515582" class="mt-2 inline-flex hover:text-purple-700">
                0711-515582
                </a>
              </address>
          </div>
      </div>
  </section>
</x-app-layout>
