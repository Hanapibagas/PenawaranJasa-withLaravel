<a href="{{ route('details-landing', 1) }}" class="block">
    <div class="w-auto h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
        <div class="flex items-center space-x-2 mb-6">
            <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                src="{{ url('https://randomuser.me/api/portraits/men/1.jpg') }}" alt="random user" />
            <div>
                <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                <p class="text-serv-text font-light text-md">
                    Website Developer
                </p>
            </div>
        </div>
        <img class="rounded-2xl w-full" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />
        <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
            I Will Design WordPress eCommerce
            Modules
        </h1>

        <div class="max-w-full">
            @include('components.Landing.rating')
        </div>

        <div class="text-center mt-5 flex justify-between w-full">
            <span class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                Price starts from:
            </span>
            <span class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                Rp 120.000
            </span>
        </div>
    </div>
</a>
