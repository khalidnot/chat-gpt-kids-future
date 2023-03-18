<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="h1">Hello world</div>
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ old('name', '') }}" />
                    @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </body>
</html>
