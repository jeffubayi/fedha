{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fedha - Finance Manager</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body id="page-top">
    @include('layouts.partials.header')
    <div id="wrapper">
            <!-- Sidebar -->
        @include('layouts.partials.sidebar')
        <div id="content-wrapper">
            @yield('content')
            @include('layouts.partials.calculator')
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            @include('layouts.partials.footer')
        </div>
        <!-- /.content-wrapper -->
    </div>
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/script.js') }}"></script>
    @stack('js')
</body>
</html> --}}
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
    <title>fedha | finance manager</title>
</head>

<body class="mb-4 bg-gray-100 dark:bg-grey-300">
    @auth
        <aside
            class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
            <div>
                <div class="-mx-6 px-6 py-4">
                    <a href="#" title="home">
                        <img src="https://fedha.co/wp-content/uploads/2021/01/Fedha_Logo_2-09.png" class="w-32"
                            alt="tailus logo">
                    </a>
                </div>

                <div class="mt-8 text-center">
                    <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt=""
                        class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                    <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">{{ auth()->user()->name }}
                    </h5>
                    <span class="hidden text-gray-400 lg:block">{{ auth()->user()->email }}</span>

                </div>
                @include('layouts.partials.sidebar')


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

            @include('layouts.partials.header')
            <main>
                @yield('content')
            </main>

        </div>

    @endauth
</body>

</html>
