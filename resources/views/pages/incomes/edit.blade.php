@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb">
            <div class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
            </div>
        </div>
        <div class="max-w-2xl mx-auto bg-white rounded-lg  p-16">
            <form action="{{ route('incomes.update') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <input type="hidden" name="income_id" value="{{ $income->id }}">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Description</label>
                    <input type="text" id="description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $income->income_title }}" name="income_title">
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="income_title" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Amount</label>
                        <input type="text" name="income_amount" id="company" value="{{ $income->income_amount }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('income_title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Date</label>
                        <input type="text" name="income_date" value="{{ date('Y-m-d') }}" id="title"
                            value="{{ $income->income_date }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="text-white  bg-blue-600    hover:bg-blue-500  focus:ring-4 focus:outline-none focus:ring-cyan-500  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>

                <a href="{{ route('incomes.index') }}"
                    class="text-blue-600  bg-white     border border-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-600  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Cancel</a>
            </form>
        </div>

    </div>
@endsection
