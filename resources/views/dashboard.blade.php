<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container flex flex-col justify-center items-center mx-auto my-8 py-10">
                <div style="background-image: url({{url('/images/background.jpg')}})"
                     class="max-w-7xl bg-gray-300 h-96 w-full rounded-lg shadow-md bg-cover bg-center">
                </div>

                <!-- Card -->
                <div class="bg-black bg-opacity-25 -mt-60 shadow-md rounded-lg overflow-hidden">
                    <h1 class="text-5xl font-bold text-white pt-2 px-3">Welcome {{auth()->user()->name}}!</h1>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
