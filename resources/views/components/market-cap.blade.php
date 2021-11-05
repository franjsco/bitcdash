<div class="bg-white rounded-lg shadow-lg p-2">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5"><i class="fas fa-poll fa-2x"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Market Cap</h5>
            <h3 class="font-bold text-xl">€ {{ number_format($marketCap, 2, ',', '.') }}</h3>
        </div>
    </div>
</div>