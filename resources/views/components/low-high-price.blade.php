<div class="bg-white border-b-4 border-purple-600 rounded-xl shadow-lg p-2">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5"><i class="fas fa-history fa-2x"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">low 24h</h5>
            <h3 class="font-bold text-xl">{{$getSymbol()}} {{ number_format($low24h, 2, ',', '.')  }}</h3>
        </div>

        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">high 24h</h5>
            <h3 class="font-bold text-xl">{{$getSymbol()}} {{ number_format($high24h, 2, ',', '.')  }}</h3>
        </div>
    </div>
</div>#60eacd