@extends('layouts.User.dashboard.dashboard')

@section('title')
  Culinary Resources
@endsection

@section('content')
<div class="w-full lg:w-[80%] mx-auto">
    <div class=" w-full lg:w-[80%] mx-auto">
      <h1 class="text-3xl">Culinary Resources</h1>
  
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
                <div class="h-[20rem] md:h-[calc(50vh-80px)] flex flex-col bg-[url('https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTh8fGZvb2QlMjByZWNlaXBlc3xlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
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
                <div class="h-[20rem] md:h-[calc(50vh-80px)]  flex flex-col bg-[url('https://images.unsplash.com/photo-1504712598893-24159a89200e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTcwfHxmb29kJTIwcmVjZWlwZXN8ZW58MHx8MHx8fDA%3D')] bg-cover bg-center bg-no-repeat">
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
                <div class="h-[20rem] md:h-[calc(50vh-80px)]  flex flex-col bg-[url('https://plus.unsplash.com/premium_photo-1674147611212-4d7ede62638c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGFzaWFuJTIwZm9vZCUyMHJlY2VpcGVzfGVufDB8fDB8fHww')] bg-cover bg-center bg-no-repeat">
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
                <img src="/cul1.avif" alt="Japan Ramen" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Ingredients for Japanese Ramen
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                To make Japanese ramen, boil noodles according to package instructions. In a separate pot, simmer broth (chicken, pork, or miso) with soy sauce, garlic, ginger, and sesame oil. Serve noodles in a bowl, pour broth over, and top with sliced pork, boiled egg, green onions, and nori. Enjoy!
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
            <img src="/cul2.avif" alt="strawberry" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                How to make Kimchi
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">

                To make kimchi, cut napa cabbage and salt it, letting it sit for a few hours. Rinse, then mix with a paste made from garlic, ginger, fish sauce, gochugaru (Korean chili flakes), and sugar. Pack the mixture into a jar, seal, and ferment for 2-5 days at room temperature. Enjoy!
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
          <div class="group flex flex-col h-full border border-gray-200 shadow-sm rounded-xl">
            <video width="100%" height="250" controls class="rounded-t-xl">
              <source src="your_video.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">
                Use of nuts in recipes
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Nuts can enhance recipes by adding crunch, flavor, and nutrition. Use them as toppings on salads, oatmeal, or desserts, blend into nut butters, incorporate in baked goods, or add to savory dishes like stir-fries for extra richness.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
              <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Download Card
              </a>
            </div>
          </div>
          <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <img src="/cul3.avif" alt="loads of bread" class="w-full object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">
                How to make fresh french bread
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                To make fresh French bread, combine flour, water, yeast, salt, and sugar to form dough. Knead until smooth, then let it rise for about an hour. Shape the dough into a loaf, score the top, and bake at 450°F (230°C) for 25-30 minutes until golden and crispy. Enjoy!
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
              <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
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
                <img src="/cul4.avif" alt="india food" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Beauty of indian food
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Indian food is a vibrant blend of rich flavors, colors, and aromas. Its diverse range of spices, herbs, and ingredients creates dishes that are both complex and comforting. From spicy curries to sweet desserts, Indian cuisine offers a sensory experience that reflects the country's cultural richness and heritage.
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
            <img src="/cul5.avif" alt="a bowl of dumpling" class="w-full  object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 ">
                Chinese signature dumplings
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Chinese signature dumplings, like jiaozi, are a popular dish with fillings of pork, beef, chicken, or vegetables, seasoned with ginger, garlic, and soy sauce. Steamed, boiled, or pan-fried, they're often served with dipping sauces. These dumplings symbolize wealth and are a favorite during Chinese New Year celebrations.
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

      {{-- fourth row  --}}
      <div class="max-w-[85rem] px-4 py-4 sm:px-2 lg:px-4 xl:py-4 mx-auto">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
          <div class="group flex flex-col h-full border border-gray-200 shadow-sm rounded-xl">
            <video width="100%" height="250" controls class="rounded-t-xl">
              <source src="your_video.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">
                Use of nuts in recipes
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Nuts can enhance recipes by adding crunch, flavor, and nutrition. Use them as toppings on salads, oatmeal, or desserts, blend into nut butters, incorporate in baked goods, or add to savory dishes like stir-fries for extra richness.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
              <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Download Card
              </a>
            </div>
          </div>
          <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <video width="100%" height="250" controls class="rounded-t-xl">
                <source src="your_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            <div class="p-4 md:p-6">
              <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">
                Drawbacks of Fast Food
              </span>
              <p class="mt-3 text-gray-500 dark:text-neutral-500">
                Fast food, while convenient, often contains high levels of unhealthy fats, sodium, and sugar, contributing to weight gain, heart disease, and diabetes. It also lacks essential nutrients, making it a poor choice for long-term health and well-being.
              </p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
              <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Download Card
              </a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  
  
@endsection
