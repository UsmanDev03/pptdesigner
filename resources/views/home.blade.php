<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " />
</head>
<body>
    <header class="relative shadow-sm font-poppins dark:bg-green-200">
        <div class="max-w-6xl px-4 mx-auto behind-header" x-data="{open:false}">
            <nav class="flex items-center justify-between py-4">
                <div class="flex justify-between lg:space-x-9">
                    <div class="">
                        <img src="{{ asset('imgs/logo.png') }}" alt="logo" class="w-32 cursor-pointer">
                        <button class="flex items-center px-3 py-2 text-gray-200 border border-gray-500 rounded dark:text-gray-700 hover:text-gray-400 hover:border-gray-400 lg:hidden"
                        @click="open =true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    </div>
                    <ul class="hidden lg:w-auto lg:space-x-9 lg:items-center lg:flex ">
                        <li><a href="about.html" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">ABOUT</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">TEAM</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">SERVICES</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">SAMPLES</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">SECTORS</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">CASES</a>
                        </li>
                        <li><a href="" class="text-sm text-gray-600 dark:text-gray-700 hover:text-gray-300 dark:hover:text-gray-400 font-semibold">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-900 opacity-25 dark:bg-gray-400 lg:hidden"
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            </div>
            <div class="absolute inset-0 z-40 h-screen p-3 text-gray-700 duration-500 transform bg-blue-50 dark:bg-green-200 w-80 lg:hidden lg:transform-none lg:relative"
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                <div class="flex justify-between px-5 py-2">
                    <img src="{{ asset('imgs/logo.png') }}" alt="logo" class="w-32 cursor-pointer">
                    <button class="p-2 text-gray-700 rounded-md dark:text-gray-700 hover:text-gray-400 lg:hidden "
                        @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <ul class="px-4 text-left mt-7">
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">ABOUT</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">TEAM</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">SERVICES</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">SAMPLES</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">SECTORS</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">CASES</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-gray-400 dark:text-gray-700 font-semibold">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="py-20 dark:bg-green-200 relative overflow-hidden">
        <div class="max-w-6xl px-4 mx-auto md:px-0 font-poppins">
            <div class="flex flex-wrap items-center px-4">
                <div class="w-full px-4 mb-16 md:w-1/2 md:mb-0">
                    <h2
                        class="mb-6 text-3xl font-semibold leading-tight tracking-tight text-gray-900 dark:text-gray-700 md:text-5xl lg:text-6xl">
                        We Value <br> <span class="text-blue-500 font-extrabold">Your</span> <span class="text-green-500 font-extrabold">Success</span>
                    </h2>
                    <p class="mb-6 font-normal text-gray-600 dark:text-gray-700 md:text-lg">
                        Success is most important part of life and it is determination of having achieved and accomplished aim with lots of failure enthusiam.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-3 text-gray-100 bg-gradient-to-r from-cyan-500 to-green-500 rounded-md sh adow hover:text-gray-100 hover:bg-blue-500 font-bold">SCHEDULE A CONSULTATION</a>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <div class="relative mx-auto md:mr-0 max-w-max">
                        <div class="relative overflow-hidden translate-x-80 -translate-y-32">
                            <img src="{{ asset('imgs/full-image.png') }}" alt=""
                                class="relative w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</body>
</html>