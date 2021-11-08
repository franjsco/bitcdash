<div class="bg-white border-b-4 border-purple-600 rounded-xl shadow-lg p-1">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5"><i class="fas fa-chart-bar fa-2x"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Sentiment</h5>
            
            <div class="flex-1 text-right md:text-center">
                <div class="relative pt-1">
                    <div class="flex mb-2 items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-black-600 bg-green-200">
                                {{$valueClassification}} - {{ $value }}
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-black-600">

                            </span>
                        </div>
                    </div>
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                        <div style="width: {{ $value }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-600"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>