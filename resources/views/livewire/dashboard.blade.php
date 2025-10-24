<div class="bg-green-50">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="w-full flex justify-start items-start space-x-16">

        {{-- ASIDE for Nav --}}
        @include('components.aside')

        {{-- Main content --}}
        <main class="w-full py-6 pr-16">
            <h1 class="pb-10">Hello {{ auth()->user()->name }} 👋🏼</h1>
            <div class="bg-white py-1 w-full max-w-6xl mx-auto rounded-2xl">
                <div class=" my-4 flex flex-col md:flex-row justify-between items-center md:justify-start md:items-start gap-3">
                    {{-- first card --}}
                    <div class="w-full flex justify-start items-center gap-2 px-6 ">
                        {{-- round --}}
                        <div class="w-20 h-20 rounded-full bg-green-100 flex justify-center items-center"><i
                                class="fa fa-users text-green-600"></i> </div>
                        <div class="">
                            <h2 class="text-xs font-semibold text-gray-700">Total Employe</h2>
                            <p class="text-2xl font-bold">1549</p>
                        </div>
                    </div>

                    {{-- second card --}}
                    <div class="w-full flex justify-start items-center gap-2 px-6">
                        {{-- round --}}
                        <div class="w-20 h-20 rounded-full bg-green-100 flex justify-center items-center"><i
                                class="fa fa-user text-green-600"></i> </div>
                        <div class="">
                            <h2 class="text-xs font-semibold text-gray-700">Total Client</h2>
                            <p class="text-2xl font-bold">1549</p>
                        </div>
                    </div>

                    {{-- third card --}}
                    <div class="w-full flex justify-start items-center gap-2 px-6">
                        {{-- round --}}
                        <div class="w-20 h-20 rounded-full bg-green-100 flex justify-center items-center"><i
                                class="fa fa-users text-green-600"></i> </div>
                        <div class="">
                            <h2 class="text-xs font-semibold text-gray-700">Total Customers</h2>
                            <p class="text-2xl font-bold">1549</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
