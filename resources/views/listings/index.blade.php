<x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-2 space-y-4 md:space-y-0 mx-5 mt-1">
        <a href="/listing/create" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
            <button
                class="flex rounded-md bg-gradient-to-r from-sky-600 to-cyan-400 py-2 px-4 text-white transition-all duration-150 ease-in-out hover:bg-blue-600">
                <svg class=" fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
            </button>
        </a>
    </div>

    <div class="relative overflow-x-auto rounded p-3 mx-5">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-800 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Company
                    </th>
                    <th scope="col" class="px-6 py-3">
                    
                    </th>
                    <th scope="col" class="px-6 py-3">
                   
                    </th>
                    <th scope="col" class="px-6 py-3">
                   
                    </th>
                </tr>
            </thead>
            <tbody>
                @unless($listing->isEmpty())
                @foreach ($listing as $list)
                    <x-listing-card :list="$list" />
                    @endforeach
                    @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-900 text-lg">
                            <p class="text-center">No Listing Found</p>
                        </td>
                    </tr>
                 @endunless

            </tbody>
        </table>

        <div class="px-6 mt-2">{{ $listing->links() }}</div>
    </div>

</x-layout>
