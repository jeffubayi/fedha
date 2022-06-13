@php
$mytime = Carbon\Carbon::now();
@endphp

@extends('layouts.master')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="px-6 pt-6 2xl:container">
        <p class="font-semibold text-md  text-gray-600">{{ $mytime->format('D M Y ') }}</p>
        <div
            class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5 grid gap-6 md:grid-cols-2 lg:grid-cols-4 mb-5">
            <!-- Start Card List -->
            <a href="{{ route('incomes.index') }}"
                class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                <div class="flex space-x-6 items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/893/893106.png"
                        class="w-auto h-12" />
                    <div>
                        <p class="font-semibold text-base">{{ number_format($incomes, 2) }}</p>
                        <p class="font-semibold text-xs text-gray-400">Total Income</p>
                    </div>
                </div>
            </a>


            <a href="{{ route('expense.index') }}"
                class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                <div class="flex space-x-6 items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2845/2845682.png" class="w-auto h-12" />
                    <div>
                        <p class="font-semibold text-base">{{ number_format($expenses, 2) }}</p>
                        <p class="font-semibold text-xs text-gray-400">Total Expense</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('summary') }}"
                class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                <div class="flex space-x-6 items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/994/994289.png"
                        class="w-auto h-12" />
                    <div>
                        <p class="font-semibold text-base"> {{ number_format($balance, 2) }}</p>
                        <p class="font-semibold text-xs text-gray-400">Total Balance</p>
                    </div>
                </div>

            </a>
            <a href="{{ route('notes.index') }}"
                class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                <div class="flex space-x-6 items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/889/889648.png" class="w-auto h-12" />
                    <div>
                        <p class="font-semibold text-base">{{ $notes }}</p>
                        <p class="font-semibold text-xs text-gray-400">Total Notes</p>
                    </div>
                </div>

                <div class="flex space-x-2 items-center">
                    <div class="bg-yellow-200 rounded-md p-2 flex items-center">
                        <p class="text-yellow-600 font-semibold text-xs">new</p>
                    </div>
                </div>
            </a>

            <!-- End Card List -->
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div class="md:col-span-2 lg:col-span-1">

                <div class="p-4 max-w-md bg-white rounded-lg shadow-xl border shadow-mdp sm:p-8 dark:bg-white  dark:border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h5 class="text-md font-bold leading-none text-gray-900 dark:text-gray-700">Latest transactions
                        </h5>
                        <a href="{{ route('summary') }}" class="text-sm font-medium text-blue-600 hover:underline ">
                            View all
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-200">
                            @foreach ($latests as $latest)
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://cdn-icons-png.flaticon.com/512/2761/2761118.png" alt="image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-700">
                                                {{ $latest->expense_amount }}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {{ $latest->expense_title }}
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $320
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
            <!-- Start student Card -->
            <div>
                <div class="h-full py-6 px-6 rounded-xl border shadow-xl bg-white">
                    <h5 class="text-md font-bold leading-none text-gray-700 ">Transaction overview</h5>
                    <div class="my-8">
                        <h1 class="text-3xl font-bold text-gray-800">64,5%</h1>
                        <span class="text-gray-500">Transactions for the month of {{ $mytime->format('M  ') }}</span>
                    </div>
                    <svg class="w-full" viewBox="0 0 218 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 67.5C27.8998 67.5 24.6002 15 52.5 15C80.3998 15 77.1002 29 105 29C132.9 29 128.6 52 156.5 52C184.4 52 189.127 63.8158 217.027 63.8158"
                            stroke="url(#paint0_linear_622:13664)" stroke-width="3" stroke-linecap="round" />
                        <path
                            d="M0 67.5C27.2601 67.5 30.7399 31 58 31C85.2601 31 80.7399 2 108 2C135.26 2 134.74 43 162 43C189.26 43 190.74 63.665 218 63.665"
                            stroke="url(#paint1_linear_622:13664)" stroke-width="3" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_622:13664" x1="217.027" y1="15" x2="7.91244" y2="15"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4dffbe" />
                                <stop offset="1" stop-color="#4DA1FF" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_622:13664" x1="218" y1="18.3748" x2="5.4362" y2="18.9795"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E323FF" />
                                <stop offset="1" stop-color="#7517F8" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <table class="mt-6 -mb-2 w-full text-gray-600">
                        <tbody>
                            <tr>
                                <td class="py-2">Income</td>
                                <td class="text-gray-500">{{ number_format($incomes, 2) }}</td>
                                <td >
                                <span class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900">{{$incomeCount}} %</span>
                            </td>
                          
                            </tr>
                            <tr>
                                <td class="py-2">Expense</td>
                                <td class="text-gray-500">{{ number_format($expenses, 2) }}</td>
                                <td >
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{$expenseCount}} %</span>
                            </td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>

                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xxl:col-span-4 px-4 ">
                    <!-- Start wallet Card -->


                    <div class="p-4 max-w-sm bg-white rounded-lg border shadow-md sm:p-6 ">
                        <h5 class="mb-3 text-base font-bold text-gray-700 lg:text-md">
                            Trending categories
                        </h5>
                        <ul class="my-4 space-y-3">
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-100 group hover:shadow  ">
                                    
                                    <img src="https://cdn-icons.flaticon.com/png/512/3195/premium/3195510.png?token=exp=1654959765~hmac=03b51ef555ca29ece76ac3907e8a4352"
                                        class=" h-6 " />
                                    <span class="flex-1 ml-3 whitespace-nowrap text-sm">Miscellaneous</span>
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded ">Popular</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-100 group hover:shadow ">
                                    <img src="https://cdn-icons-png.flaticon.com/512/706/706164.png"
                                        class=" h-6 " />
                                    <span class="flex-1 ml-3 whitespace-nowrap text-sm">Food</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-100 group hover:shadow ">
                                    <img src="https://cdn-icons-png.flaticon.com/512/951/951764.png"
                                        class=" h-6 " />
                                    <span class="flex-1 ml-3 whitespace-nowrap text-sm ">Bills</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-100 group hover:shadow ">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4334/4334564.png"
                                        class=" h-6 " />
                                    <span class="flex-1 ml-3 whitespace-nowrap text-sm">Earning</span>
                                </a>
                            </li>



                    </div>

                    <!-- End profile Card -->
                    <!-- Start Card List -->
                    <div class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                        <div class="flex space-x-6 items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1239/1239682.png" class=" h-24 " />
                            <div>
                                <p class="font-semibold text-base">Connect </p>
                                <p class="font-semibold text-xs text-gray-400">Invite collegues to your workspace</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('dashboard/vendor/chart/chart.min.js') }}"></script>
    <script>
        //Income expense Pie Chart
        var ctx = document.getElementById("incomeExpenseChart");
        var income = $(".incomeValue").html();
        var expense = $(".expenseValue").html();
        var incomeExpenseChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Income", "Expense"],
                datasets: [{
                    data: [income, expense],
                    backgroundColor: ['#007bff', '#dc3545'],
                }],
            },
        });
    </script>
@endpush
