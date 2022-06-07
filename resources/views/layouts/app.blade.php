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
    <title>Fedha | Sign up</title>
</head>
<style>
    .login_img_section {
        background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)), url(https://images.unsplash.com/photo-1634733988138-bf2c3a2a13fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZXhwZW5zZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60) center center;
    }
</style>

<body class="mb-4 bg-gray-100">
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
            justify-around items-center">
            <div
                class=" 
                    bg-black 
                    opacity-20 
                    inset-0 
                    z-0">

            </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">Fedha</h1>
                <p class="text-white mt-1">The simplest finance management app</p>
                <p class="text-white mx-2">View expense summery</p>
                <p class="text-white mx-2">Calculate transactions</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a href="/login"
                        class="hover:bg-blue-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-blue-700 mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Request
                        Demo</a>
                </div>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
          
            <main class="py-4">
                <div class="text-center">
                    <img class="mx-auto w-48" src="https://fedha.co/wp-content/uploads/2021/01/Fedha_Logo_2-09.png"
                        alt="logo" />
                </div>
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
