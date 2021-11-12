<div class="bg-white border-b-8 border-yellow-600 rounded-xl shadow-lg p-8">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-coins fa-2x fa-inverse"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold text-md uppercase text-gray-600">price</h5>
            <h3 class="font-bold text-4xl">{{$getSymbol()}} {{ number_format($price,2,',','.') }}</h3>
        </div>
    </div>
</div>