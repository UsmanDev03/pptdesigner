<section class="nav-with-hero-section bg-cover" style="background-image: url('imgs/nav section image.jpg');">
    <header>
        <nav class="container relative flex p-2">
            <div>
                <img src="{{ asset('imgs/PPTDesigner logo-01.png') }}" alt="" class="w-48 lg:ml-5 ml-5 cursor-pointer pt-2">
            </div>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-orange-400 bg-black rounded p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <div class="ml-auto ">
                <ul class="hidden absolute top-1/2 right-0 mr-5 transform -translate-y-1/2 lg:flex lg:items-center lg:space-x-16 lg:w-auto lg:mr-0 md:mr-0">
                    <li><a class="text-base text-orange-400 hover:text-orange-300" href="/">Home</a></li>
                    <li><a class="text-base text-white hover:text-orange-300" href="#">About</a></li>

                    <li class="dropdown"><a class="text-base text-white hover:text-orange-300 dropdown" href="#">Services</a>
                        <div class="dropdown-content">
                            <a href="{{route('/sales-presentation')}}">Sales Presentation</a>
                            <a href="{{route('/design-presentation')}}">Design Presentation </a>
                            <a href="{{route('/business-presentation')}}">Business Presentation</a>
                            </div>
                    </li>
                    <li><a class="text-base text-white hover:text-orange-300" href="#">Examples</a></li>
                    <li><a class="text-base text-white hover:text-orange-300" href="#">FAQ</a></li>
                    <li><a class="text-base text-white hover:text-orange-300" href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-black border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <img src="{{ asset('imgs/PPTDesigner logo-01.png') }}" alt="" class="w-36 cursor-pointer">
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-orange-400 hover:text-orange-300" href="/">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:text-orange-300" href="#">About Us</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:text-orange-300" href="#">Services</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:text-orange-300" href="#">Pricing</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:text-orange-300" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Section Hero -->
        <!-- Box left -->
        <div class="container flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
            <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">
                <div class="max-w-lg md:mx-12 md:order-2">
                    <h1 class="lg:text-8xl font-bold tracking-wide bg-gradient-to-r from-pink-600 via-red-500 to-orange-600 inline-block text-transparent bg-clip-text md:text-8xl">Welcome!</h1>
                    <p class="text-2xl font-semibold pt-2 text-white">You Are Invited to the Best <span class="text-orange-600">Powerpoint</span> <br>Presentation Services <span class="text-orange-600">Dubai</span></p>
                    <p class="text-lg pt-6 pb-7 font-medium text-white">Avail the phenomenal presentation design services for <br>eye-catching PowerPoint designs to capture the attention of your audience.</p>
                    <div class="mt-6">
                        <button class="bg-gradient-to-r from-pink-600 via-red-500 to-orange-600 text-white rounded-full size-12 w-52 text-lg"> Request A Quote</button>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center w-full h-96 md:w-1/2">
                <img class=" sm:h-10  object-cover lgmax-w-2xl rounded-md" src="{{ asset('imgs/Laptop.png') }}" alt="apple watch photo" style="height: 55%">
            </div>
            <div class="flex justify-center order-2 mt-6 md:mt-0 md:space-y-3 md:flex-col">
                <button class="w-3 h-3 mx-2 bg-orange-500 rounded-full md:mx-0 focus:outline-none"></button>
                <button class="w-3 h-3 mx-2 bg-orange-500 rounded-full md:mx-0 focus:outline-none hover:orange-400"></button>
                <button class="w-3 h-3 mx-2 rounded-full  border-separate border border-pink-500 md:mx-0 focus:outline-none hover:bg-orange-400"></button>
                <button class="w-3 h-3 mx-2 bg-pink-500 rounded-full md:mx-0 focus:outline-none hover:bg-pink-400"></button>
            </div>
        </div>
    </header>
</section>
