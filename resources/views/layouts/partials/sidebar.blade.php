<ul class="space-y-2 tracking-wide mt-8">
    <li class="rounded-xl {{ Route::currentRouteName() == 'index' ? 'bg-blue-600' : '' }}">
        <a href="{{ route('index') }}"
            class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'index' ? 'text-white ' : ' text-gray-600' }}">
            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                <path
                    d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                    class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                    class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                    class="fill-current group-hover:text-sky-300"></path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
        </a>
    </li>

    <ul class="space-y-2 tracking-wide mt-8">
        <li class="rounded-xl {{ Route::currentRouteName() == 'incomes.index' ? 'bg-blue-600' : '' }}">
            <a href="{{ route('incomes.index') }}"
                class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'incomes.index' ? 'text-white ' : ' text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                        d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                        clip-rule="evenodd" />
                    <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                        d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                </svg>

                <span
                    class="-mr-1 {{ Route::currentRouteName() == 'incomes.index' ? 'font-medium' : 'font-small' }}">Incomes</span>
            </a>
        </li>
        <ul class="space-y-2 tracking-wide mt-8">
            <li class="rounded-xl {{ Route::currentRouteName() == 'expense.index' ? 'bg-blue-600' : '' }}">
                <a href="{{ route('expense.index') }}"
                    class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'expense.index' ? 'text-white ' : ' text-gray-600' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                            d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                            clip-rule="evenodd" />
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                            d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    <span
                        class="-mr-1 {{ Route::currentRouteName() == 'expense.index' ? 'font-medium' : 'font-small' }}">Expenses</span>
                </a>
            </li>
            <ul class="space-y-2 tracking-wide mt-8">
                <li class="rounded-xl {{ Route::currentRouteName() == 'summary' ? 'bg-blue-600' : '' }}">
                    <a href="{{ route('summary') }}"
                        class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'summary' ? 'text-white ' : ' text-gray-600' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd" />
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                        <span
                            class="-mr-1 {{ Route::currentRouteName() == 'summary' ? 'bg-blue-600' : '' }}">Summary</span>
                    </a>
                </li>
                <ul class="space-y-2 tracking-wide mt-8">
                    <li class="rounded-xl {{ Route::currentRouteName() == 'notes.index' ? 'bg-blue-600' : '' }}">
                        <a href="{{ route('notes.index') }}"
                            class="relative px-4 py-3 flex items-center space-x-4   {{ Route::currentRouteName() == 'notes.index' ? 'text-white ' : ' text-gray-600' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                    clip-rule="evenodd" />
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                    d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg>
                            <span
                                class="-mr-1 {{ Route::currentRouteName() == 'notes.index' ? 'font-medium' : 'font-small' }}">Notes</span>
                        </a>
                    </li>
