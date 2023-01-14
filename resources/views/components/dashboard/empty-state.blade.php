@props(['title', 'model', 'heading', 'subheading'])

<div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">

    <!-- Page header -->
    {{-- <div class="mb-8 sm:flex sm:justify-between sm:items-center">

        <!-- Left: Title -->
        <div class="mb-4 sm:mb-0">
            <h1 class="text-xl font-semibold text-slate-800">{{ $title }}</h1>
        </div>

        <!-- Right: Actions -->
        <div class="grid justify-start grid-flow-col gap-2 sm:auto-cols-max sm:justify-end">

            <!-- Add board button -->
            <button class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="ml-2">Add {{ $model }}</span>
            </button>

        </div>

    </div> --}}

    <div class="max-w-2xl m-auto mt-16">

        <div class="px-4 text-center">
            <div
                class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gradient-to-t from-slate-200 to-slate-100">
                <svg class="w-5 h-6 fill-current" viewBox="0 0 20 24">
                    <path class="text-slate-500" d="M10 10.562l9-5-8.514-4.73a1 1 0 00-.972 0L1 5.562l9 5z" />
                    <path class="text-slate-300" d="M9 12.294l-9-5v10.412a1 1 0 00.514.874L9 23.294v-11z" />
                    <path class="text-slate-400" d="M11 12.294v11l8.486-4.714a1 1 0 00.514-.874V7.295l-9 4.999z" />
                </svg>
            </div>
            <h2 class="mb-2 text-2xl font-bold text-slate-800">{{ $heading }}</h2>
            <div class="mb-6">{{ $subheading }}</div>
            <a href="{{ route('kubes.create') }}" class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="ml-2">Add {{ $model }}</span>
            </a>
        </div>

    </div>

</div>
