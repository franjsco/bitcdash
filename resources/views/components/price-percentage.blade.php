<div class="bg-white border-b-8 border-yellow-600 rounded-lg shadow-lg p-8">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-percent fa-2x fa-inverse"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">24h</h5>
            <h3 class="font-bold text-red-600 text-xl">{{ $priceChangePercentage24h }}%</h3>
        </div>

        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">7d</h5>
            <h3 class="font-bold text-green-600 text-xl">{{ $priceChangePercentage7d }}%</h3>
        </div>


        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">14d</h5>
            <h3 class="font-bold text-red-600 text-xl">{{ $priceChangePercentage14d }}%</h3>
        </div>

        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">30d</h5>
            <h3 class="font-bold text-green-600 text-xl">{{ $priceChangePercentage30d }}%</h3>
        </div>


        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">60d</h5>
            <h3 class="font-bold text-green-600 text-xl">{{ $priceChangePercentage60d }}%</h3>
        </div>


        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">1y</h5>
            <h3 class="font-bold text-green-600 text-xl">{{ $priceChangePercentage1y}}%</h3>
        </div>
    </div>
</div>