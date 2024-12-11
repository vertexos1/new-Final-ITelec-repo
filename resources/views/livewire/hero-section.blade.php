<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          Find the real You.
          <strong class="font-extrabold text-rose-700 sm:block"> Express yourself. </strong>
        </h1>
  
        <p class="mt-4 sm:text-xl/relaxed">
          Look through our catalog and find what truly fits you.
        </p>
  
        <div class="mt-8 flex flex-wrap justify-center gap-4">
              @if (auth()->check())
                <a
                  class="block w-full rounded bg-rose-600 px-4 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
                  href="/offer"
                >
                  Redeem your Offer Now!
                </a>
              @else
                <a
                  class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
                  href="/auth/login"
                >
                  Get Started
                </a>
              @endif
         
  
          <a
            class="block w-full rounded px-14 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
            href="#"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>