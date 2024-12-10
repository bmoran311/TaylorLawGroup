<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Firm
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('firm.index') }}">Firm</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($firm) ? 'Edit' : 'Create' }} Firm
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($firm) ? route('firm.update', $firm->id) : route('firm.store') }}" method="POST">
                    @csrf
                    @if(isset($firm))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif					                   					
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Name</x-label>
                            <x-text-input name="name" type="text" placeholder="Name..." class="text-input" value="{{ old('name', $firm->name ?? '') }}"/>                           
                        </div>
                    </div>					
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>URL</x-label>
                            <x-text-input name="url" type="text" placeholder="URL..." class="text-input" value="{{ old('url', $firm->url ?? '') }}"/>                            
                        </div>
                    </div>   
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">                        
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('firm.index') }}"
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
