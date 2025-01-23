@extends('layouts.User.dashboard.dashboard')

@section('title')
  Educational Resources
@endsection

@section('content')
<div class="w-full lg:w-[80%] mx-auto">
    <div class=" w-full lg:w-[80%] mx-auto">
      <h1 class="text-3xl">Educational Resource</h1>
  
      <div class="px-4 sm:px-6 lg:px-3 py-10">
        <div
          data-hs-carousel='{
                    "loadingClasses": "opacity-0"
                  }'
          class="relative"
        >
          <div class="hs-carousel relative overflow-hidden w-full h-[20rem] md:h-[calc(50vh-80px)]  bg-gray-100 rounded-2xl ">
            <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
              <div class="hs-carousel-slide">
                <div class="h-[20rem] md:h-[calc(50vh-80px)] flex flex-col bg-[url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
                  <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                    <span class="block text-white">Nike React</span>
                    <span class="block text-white text-xl md:text-3xl">
                      Rewriting sport's playbook for billions of athletes
                    </span>
                    <div class="mt-5">
                      <a
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        href="#"
                      >
                        Watch Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="hs-carousel-slide">
                <div class="h-[20rem] md:h-[calc(50vh-80px)]  flex flex-col bg-[url('https://plus.unsplash.com/premium_photo-1663852297267-827c73e7529e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
                  <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                    <span class="block text-white">CoolApps</span>
                    <span class="block text-white text-xl md:text-3xl">
                      From mobile apps to gaming consoles
                    </span>
                    <div class="mt-5">
                      <a
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        href="#"
                      >
                        Watch Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="hs-carousel-slide">
                <div class="h-[20rem] md:h-[calc(50vh-80px)]  flex flex-col bg-[url('https://plus.unsplash.com/premium_photo-1673108852141-e8c3c22a4a22?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
                  <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                    <span class="block text-white">Grumpy</span>
                    <span class="block text-white text-xl md:text-3xl">
                      Bringing Art to everything
                    </span>
                    <div class="mt-5">
                      <a
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        href="#"
                      >
                        Watch Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <button
            type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-s-2xl focus:outline-none focus:bg-white/20"
          >
            <span class="text-2xl" aria-hidden="true">
              <svg
                class="shrink-0 size-3.5 md:size-4"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
                ></path>
              </svg>
            </span>
            <span class="sr-only">Previous</span>
          </button>
  
          <button
            type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-e-2xl focus:outline-none focus:bg-white/20"
          >
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
              <svg
                class="shrink-0 size-3.5 md:size-4"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                ></path>
              </svg>
            </span>
          </button>
        </div>
      </div>
  
      {{-- first row  --}}
      <div class="max-w-[85rem] px-4 py-4 sm:px-2 lg:px-4 xl:py-4 mx-auto">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
          <div class="group flex flex-col h-full  border border-gray-200 shadow-sm rounded-xl ">
                <img src="/edu1.avif" alt="ginger water" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Benefits of Ginger Water
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Ginger water boosts digestion, reduces nausea, strengthens immunity, fights inflammation, lowers blood sugar, and supports heart health, making it a natural remedy for overall wellness and vitality.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
          <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl ">
            <img src="/edu2.avif" alt="strawberry" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Strawberry Season
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">

                Strawberry season typically runs from early spring to summer, peaking in May and June. During this time, fresh, juicy strawberries are abundant, perfect for picking, making jams, or enjoying in various dishes.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
        </div>
      </div>

      {{-- second row  --}}

      <div class="max-w-[85rem] px-4 py-4 sm:px-2 lg:px-4 xl:py-4 mx-auto">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
          <div class="group flex flex-col h-full  border border-gray-200 shadow-sm rounded-xl ">
                <img src="/edu3.avif" alt="3 bowls of nuts" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Use of nuts in recipes
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">

                Nuts can enhance recipes by adding crunch, flavor, and nutrition. Use them as toppings on salads, oatmeal, or desserts, blend into nut butters, incorporate in baked goods, or add to savory dishes like stir-fries for extra richness.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
          <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl ">
            <img src="/edu4.avif" alt="pizza" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Drawbacks of Fast Food
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Fast food, while convenient, often contains high levels of unhealthy fats, sodium, and sugar, contributing to weight gain, heart disease, and diabetes. It also lacks essential nutrients, making it a poor choice for long-term health and well-being.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
        </div>
      </div>

      {{-- third row  --}}
      <div class="max-w-[85rem] px-4 py-4 sm:px-2 lg:px-4 xl:py-4 mx-auto">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
          <div class="group flex flex-col h-full  border border-gray-200 shadow-sm rounded-xl ">
                <img src="/edu5.avif" alt="vegetables" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Vitamins in Carrots
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Carrots are rich in vitamin A, primarily in the form of beta-carotene, which supports eye health and immune function. They also contain vitamin K, vitamin C, and some B vitamins, such as B6 and folate.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
          <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl ">
            <img src="/edu6.avif" alt="paper bag" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Benefits of Paper Bags in nowaday
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Paper bags are eco-friendly, biodegradable, and recyclable, making them a sustainable alternative to plastic. They are durable, reusable, and safer for the environment, reducing pollution. Paper bags also carry heavier loads and don’t contain harmful chemicals like plastics.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200 ">
              <a
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                href="#"
              >
                Download Card
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  
@endsection
