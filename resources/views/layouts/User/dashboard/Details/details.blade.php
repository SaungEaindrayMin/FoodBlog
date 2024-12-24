@extends('layouts.User.dashboard.dashboard')
@section('title')
    Recipes Details
@endsection

@section('content')

<div class="grid justify-center w-full space-y-8 ">

    {{-- image section  --}}
    <div class="border-b border-gray-200 py-4">
        <figure class="rounded-lg overflow-hidden">
            <img src="https://plus.unsplash.com/premium_photo-1700838996810-eb6c0101902b?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </figure>

        <div class="w-5/6 mx-auto mt-8 flex justify-between items-cente">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                  
                <span class="font-semibold text-sm text-gray-600">Published in Magic of flavour</span>
            </div>

            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                  </svg>                  
                <span class="font-semibold text-sm text-gray-600">12 min read</span>
                  
            </div>
        </div>
    </div>
    {{-- image section  --}}


    {{-- content section  --}}
    <div class="grid gap-8">
        <h1 class="text-3xl font-bold tracking-wide">Delicious Food !</h1>

        <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel voluptas sit eligendi nesciunt nihil quod laborum rem quas dicta aspernatur incidunt magnam, sed beatae nemo ad cupiditate molestias laboriosam debitis totam et maxime, soluta atque? Debitis molestiae perferendis voluptates maxime ut? Culpa odio quidem at ea beatae quos vero nisi!</p>

        <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quas est ut explicabo quisquam iure, molestias molestiae quibusdam laboriosam reprehenderit. Voluptatum tempora ut adipisci deleniti nesciunt ratione at voluptates corrupti non, dolorum dolor voluptas eveniet, optio sequi ullam accusantium neque quasi error rem porro iure, aliquam commodi illo culpa. Quidem!</p>

        <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptate maiores tenetur eaque quam nulla illo, culpa id alias debitis laborum. Magni minima sint quod adipisci quasi iste ut eaque aliquid. Doloribus quod illum, tempora cum officia adipisci, dolore iure quas nihil itaque assumenda. Accusantium quae quia culpa tenetur dolor?</p>

        <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptate maiores tenetur eaque quam nulla illo, culpa id alias debitis laborum. Magni minima sint quod adipisci quasi iste ut eaque aliquid. Doloribus quod illum, tempora cum officia adipisci, dolore iure quas nihil itaque assumenda. Accusantium quae quia culpa tenetur dolor?</p>

        <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptate maiores tenetur eaque quam nulla illo, culpa id alias debitis laborum. Magni minima sint quod adipisci quasi iste ut eaque aliquid. Doloribus quod illum, tempora cum officia adipisci, dolore iure quas nihil itaque assumenda. Accusantium quae quia culpa tenetur dolor?</p>



    </div>
    {{-- content section  --}}


    {{-- download section --}}
    <button class="mb-[7%] flex items-start">
        <a href="" class="btn btn-md bg-yellow-300 hover:bg-yellow-200 border-0">Download PDF</a>
    </button>
    {{-- download section  --}}


</div>
    
@endsection