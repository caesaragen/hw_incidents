<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Human Wildlife Incidents') }} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
        }

    </style>
</head>

{{-- <body class="antialiased">
    <div class="relative h-screen bg-cover bg-center flex items-center justify-center"
        style="background-image: url(/elephants.jpg); sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed flex w-full  justify-between sm:top-0 sm:left-0 p-6 text-right z-10">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </div>
       
            <div class="sm:fixed flex w-full items-center justify-between sm:top-0 sm:right-0 p-6 text-right z-10">
                <div class="flex items-center justify-between">
                    
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
    
                </div>

            </div>
        @endif
        <div class="relative flex items-top justify-center min-h-screen  sm:items-center sm:pt-0">
            <div class="mx-auto w-full ">

                <div class="flex flex-col items-center justify-center">
                    <h1 class="mt-12 text-5xl font-extrabold text-gray-900 dark:text-white">
                      Human Wildlife Conflict Incidence Report
                    </h1>
                  </div>
                  
            </div>
        </div>

    </div>
</body> --}}
<body class="antialiased">
    <div class="relative h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url(/elephants.jpg);">
        <div class="w-full h-full flex  justify-center items-center bg-[#667618]/10 backdrop-brightness-75">
      @if (Route::has('login'))
        <div class="absolute top-0 left-0 right-0 flex items-center justify-between p-6 z-10">
          
          <!-- Logo on the left -->
          <div>
            <x-application-logo class="block h-16 w-auto fill-current text-gray-800 dark:text-gray-200" />
          </div>
          
          <!-- Links on the right -->
          <div class="flex items-center">
            @auth
              <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
              
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
              @endif
            @endauth
          </div>
        </div>
      @endif
  
      <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="mx-auto w-full p-10 rounded-lg shadow-lg">
      
          <div class="flex flex-col items-center justify-center">
            <h1 class="mt-12 text-5xl font-extrabold text-gray-900 dark:text-white">
              Human - Wildlife Conflict Incidence Report
            </h1>
          </div>
      
        </div>
      </div>
        </div>
    </div>
  </body>
  {{-- <body class="antialiased">
    <div class="relative h-screen flex">
        @if (Route::has('login'))
        <div class="absolute top-0 left-0 right-0 flex items-center justify-between p-6 z-10">
          
          <!-- Logo on the left -->
          <div>
            <x-application-logo class="block h-16 w-auto fill-current text-gray-800 dark:text-gray-200" />
          </div>
          
          <!-- Links on the right -->
          <div class="flex items-center">
            @auth
              <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
              
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-200 hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
              @endif
            @endauth
          </div>
        </div>
      @endif
      <!-- Left half with the image -->
      <div class="w-1/2 bg-cover bg-center" style="background-image: url(/elephants.jpg);"></div>
  
      <!-- Right half with the heading -->
      <div class="w-1/2 bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
        <div class="text-center">
          <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white">
            Human Wildlife Conflict Incidence Report
          </h1>
        </div>
      </div>
    </div>
  </body> --}}
  
</html>
