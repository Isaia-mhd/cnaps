@if (session('success'))
    <div class="w-full flex justify-center items-center rounded-md bg-green-100 py-2 mb-2">
        <span class="text-green-600 text-sm">{{ session('success') }}</span>
    </div>
@endif
