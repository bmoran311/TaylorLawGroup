@if(session('success'))
    <div class="bg-green-50 text-center border border-green-200 p-4 border-l-0 border-r-0 shadow-lg shadow-slate-200" role="alert">
        <p class="text-sm leading-5 text-green-700">{{ session('success') }}</p>
    </div>
@endif

@if(session('warn'))
    <div class="bg-yellow-50 text-center border border-yellow-200 p-4 border-l-0 border-r-0 shadow-lg shadow-slate-200" role="alert">
        <p class="text-sm leading-5 text-yellow-700">{{ session('warn') }}</p>
    </div>
@endif

@if(session('info'))
    <div class="bg-blue-50 text-center border border-blue-200 p-4 border-l-0 border-r-0 shadow-lg shadow-slate-200" role="alert">
        <p class="text-sm leading-5 text-blue-700">{{ session('warn') }}</p>
    </div>
@endif

@if(session('danger'))
    <div class="bg-red-50 text-center border border-red-200 p-4 border-l-0 border-r-0 shadow-lg shadow-slate-200" role="alert">
        <p class="text-sm leading-5 text-red-700">{{ session('danger') }}</p>
    </div>
@endif

