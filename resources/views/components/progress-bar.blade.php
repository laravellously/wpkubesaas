<!-- Progress bar -->
@props(['step'])
<div class="px-4 pt-12 pb-8">
    <div class="w-full max-w-md mx-auto">
        <div class="relative">
            <div class="absolute left-0 top-1/2 -mt-px w-full h-0.5 bg-slate-200" aria-hidden="true"></div>
            <ul class="relative flex justify-between w-full">
                <li>
                    <a class="flex items-center justify-center w-6 h-6 text-xs font-semibold {{ $step == 'onboarding.start' ? 'text-white bg-indigo-500' : ' bg-slate-100 text-slate-500' }} rounded-full" href="{{ route('onboarding.start') }}">1</a>
                </li>
                <li>
                    <a class="flex items-center justify-center w-6 h-6 text-xs font-semibold rounded-full bg-slate-100 text-slate-500" href="onboarding-02.html">2</a>
                </li>
                <li>
                    <a class="flex items-center justify-center w-6 h-6 text-xs font-semibold rounded-full bg-slate-100 text-slate-500" href="onboarding-03.html">3</a>
                </li>
                <li>
                    <a class="flex items-center justify-center w-6 h-6 text-xs font-semibold rounded-full bg-slate-100 text-slate-500" href="onboarding-04.html">4</a>
                </li>
            </ul>
        </div>
    </div>
</div>
