@props(['listing'])

<li class="py-3 sm:py-4">
    <div class="flex items-center space-x-4">
        <div class="flex-shrink-0">
            <img class="w-8 h-8 rounded-full" src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('storage/no-image.png') }}"
                alt="image">
        </div>
        <div class="flex-1 min-w-0">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-700">
                {{ $listing->title }}
            </p>
            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                {{ $listing->email }}
            </p>
        </div>
        <div
            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            $320
        </div>
    </div>
</li>