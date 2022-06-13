@extends('layouts.master')

@section('content')
    <div class="container-fluid px-8">

        <div class=" py-3 flex justify-between ">
            @include('layouts.partials.alert')
            <a href="{{ route('expense.create') }}">
                <button type="submit"
                    class="w-full text-white bg-blue-600  hover:bg-iamber-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add
                    New Expense</button>
            </a>
        </div>

        <div class="relative overflow-x-auto shadow-md  sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Amount
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                @foreach ($expenses as $expense)
                    <tbody>
                        <tr class="bg-white border-b ">
                            <td class="px-6 py-4">
                                {{ $expense->id }}
                            </td>

                            <td class="px-6 py-4 font-medium ">
                                {{ $expense->expense_title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $expense->expense_amount }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $expense->expense_date }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('expenses.edit', $expense->id) }}"
                                    class="font-medium text-blue-600 ">Edit</a>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
                <td class="px-6 py-4 font-bold justify-items-end ">
                    Total
                    <span class="ml-1 font-medium"> {{ $totalExpenses }}</span>
                </td>
            </table>
            <div class="col-xl-12 col-sm-12">
                {{ $expenses->links() }}
            </div>
        </div>
    </div>
@endsection
