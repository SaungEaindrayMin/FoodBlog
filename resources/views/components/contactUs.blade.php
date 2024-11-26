@extends('layouts.index')
@section('title')
    Contact Us
@endsection

@section('content')
    <!-- Contact Us -->
<div class=" max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[5%] ">
      <div class="text-center">
        <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
          Contact us
        </h1>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">
          We'd love to talk about how we can help you.
        </p>
      </div>
  
      <div class="mt-12 grid lg:grid-cols-2  justify-center  gap-6 lg:gap-16">
        <!-- Card -->
        <div class="flex flex-col   p-4  lg:p-8 ">
          <h2 class="mb-8 text-xl font-semibold text-gray-800">
            Fill in the form
          </h2>
  
          <form>
            <div class="grid gap-4 lg:gap-8">
              <!-- Grid -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
                  <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1" class="py-3 px-4 block bg-gray-200 w-full border-gray-200 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none " placeholder="First Name">
                </div>
  
                <div>
                  <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
                  <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1" class="py-3 px-4 block bg-gray-200  w-full border-gray-200 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none " placeholder="Last Name">
                </div>
              </div>
              <!-- End Grid -->
  
              <div>
                <label for="hs-email-contacts-1" class="sr-only">Email</label>
                <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1" autocomplete="email" class="py-3 px-4 block bg-gray-200  w-full border-gray-200 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none " placeholder="Email">
              </div>
  
              <div>
                <label for="hs-phone-number-1" class="sr-only">Phone Number</label>
                <input type="text" name="hs-phone-number-1" id="hs-phone-number-1" class="py-3 px-4 block w-full bg-gray-200  border-gray-200 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none " placeholder="Phone Number">
              </div>
  
              <div>
                <label for="hs-about-contacts-1" class="sr-only">Details</label>
                <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4" class="py-3 px-4 block w-full bg-gray-200  border-gray-200 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none " placeholder="Details"></textarea>
              </div>
            </div>
            <!-- End Grid -->
  
            <div class="mt-4 grid">
              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-400 text-black hover:bg-yellow-300  focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none">Send inquiry</button>
            </div>
  
            <div class="mt-3 text-center">
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                We'll get back to you in 1-2 business days.
              </p>
            </div>
          </form>
        </div>
        <!-- End Card -->

        {{-- image layout --}}
  
        <div class="grid  p-4   lg:p-8 ">

          <div class="text-center  font-bold text-yellow-400">
            <h1 class="text-2xl md:text-4xl">Let's cook Delicious & Healthy Food Together!!</h1>
          </div>

          <div>
            <img src="/Outdoor party-cuate.png" alt="group of people" class="w-[80%] h-auto mx-auto">
          </div>

          <div class="grid  justify-center">
            <h1 class="  text-2xl font-bold text-gray-500">GET IN TOUCH</h1>
            <div class="flex items-center justify-center gap-3">
                <a href="" class="p-2 border border-yellow-400 rounded-lg  hover:bg-yellow-400 hover:scale-105 transition-transform duration-300 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-auto  "  ><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                <a href="" class="p-2 border border-yellow-400 rounded-lg  hover:bg-yellow-400 hover:scale-105 transition-transform duration-300 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-auto  "  ><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
                <a href="" class="p-2 border border-yellow-400 rounded-lg  hover:bg-yellow-400 hover:scale-105 transition-transform duration-300 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-auto "  ><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                <a href="" class="p-2 border border-yellow-400 rounded-lg  hover:bg-yellow-400 hover:scale-105 transition-transform duration-300 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-auto "  ><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a>

            </div>
          </div>
        </div>
        {{-- image layout --}}
    </div>
  </div>
  <!-- End Contact Us -->

  @include('components.modal')
  @include('components.footer')
@endsection






