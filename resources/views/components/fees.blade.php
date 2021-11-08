<div class="bg-white rounded-xl border-b-4 border-purple-600 shadow-lg p-2">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5"><i class="fas fa-hammer fa-2x"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Fastest Fee</h5>
            <h3 class="font-bold text-xl">{{ $fastestFee }}</h3>
        </div>

        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Half hour Fee</h5>
            <h3 class="font-bold text-xl">{{ $halfHourFee }}</h3>
        </div>

        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Hour Fee</h5>
            <h3 class="font-bold text-xl">{{ $hourFee }}</h3>
        </div>
    </div>
</div>