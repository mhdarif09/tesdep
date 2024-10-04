<x-guest-layout>
<!-- Loader Animation -->
<div id="loader" class="fixed top-0 left-0 w-full h-full bg-white flex items-center justify-center z-50">
  <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-32 w-32"></div>
</div>

<!-- Main Page Content -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <!-- Animated Hero Section -->
      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 animate__animated animate__fadeIn">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">
              {{__('With Diagnose') }}
            </span>
            <span class="block text-purple-600 xl:inline animate__animated animate__pulse">
              {{__("Know Your Worries") }}
            </span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-sm sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            {{ __('Diagnose is an expert system for early detection of anxiety disorders.') }}
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow animate__animated animate__bounceIn">
              <a href="{{ route('dashboard') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 md:py-4 md:text-lg md:px-10">
                {{ __('Get Started') }}
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full animate__animated animate__fadeInRight" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
  </div>
</div>

<!-- Team Section -->
<section id="team" class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Article Section -->
<div class="text-center mb-8">
    <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
        {{ __('Meet the Team') }}
    </h2>
    <p class="mt-3 max-w-2xl text-xl leading-7 text-gray-500 mx-auto">
        {{ __('A passionate team of experts helping you manage your mental health.') }}
    </p>
</div>
      <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
    <!-- Team Members Section -->
    <div class="bg-white p-6 shadow-lg rounded-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
        <img src="{{ url('https://sriwijayacyber.com/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-24-at-21.41.20-2-e1715745798148.jpeg') }}" alt="Team Member 1" class="h-40 w-40 mx-auto rounded-full mb-4">
        <h3 class="text-xl text-center font-bold">{{ __('Muhammad Arif Rahmad Syahputra') }}</h3>
        <p class="text-center text-gray-600">{{ __('Lead Psychologist') }}</p>
       <!-- Social Media Icons -->
    <div class="flex justify-center mt-4 space-x-4">
      <!-- Facebook -->
      <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M22 12C22 5.925 17.075 1 11 1S0 5.925 0 12c0 5.522 4.015 10.09 9.33 10.898v-7.622h-2.82V12h2.82V9.797c0-2.788 1.672-4.307 4.209-4.307 1.219 0 2.491.216 2.491.216v2.73H15.84c-1.413 0-1.854.876-1.854 1.77V12h3.147l-.502 3.276h-2.645v7.622C19.985 22.09 24 17.522 24 12c0-6.075-4.925-11-11-11z"/>
        </svg>
      </a>
      <!-- Twitter -->
      <a href="https://twitter.com" target="_blank" class="text-blue-400 hover:text-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M23.633 4.832a9.362 9.362 0 01-2.683.734 4.688 4.688 0 002.052-2.592 9.32 9.32 0 01-2.966 1.132 4.673 4.673 0 00-7.957 4.257A13.245 13.245 0 011.675 3.15a4.673 4.673 0 001.446 6.231 4.639 4.639 0 01-2.116-.585v.06a4.675 4.675 0 003.748 4.579 4.648 4.648 0 01-2.104.08 4.678 4.678 0 004.367 3.246A9.374 9.374 0 010 20.414a13.226 13.226 0 007.165 2.102c8.6 0 13.304-7.126 13.304-13.304 0-.202-.004-.403-.013-.603A9.51 9.51 0 0024 5.77a9.403 9.403 0 01-2.367.637z"/>
        </svg>
      </a>
      <!-- LinkedIn -->
      <a href="https://linkedin.com" target="_blank" class="text-blue-700 hover:text-blue-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19 0H5C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-11.75 19.25h-2.5v-9h2.5v9zm-1.25-10.5C5.29 8.75 4.5 7.96 4.5 7s.79-1.75 1.75-1.75S8 6.04 8 7 7.21 8.75 6.25 8.75zm10.25 10.5h-2.5v-4.5c0-1.104-.896-2-2-2s-2 .896-2 2v4.5h-2.5v-9h2.5v1.066c.634-.99 1.814-1.566 3-1.566 2.071 0 3.75 1.679 3.75 3.75v5.75z"/>
        </svg>
      </a>
    </div>
</div>
    <!-- Repeat for other team members -->
</div>
<!-- Article Section -->
   <!-- Article Section -->
<div class="text-center mb-8">
    <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
        {{ __('Article') }}
    </h2>
    <p class="mt-3 max-w-2xl text-xl leading-7 text-gray-500 mx-auto">
        {{ __('Artikel Seputar Kesehatan Mental') }}
    </p>
</div>

<section class="space-y-6 mt-12">
    @hasanyrole('admin|expert')
        <div class="flex flex-row">
            <a href="{{ route('articles.index') }}" class="link text-sm flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span class="ml-2">{{ __('Back') }}</span>
            </a>
        </div>
    @endhasanyrole

    <div class="bg-white shadow-md p-4 rounded-lg">
        <div class="article-slider swiper">
            <div class="swiper-wrapper">
                @forelse ($articles as $article)
                    <div class="swiper-slide">
                        <div class="bg-white p-6 shadow-lg rounded-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                            <a href="{{ route('articles.slug', ['article' => $article->slug]) }}" class="group rounded-md">
                                <div class="p-2 mt-2">
                                    @foreach ($article->keywords as $keyword)
                                        @if($loop->iteration <= 1)
                                            <span class="px-2 py-1 mr-2 rounded-lg bg-purple-200 capitalize text-purple-700 font-semibold text-xs">{{ $keyword }}</span>
                                        @endif
                                    @endforeach
                                    <h5 class="mt-4 mb-2 group-hover:text-purple-700 text-lg font-bold leading-normal tracking-wide line-clamp-2 capitalize" title="{{ ucwords($article->title) }}">
                                        {{ $article->title }}
                                    </h5>
                                    <div class="text-base line-clamp-3">
                                        {{ substr(preg_replace('/<[^<]+?>/', ' ', $article->body), 0, 200) }}...
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>No articles found</p>
                @endforelse
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        @if ($articles->count() > 4)
            <button wire:click="loadMore()" wire:loading.attr="disabled" class="btn-primary mx-auto">{{ __('View more') }}</button>
        @endif
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-8">
      <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
        {{ __('Frequently Asked Questions') }}
      </h2>
    </div>
    <div class="space-y-4">
      <!-- FAQ 1 -->
      <details class="bg-white p-4 rounded-lg shadow-lg">
        <summary class="text-xl font-bold cursor-pointer">{{ __('What is anxiety?') }}</summary>
        <p class="text-gray-600 mt-2">{{ __('Anxiety is a feeling of worry, nervousness, or unease about something with an uncertain outcome.') }}</p>
      </details>
      <!-- Repeat similar blocks for other FAQs -->
    </div>
  </div>
</section>

<!-- Loader CSS -->
<style>
  .loader {
    border-top-color: #6b46c1;
    animation: spinner 3.5s linear infinite;
  }

  @keyframes spinner {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>


<!-- Add Swiper.js styles -->
<style>
    .swiper {
        width: 100%;
        height: auto;
    }

    .swiper-slide {
        width: 300px; /* Width of each card */
        margin-right: 20px; /* Spacing between cards */
    }
</style>


<!-- Loader JavaScript -->
<script>
  window.addEventListener("load", function () {
    const loader = document.getElementById("loader");
    loader.style.display = "none";
  });
</script>

<!-- Initialize Swiper -->
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true, // Enable looping
    });
</script>

</x-guest-layout>
