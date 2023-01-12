<x-authentication-layout>
    <h1 class="mb-6 text-3xl font-bold text-slate-800">Tell us what’s your situation ✨</h1>
    <!-- Form -->
    <form>
        <div class="mb-8 space-y-3">
            <label class="relative block cursor-pointer">
                <input type="radio" name="radio-buttons" class="sr-only peer" checked />
                <div
                    class="flex items-center p-4 text-sm font-medium duration-150 ease-in-out bg-white border rounded shadow-sm text-slate-800 border-slate-200 hover:border-slate-300">
                    <svg class="w-6 h-6 mr-4 fill-current shrink-0" viewBox="0 0 24 24">
                        <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                        <path class="text-indigo-300" d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z" />
                        <path class="text-indigo-200" d="M13 12.588v11l8.486-4.714A1 1 0 0 0 22 18V7.589l-9 4.999Z" />
                    </svg>
                    <span>I have a company</span>
                </div>
                <div class="absolute inset-0 border-2 border-transparent rounded pointer-events-none peer-checked:border-indigo-400"
                    aria-hidden="true"></div>
            </label>
            <label class="relative block cursor-pointer">
                <input type="radio" name="radio-buttons" class="sr-only peer" />
                <div
                    class="flex items-center p-4 text-sm font-medium duration-150 ease-in-out bg-white border rounded shadow-sm text-slate-800 border-slate-200 hover:border-slate-300">
                    <svg class="w-6 h-6 mr-4 fill-current shrink-0" viewBox="0 0 24 24">
                        <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                        <path class="text-indigo-300" d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z" />
                    </svg>
                    <span>I’m a freelance / contractor</span>
                </div>
                <div class="absolute inset-0 border-2 border-transparent rounded pointer-events-none peer-checked:border-indigo-400"
                    aria-hidden="true"></div>
            </label>
            <label class="relative block cursor-pointer">
                <input type="radio" name="radio-buttons" class="sr-only peer" />
                <div
                    class="flex items-center p-4 text-sm font-medium duration-150 ease-in-out bg-white border rounded shadow-sm text-slate-800 border-slate-200 hover:border-slate-300">
                    <svg class="w-6 h-6 mr-4 fill-current shrink-0" viewBox="0 0 24 24">
                        <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                    </svg>
                    <span>I’m just getting started</span>
                </div>
                <div class="absolute inset-0 border-2 border-transparent rounded pointer-events-none peer-checked:border-indigo-400"
                    aria-hidden="true"></div>
            </label>
        </div>
        <div class="flex items-center justify-between">
            <a class="ml-auto text-white bg-indigo-500 btn hover:bg-indigo-600" href="onboarding-02.html">Next Step
                -&gt;</a>
        </div>
    </form>
</x-authentication-layout>
