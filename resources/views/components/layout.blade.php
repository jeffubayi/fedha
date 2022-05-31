<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },
        }
    </script>
    <title>Tailus | school management</title>
</head>

<body class="mb-4 bg-gray-100 dark:bg-grey-300">
    @auth
        <aside
            class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
            <div>
                <div class="-mx-6 px-6 py-4">
                    <a href="#" title="home">
                        <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg"
                            class="w-32" alt="tailus logo">
                    </a>
                </div>

                <div class="mt-8 text-center">
                    <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt=""
                        class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                    <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">{{ auth()->user()->name }}
                    </h5>
                    <span class="hidden text-gray-400 lg:block">{{ auth()->user()->email }}</span>

                </div>

                <ul class="space-y-2 tracking-wide mt-8">
                    <li>
                        <a href="/" aria-label="dashboard"
                            class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                    class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                    class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                    class="fill-current group-hover:text-sky-300"></path>
                            </svg>
                            <span class="-mr-1 font-medium">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="/dashboard" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                    clip-rule="evenodd" />
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                    d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg>
                            <span class="group-hover:text-gray-700">Students</span>
                        </a>
                    </li>
                    {{-- <li>
            <a href="/" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
            </svg>
                <span class="group-hover:text-gray-700">Staff</span>
            </a>
        </li>
        
            <li>
                <a href="/" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                    </svg>
                    <span class="group-hover:text-gray-700">Subject</span>
                </a>
            </li> --}}
                    <li>
                        <a href="/listing/manage"
                            class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd" />
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                    d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg>
                            <span class="group-hover:text-gray-700">Manage</span>
                        </a>
                    </li>
                </ul>
            </div>

            <form class="px-6 -mx-6 pt-4 flex justify-between items-center border-t" method="POST" action="/logout">
                @csrf
                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>

                    <span class="group-hover:text-gray-700">Logout</span>


                </button>
            </form>
        </aside>
        <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">

            <div class="sticky z-10 top-0 h-16 border-b bg-white lg:py-2.5">
                <div class="px-6 flex items-center justify-between space-x-4 2xl:container">
                    <h5 hidden class="text-2xl text-gray-600 font-medium lg:block">Dashboard</h5>
                    <button class="w-12 h-16 -mr-2 border-r lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="flex space-x-4">
                        <!--search bar -->
                        <div hidden class="md:block">
                            <form action="/" class="relative flex items-center text-gray-400 focus-within:text-cyan-400">
                                <button type="submit"
                                    class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                                    <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current"
                                        viewBox="0 0 35.997 36.004">
                                        <path id="Icon_awesome-search" data-name="search"
                                            d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
                                        </path>
                                    </svg>
                                </button>
                                <input type="search" name="tag" id="leadingIcon" placeholder="Search here"
                                    class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 focus:border-cyan-300 transition">
                            </form>
                        </div>

                        <!--/search bar -->
                        <button aria-label="search"
                            class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200 md:hidden">
                            <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 mx-auto fill-current text-gray-600"
                                viewBox="0 0 35.997 36.004">
                                <path id="Icon_awesome-search" data-name="search"
                                    d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
                                </path>
                            </svg>
                        </button>

                        <button aria-label="chat"
                            class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
                            <a href="/register">
                                <svg version="1.1" class="h-5 w-5 m-auto text-gray-600" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                    y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M499.029,184.32h-51.14c-1.638-5.461-3.428-9.059-5.363-13.319l36.024-36.195c5.329-5.33,5.332-14.056,0.005-19.389
                                           L396.586,33.31c-2.561-2.564-6.036-4.025-9.661-4.025c-3.624,0-7.098,1.431-9.66,3.995l-36.177,35.874
                                           c-4.29-1.969-7.946-3.798-13.408-5.467V12.971C327.68,5.431,322.25,0,314.709,0H198.656c-7.541,0-14.336,5.431-14.336,12.971
                                           V63.17c-4.096,1.694-8.77,3.555-13.222,5.576l-35.363-35.489c-5.33-5.325-13.883-5.323-19.214,0.003l-82.066,82.065
                                           c-5.333,5.33-5.314,13.974,0.016,19.309l35.317,35.671c-2.06,4.488-3.947,8.555-5.676,14.017H14.336
                                           C6.795,184.32,0,189.751,0,197.291v116.053c0,7.539,6.795,14.336,14.336,14.336h49.776c1.726,4.096,3.622,8.835,5.677,13.317
                                           L34.45,376.166c-2.561,2.561-4,5.95-3.999,9.574c0.001,3.624,1.442,7.053,4.005,9.613l82.153,82.039
                                           c5.33,5.325,13.967,5.315,19.296-0.011l35.186-35.486c4.452,2.019,9.131,3.876,13.227,5.572v50.198
                                           c0,7.539,6.795,14.336,14.336,14.336h116.053c7.541,0,12.971-6.797,12.971-14.336v-50.717c5.461-1.67,9.122-3.514,13.413-5.485
                                           l36.001,36.195c2.56,2.564,6.205,4.305,9.829,4.305c0.001,0,0.001,0,0.003,0c3.622,0,7.096-1.739,9.657-4.301l82.016-82.189
                                           c2.56-2.561,3.998-6.119,3.996-9.742c-0.001-3.622-1.44-7.137-4.002-9.697l-36.058-35.714c1.931-4.253,3.718-8.544,5.355-12.64
                                           h51.141c7.541,0,12.971-6.797,12.971-14.336V197.291C512,189.751,506.57,184.32,499.029,184.32z M484.693,300.373h-46.525
                                           c-5.945,0-11.207,3.506-13.01,9.172c-2.986,9.384-6.78,18.396-11.278,27.124c-2.721,5.278-1.716,11.627,2.485,15.826
                                           l33.266,33.202l-62.703,62.717l-33.067-33.12c-4.213-4.219-10.68-5.22-15.968-2.467c-8.765,4.567-18.317,8.415-27.715,11.446
                                           c-5.64,1.819-9.804,7.066-9.804,12.992v47.429h-88.747v-46.987c0-5.964-3.529-11.238-9.22-13.025
                                           c-9.572-3.008-18.773-6.857-27.684-11.446c-5.274-2.713-11.613-1.714-15.812,2.479l-32.696,32.696l-62.819-62.768l32.582-32.57
                                           c4.213-4.213,5.213-10.671,2.463-15.958c-4.65-8.936-8.552-17.987-11.603-27.57c-1.804-5.665-7.063-9.172-13.008-9.172H27.307
                                           v-88.747h46.525c5.945,0,11.207-4.187,13.01-9.854c3.053-9.591,6.959-19.157,11.612-28.097c2.75-5.282,1.757-11.825-2.453-16.039
                                           l-32.543-32.607l62.804-62.79l32.741,32.687c4.197,4.192,10.621,5.19,15.895,2.475c8.921-4.59,17.949-8.443,27.509-11.446
                                           c5.689-1.787,9.22-7.064,9.22-13.028V27.307h88.747V73.37c0,5.927,4.164,11.177,9.806,12.995
                                           c9.398,3.03,18.776,6.88,27.536,11.444c5.291,2.757,11.839,1.761,16.055-2.46l33.113-33.112l62.688,62.738l-33.227,33.239
                                           c-4.198,4.2-5.196,10.63-2.475,15.909c4.5,8.733,8.3,18.261,11.287,27.648c1.802,5.665,7.068,9.855,13.013,9.855h46.524V300.373z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256,114.005c-77.92,0-141.312,63.392-141.312,141.312S178.08,396.629,256,396.629s141.312-63.392,141.312-141.312
                                           S333.92,114.005,256,114.005z M256,369.323c-62.863,0-114.005-51.143-114.005-114.005S193.137,141.312,256,141.312
                                           s114.005,51.143,114.005,114.005S318.863,369.323,256,369.323z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256,178.859c-42.159,0-76.459,34.299-76.459,76.459c0,42.16,34.3,76.459,76.459,76.459s76.459-34.299,76.459-76.459
                                           C332.459,213.157,298.159,178.859,256,178.859z M256,304.469c-27.103,0-49.152-22.049-49.152-49.152s22.049-49.152,49.152-49.152
                                           s49.152,22.049,49.152,49.152S283.103,304.469,256,304.469z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <main>
                {{ $slot }}
            </main>
        </div>
  
    <x-flash-message />
    @endauth
</body>

</html>
