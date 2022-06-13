@extends('layouts.master')

@section('content')
<div class="container-fluid px-8">
    <div class=" py-3 flex justify-between ">
        @include('layouts.partials.alert')
        <a href="{{ route('notes.create') }}">
            <button type="submit"
                class="w-full text-white bg-blue-600  hover:bg-iamber-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add
                New Notes</button>
        </a>
    </div>

        <div
            class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5 grid gap-6 md:grid-cols-2 lg:grid-cols-4 mb-5">
            @foreach ($notes as $note)
              

                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md ">
                    <div class="flex justify-end px-4 pt-6">
                        
                    </div>
                    <div class="flex flex-col items-center pb-10">

                        <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $note->note_title }}</h5>
                        <span class="text-sm text-gray-500">{{ $note->note_amount }}</span>
                        <div class="flex mt-4 space-x-3 lg:mt-6">
                            <a href="{{ route('notes.edit', $note->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-blue-600  bg-white     border border-blue-700 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Edit</a>
                            <a href="{{ route('notes.delete', $note->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-red-500 bg-white rounded-lg border border-red-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 ">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xl-12 col-sm-12">
                {{ $notes->links() }}
            </div>
        </div>
    @endsection
