@props(['list'])


<tr class="bg-white border-b ">
    <td class="px-6 py-4">
        {{ $list->id }}
    </td>
    <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
        {{ $list->title }}
    </th>

    <td class="px-6 py-4">
        {{ $list->company }}
    </td>
    {{-- <td class="p-2 ">
        <a href="/listing/{{ $list->id }}" class="flex justify-center text-gray-400">
            <button>
                <i class="fa-solid fa-show "></i>
            </button>
        </a>
    </td> --}}
    <td class="p-2 ">
        <a href="/listing/{{ $list->id }}/edit" class="flex justify-center text-gray-400">
            <button>
                <i class="fa-solid fa-pen-to-square "></i>
            </button>
        </a>
    </td>
    <td class="p-2">
        <form method="POST" action="/listing/{{ $list->id }}" class="flex justify-center text-gray-400">
            @csrf
            @method('DELETE')
            <button>
                <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-gray-100 p-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
            </button>
        </form>
    </td>
</tr>
