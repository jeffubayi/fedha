<x-layout>



    <div class="relative overflow-x-auto rounded p-3">
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
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listing as $list)
                    <x-listing-table :list="$list" />
                @empty
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-900 text-lg">
                            <p class="text-center">No Listing Found</p>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        <div class="px-6">{{ $listing->links() }}</div>
    </div>

</x-layout>
