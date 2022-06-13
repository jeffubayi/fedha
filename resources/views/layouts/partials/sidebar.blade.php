<ul class="space-y-2 tracking-wide mt-8">
    <li class="rounded-xl {{ Route::currentRouteName() == 'index' ? 'bg-blue-600' : '' }}">
        <a href="{{ route('index') }}"
            class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'index' ? 'text-white ' : ' text-gray-600' }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
        </a>
    </li>

    <ul class="space-y-2 tracking-wide mt-8">
        <li class="rounded-xl {{ Route::currentRouteName() == 'incomes.index' ? 'bg-blue-600' : '' }}">
            <a href="{{ route('incomes.index') }}"
                class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'incomes.index' ? 'text-white ' : ' text-gray-600' }}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>

                <span
                    class="-mr-1 {{ Route::currentRouteName() == 'incomes.index' ? 'font-medium' : 'font-small' }}">Incomes</span>
            </a>
        </li>
        <ul class="space-y-2 tracking-wide mt-8">
            <li class="rounded-xl {{ Route::currentRouteName() == 'expense.index' ? 'bg-blue-600' : '' }}">
                <a href="{{ route('expense.index') }}"
                    class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'expense.index' ? 'text-white ' : ' text-gray-600' }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <span
                        class="-mr-1 {{ Route::currentRouteName() == 'expense.index' ? 'font-medium' : 'font-small' }}">Expenses</span>
                </a>
            </li>
            <ul class="space-y-2 tracking-wide mt-8">
                <li class="rounded-xl {{ Route::currentRouteName() == 'summary' ? 'bg-blue-600' : '' }}">
                    <a href="{{ route('summary') }}"
                        class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'summary' ? 'text-white ' : ' text-gray-600' }}">
                        <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        <span
                            class="-mr-1 {{ Route::currentRouteName() == 'summary' ? 'bg-blue-600' : '' }}">Reports</span>
                    </a>
                </li>
                <ul class="space-y-2 tracking-wide mt-8">
                    <li class="rounded-xl {{ Route::currentRouteName() == 'notes.index' ? 'bg-blue-600' : '' }}">
                        <a href="{{ route('notes.index') }}"
                            class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'notes.index' ? 'text-white ' : ' text-gray-600' }}">
                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span
                                class="-mr-1 {{ Route::currentRouteName() == 'notes.index' ? 'font-medium' : 'font-small' }}">Notes</span>
                        </a>
                    </li>
