@extends('layouts.User.dashboard.dashboard')

@section('title')
  Recipes Collection
@endsection

@section('content')
<div class="w-full lg:w-[80%] mx-auto">
    <div class="w-full lg:w-[80%] mx-auto">
        <h1 class="text-3xl">Recipes Collection</h1>
        <div class="mt-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Filter by Category:</label>
            <select id="category" name="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" onchange="filterCards()">
                <option value="all">All</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl" data-category="breakfast">
            <img src="/cul3.avif" alt="loads of bread" class="w-full object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">Category: Breakfast</span>
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">How to make fresh french bread</span>
                <p class="mt-3 text-gray-500 dark:text-neutral-500">To make fresh French bread, combine flour, water, yeast, salt, and sugar to form dough. Knead until smooth, then let it rise for about an hour. Shape the dough into a loaf, score the top, and bake at 450°F (230°C) for 25-30 minutes until golden and crispy. Enjoy!</p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">Download Card</a>
            </div>
        </div>
        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl" data-category="lunch">
            <img src="/cul2.avif" alt="loads of bread" class="w-full object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">Category: Lunch</span>
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">How to make a healthy salad</span>
                <p class="mt-3 text-gray-500 dark:text-neutral-500">To make a healthy salad, combine fresh greens, tomatoes, cucumbers, and your choice of dressing. Toss and serve chilled.</p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">Download Card</a>
            </div>
        </div>
        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl" data-category="dinner">
            <img src="/cul4.avif" alt="loads of bread" class="w-full object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">Category: Dinner</span>
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">How to cook spaghetti</span>
                <p class="mt-3 text-gray-500 dark:text-neutral-500">To cook spaghetti, boil water, add salt, and cook the spaghetti until al dente. Serve with your favorite sauce.</p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">Download Card</a>
            </div>
        </div>
        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl" data-category="dessert">
            <img src="/cul5.avif" alt="loads of bread" class="w-full object-cover rounded-t-xl">
            <div class="p-4 md:p-6">
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">Category: Dessert</span>
                <span class="block mb-1 text-xs font-semibold uppercase text-rose-600">How to make chocolate cake</span>
                <p class="mt-3 text-gray-500 dark:text-neutral-500">To make chocolate cake, mix flour, sugar, cocoa powder, eggs, and butter. Bake at 350°F (175°C) for 30-35 minutes.</p>
            </div>
            <div class="mt-auto flex border-t border-gray-200">
                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">Download Card</a>
            </div>
        </div>
    </div>
    </div>
 
</div>
<script>
function filterCards() {
    const selectedCategory = document.getElementById('category').value;
    const cards = document.querySelectorAll('.grid > div');
    cards.forEach(card => {
        if (selectedCategory === 'all' || card.getAttribute('data-category') === selectedCategory) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
@endsection
