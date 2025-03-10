<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Multimedia
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('multimedia.index') }}">Multimedia</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($multimedia) ? 'Edit' : 'Create' }} Multimedia
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($multimedia) ? route('multimedia.update', $multimedia->id) : route('multimedia.store') }}" method="POST">
                    @csrf
                    @if(isset($multimedia))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif					                   
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Publication Date</x-label>
                            <input
								name="publication_date"
								value="{{ old('publication_date', $multimedia->publication_date ?? '') }}"
								class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
								placeholder="mm/dd/yyyy"
								data-class="flatpickr-right"
							/>  
                            <x-form-error key="publication_date" />                         
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Multimedia Headline</x-label>
                            <x-text-input name="headline" type="text" placeholder="Multimedia headline..." class="text-input" value="{{ old('headline', $multimedia->headline ?? '') }}"/>                           
                            <x-form-error key="headline" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Publication</x-label>
                            <x-text-input name="publication" type="text" placeholder="Publication..." class="text-input" value="{{ old('publication', $multimedia->publication ?? '') }}"/>                           
                            <x-form-error key="publication" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>URL</x-label>
                            <x-text-input name="url" type="text" placeholder="URL..." class="text-input" value="{{ old('url', $multimedia->url ?? '') }}"/>                            
                            <x-form-error key="url" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Summary</x-label>
                            <textarea
                                name="summary"
                                rows="6"
                                placeholder="Summary..."
                                class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                            >{{ old('summary', $multimedia->summary ?? '') }}</textarea>                            
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">                        
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('multimedia.index') }}"
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
