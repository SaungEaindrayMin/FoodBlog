    <!-- Contact Us -->
    <div class=" max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[10%] ">
        <div class="text-center">
          <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white mt-24">
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
    
            <form action="{{ route('contact.store') }}" method="POST">
              @csrf
              @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                    {{ session('success') }}
                </div>
              @endif

              <div class="grid gap-4 lg:gap-8">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label for="first_name" class="sr-only">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" placeholder="First Name" value="{{ old('first_name') }}">
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
    
                  <div>
                    <label for="last_name" class="sr-only">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" placeholder="Last Name" value="{{ old('last_name') }}">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <!-- End Grid -->
    
                <div>
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" placeholder="Email" value="{{ old('email') }}">
                  @error('email')
                      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
    
                <div>
                  <label for="phone" class="sr-only">Phone Number</label>
                  <input type="text" name="phone" id="phone" class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" placeholder="Phone Number" value="{{ old('phone') }}">
                  @error('phone')
                      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
    
                <div>
                  <label for="details" class="sr-only">Details</label>
                  <textarea id="details" name="details" rows="4" class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" placeholder="Details">{{ old('details') }}</textarea>
                  @error('details')
                      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <!-- End Grid -->
    
              <div class="mt-4 grid">
                <button type="submit" class="bg-yellow-400 shadow-[3px_3px_0px_0px_#E99F4C] text-black font-extrabold w-full mx-auto p-2 mt-4 rounded-xl hover:opacity-90">Send inquiry</button>
              </div>
    
              <div class="flex gap-x-7 py-6">
                <svg class="shrink-0 size-6 mt-1.5 text-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
                <div class="grow">
                  <h3 class="font-semibold text-gray-800 ">FAQ</h3>
                  <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Search our FAQ for answers to anything you might ask.</p>
                  <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800" href="">
                    Visit FAQ
                    <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
            </form>
          </div>
          <!-- End Card -->
  
          {{-- image layout --}}
    
          <div class="grid  p-4   lg:p-8">
  
            <div class="text-center  font-bold text-yellow-400 ">
              <h1 class="text-2xl md:text-4xl">Let's cook Delicious & Healthy Food Together!!</h1>
            </div>

              {{-- social media icon  --}}
            <div class="grid text-center   items-center ">

              <div class="flex items-center justify-center gap-4">
                <div class="social-button">
                  <button class="relative w-12 h-12 rounded-full group">
                    <div
                      class="floater w-full h-full absolute top-0 left-0 bg-violet-400 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
                    ></div>
                    <div
                      class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-violet-400 rounded-full"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                      >
                        <path
                          class="group-hover:fill-[#171543] fill-white duration-300"
                          d="M21.94 6.46809C21.8884 5.2991 21.6994 4.49551 21.4285 3.79911C21.1492 3.05994 20.7194 2.39818 20.1564 1.84802C19.6062 1.28932 18.9401 0.855163 18.2094 0.580194C17.5091 0.309437 16.7096 0.120336 15.5407 0.0688497C14.363 0.0128932 13.9891 0 11.0022 0C8.01527 0 7.64141 0.0128932 6.46808 0.064466C5.29914 0.116039 4.49551 0.305225 3.79932 0.57581C3.05994 0.855163 2.39818 1.28494 1.84802 1.84802C1.28932 2.39813 0.855377 3.06428 0.580193 3.7949C0.309437 4.49551 0.120379 5.2948 0.0688496 6.4637C0.0129362 7.64141 0 8.01527 0 11.0022C0 13.9891 0.0129362 14.363 0.0644659 15.5363C0.116039 16.7053 0.305225 17.5089 0.576025 18.2053C0.855377 18.9444 1.28932 19.6062 1.84802 20.1564C2.39818 20.7151 3.06432 21.1492 3.79494 21.4242C4.49547 21.6949 5.29476 21.884 6.46391 21.9355C7.63702 21.9873 8.0111 22 10.998 22C13.9849 22 14.3588 21.9873 15.5321 21.9355C16.7011 21.884 17.5047 21.695 18.2009 21.4242C18.9321 21.1415 19.5961 20.7091 20.1505 20.1548C20.7048 19.6005 21.1373 18.9365 21.42 18.2053C21.6906 17.5047 21.8798 16.7052 21.9314 15.5363C21.9829 14.363 21.9958 13.9891 21.9958 11.0022C21.9958 8.01527 21.9914 7.64137 21.94 6.46809ZM19.9588 15.4503C19.9114 16.5248 19.731 17.105 19.5805 17.4918C19.2109 18.4502 18.4502 19.2109 17.4918 19.5805C17.105 19.731 16.5206 19.9114 15.4503 19.9586C14.29 20.0103 13.942 20.023 11.0066 20.023C8.07118 20.023 7.71881 20.0103 6.56259 19.9586C5.48816 19.9114 4.90796 19.731 4.52117 19.5805C4.04425 19.4043 3.61014 19.1249 3.25772 18.7596C2.89242 18.4029 2.61306 17.9731 2.43677 17.4961C2.28635 17.1094 2.10589 16.5248 2.05874 15.4547C2.007 14.2943 1.99428 13.9461 1.99428 11.0107C1.99428 8.07535 2.007 7.72298 2.05874 6.56698C2.10589 5.49254 2.28635 4.91235 2.43677 4.52555C2.61306 4.04842 2.89241 3.61439 3.26211 3.26189C3.61865 2.89658 4.04842 2.61723 4.52555 2.44115C4.91235 2.29073 5.49692 2.11023 6.56697 2.06291C7.72736 2.01134 8.07556 1.99844 11.0107 1.99844C13.9505 1.99844 14.3588 2.01134 15.4547 2.06291C16.5292 2.11027 17.1093 2.29069 17.4961 2.44111C17.9731 2.61723 18.4072 2.89658 18.7596 3.26189C19.1249 3.61865 19.4042 4.04842 19.5805 4.52555C19.731 4.91235 19.9114 5.49671 19.9587 6.56698C20.0103 7.72736 20.0232 8.07535 20.0232 11.0107C20.0232 13.9461 20.0104 14.29 19.9588 15.4503ZM19,19h-2.5v-4.9 c0-1.2-0.4-2-1.4-2c-0.8,0-1.3,0.6-1.5,1.2h-0.1V19H10V10h2.3v1.3h0C12.7,10.7,14,9.9,15.5,9.9c2.1,0,3.5,1.4,3.5,3.8V19z"
                        ></path>
                        <path
                          class="group-hover:fill-[#171543] fill-white duration-300"
                          d="M11.0026 5.35054C7.88252 5.35054 5.35107 7.88182 5.35107 11.0021C5.35107 14.1223 7.88252 16.6536 11.0026 16.6536C14.1227 16.6536 16.6541 14.1223 16.6541 11.0021C16.6541 7.88182 14.1227 5.35054 11.0026 5.35054ZM11.0026 14.668C8.97844 14.668 7.33654 13.0264 7.33654 11.0021C7.33654 8.97774 8.97844 7.33609 11.0025 7.33609C13.0269 7.33609 14.6685 8.97774 14.6685 11.0021C14.6685 13.0264 13.0268 14.668 11.0026 14.668ZM18.1971 5.12706C18.1971 5.85569 17.6063 6.44646 16.8775 6.44646C16.1489 6.44646 15.5581 5.85569 15.5581 5.12706C15.5581 4.39833 16.1489 3.80774 16.8775 3.80774C17.6063 3.80774 18.1971 4.39829 18.1971 5.12706Z"
                        ></path>
                      </svg>
                    </div>
                  </button>
                </div>
                <div class="social-button">
                  <button class="relative w-12 h-12 rounded-full group">
                    <div
                      class="floater w-full h-full absolute top-0 left-0 bg-black rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
                    ></div>
                    <div
                      class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-black rounded-full"
                    >
                      <svg
                        height="24"
                        width="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          class="group-hover:fill-[#171543] fill-white duration-300"
                          d="M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M8.5,19H6V10h2.5V19z M7.3,9 h-0.1C6.4,9,6,8.6,6,8.1V7.9c0-0.5,0.4-0.9,0.9-0.9h0.1C7.6,7,8,7.4,8,7.9v0.1C8,8.6,7.6,9,7.3,9z M19,19h-2.5v-4.9 c0-1.2-0.4-2-1.4-2c-0.8,0-1.3,0.6-1.5,1.2h-0.1V19H10V10h2.3v1.3h0C12.7,10.7,14,9.9,15.5,9.9c2.1,0,3.5,1.4,3.5,3.8V19z"
                          fill="#FFFFFF"
                        ></path>
                      </svg>
                    </div>
                  </button>
                </div>
                <div class="social-button">
                  <button class="relative w-12 h-12 rounded-full group">
                    <div
                      class="floater w-full h-full absolute top-0 left-0 bg-blue-500 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
                    ></div>
                    <div
                      class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-blue-500 rounded-full"
                    >
                      <svg
                        height="24"
                        width="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          class="group-hover:fill-[#171543] fill-white duration-300"
                          d="M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M8.5,19H6V10h2.5V19z M7.3,9 h-0.1C6.4,9,6,8.6,6,8.1V7.9c0-0.5,0.4-0.9,0.9-0.9h0.1C7.6,7,8,7.4,8,7.9v0.1C8,8.6,7.6,9,7.3,9z M19,19h-2.5v-4.9 c0-1.2-0.4-2-1.4-2c-0.8,0-1.3,0.6-1.5,1.2h-0.1V19H10V10h2.3v1.3h0C12.7,10.7,14,9.9,15.5,9.9c2.1,0,3.5,1.4,3.5,3.8V19z"
                          fill="#FFFFFF"
                        ></path>
                      </svg>
                    </div>
                  </button>
                </div>
                <div class="social-button">
                  <button class="relative w-12 h-12 rounded-full group">
                    <div
                      class="floater w-full h-full absolute top-0 left-0 bg-red-400 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
                    ></div>
                    <div
                      class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-red-400 rounded-full"
                    >
                      <svg
                        height="32"
                        width="32"
                        viewBox="0 0 32 32"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          class="group-hover:fill-[#171543] fill-white duration-300"
                          d="M28 5H4c-1.104 0-2 .896-2 2v18c0 1.104.896 2 2 2h24c1.104 0 2-.896 2-2V7c0-1.104-.896-2-2-2zm0 4.879L16 18 4 9.879V7l12 8 12-8v2.879zM4 23V11.885l11.446 7.63c.269.18.594.274.921.274s.652-.094.92-.274L28 11.885V23H4z"
                          fill="#FFFFFF"
                        ></path>
                      </svg>
                    </div>
                  </button>
                </div>
              </div>
  
            <div >

              <img src="/Recipe book-pana.png" alt="group of people" class="w-[80%] h-auto mx-auto">
            </div>
  

              
            </div>
          </div>
          {{-- image layout --}}
      </div>
  </div>
    <!-- End Contact Us -->