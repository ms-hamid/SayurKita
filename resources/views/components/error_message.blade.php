{{-- Success/Error Messages --}}
@if(session('success'))
    <div class="mt-6 mb-4 p-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mt-6 mb-4 p-4 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
        {{ session('error') }}
    </div>
@endif