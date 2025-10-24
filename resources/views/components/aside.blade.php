<aside class="bg-white w-56 min-h-screen flex flex-col justify-start items-start gap-3 py-6 px-4">
    <h1 class="text-xl font-semibold pb-6"><i class="fa-solid fa-house-chimney"></i> Dashboard </h1>

    <div class="w-full flex flex-col justify-start items-start gap-6">
        <a href="" wire:navigate
            class="w-full text-gray-500 text-sm py-2 rounded-md px-2 hover:bg-blue-900 hover:text-white transition duration-700 ease-in-out {{ Route::is('dashboard') ? 'bg-blue-900 text-white' : '' }}">
            <i class="fa-solid fa-table-columns"></i> Dashboard</a>
        <a href="" wire:navigate
            class="flex items-center justify-between w-full text-gray-500 text-sm py-2 rounded-md px-2 hover:bg-blue-900 hover:text-white transition duration-700 ease-in-out">
            <span><i class="fa-solid fa-users"></i> Employées</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="" wire:navigate
            class="flex items-center justify-between w-full text-gray-500 text-sm py-2 rounded-md px-2 hover:bg-blue-900 hover:text-white transition duration-700 ease-in-out">
            <span><i class="fa-solid fa-gear"></i> Parametres</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="" wire:navigate
            class="flex items-center justify-between w-full text-gray-500 text-sm py-2 rounded-md px-2 hover:bg-blue-900 hover:text-white transition duration-700 ease-in-out">
            <span><i class="fa-solid fa-circle-info"></i> Aide</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
        <button
            class="flex items-center justify-between w-full text-red-500 text-sm py-2 rounded-md px-2 hover:bg-red-50 hover:text-red-500 transition duration-700 ease-in-out cursor-pointer">
            <span><i class="fa-solid fa-sign-out"></i> Se deconnecter</span>
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</aside>
