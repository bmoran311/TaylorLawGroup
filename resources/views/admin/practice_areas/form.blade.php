<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Practice Areas
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('practice_area.index') }}">Practice Areas</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($practice_area) ? 'Edit' : 'Create' }} Practice Area
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($practice_area) ? route('practice_area.update', $practice_area->id) : route('practice_area.store') }}" method="POST">
                    @csrf
                    @if(isset($practice_area))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Practice Area Name</x-label>
                            <x-text-input name="name" type="text" placeholder="Name..." class="text-input" value="{{ old('name', $practice_area->name ?? '') }}"/>
                            <x-form-error key="name" />
                        </div>                        
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Description</x-label>
                            <textarea                              
                                name="summary"
                                rows="6"
                                placeholder="Summary"
                                class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                            >{{ old('summary', $engagement->summary ?? '') }}</textarea>                            
                        </div>
                    </div>                    
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">                        
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('practice_area.index') }}"
                                class="btn-white"
                                type="submit">
                                Cancel
                            </a>
                            <button
                                class="btn-primary"
                                type="submit"
                            >Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
