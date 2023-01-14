<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 z-40 transition-opacity duration-200 bg-slate-900 bg-opacity-30 lg:hidden lg:z-auto"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between pr-3 mb-10 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="{{ route('dashboard') }}">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                            <stop stop-color="#A5B4FC" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                            <stop stop-color="#38BDF8" offset="100%" />
                        </linearGradient>
                    </defs>
                    <rect fill="#6366F1" width="32" height="32" rx="16" />
                    <path
                        d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                        fill="#4F46E5" />
                    <path
                        d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                        fill="url(#logo-a)" />
                    <path
                        d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                        fill="url(#logo-b)" />
                </svg>
            </a>
        </div>

        <!-- Links -->

            <ul class="mt-3">
                <!-- Dashboard -->
                <li class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('dashboard') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Kubes</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- Billing --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['billing'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['billing'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('billing') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['billing'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['billing'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Billing</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- DNS --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dns'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dns'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('dns') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">DNS</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- Email --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dns'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dns'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('dns') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Email</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- CDN --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dns'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dns'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('dns') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">CDN</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- SSL --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dns'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dns'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('dns') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['dns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">SSL</span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- Support --}}
                <li
                    class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['support'])) {{ 'bg-slate-900' }} @endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['support'])) {{ 'hover:text-slate-200' }} @endif"
                        href="{{ route('support') }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center grow">
                                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['support'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['support'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                </svg>
                                <span
                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Support</span>
                            </div>
                            <!-- Badge -->
                            {{-- <div class="flex flex-shrink-0 ml-2">
                                <span
                                    class="inline-flex items-center justify-center h-5 px-2 text-xs font-medium text-white bg-indigo-500 rounded">4</span>
                            </div> --}}
                        </div>
                    </a>
                </li>

                {{-- Logout --}}
                <li class="my-3 px-3 py-2 rounded-sm mb-0.5 last:mb-0">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a class="block truncate transition duration-150 text-slate-400 hover:text-slate-200" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center grow">
                                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                                        <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                                    </svg>
                                    <span
                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Logout</span>
                                </div>
                            </div>
                        </a>
                    </form>
                </li>
            </ul>

    </div>
</div>
