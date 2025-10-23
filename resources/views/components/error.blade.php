@if (session('error'))
    <div class="w-full flex justify-center items-center rounded-md bg-red-100 py-2 mb-2">
        <span class="text-red-600 text-sm">{{ session('error') }}</span>
    </div>
@endif
