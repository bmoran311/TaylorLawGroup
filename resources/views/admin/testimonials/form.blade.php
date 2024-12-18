<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Testimonials
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('testimonial.index') }}">Testimonials</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-4">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($testimonial) ? 'Edit' : 'Create' }} Testimonial
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($testimonial) ? route('testimonial.update', $testimonial->id) : route('testimonial.store') }}" method="POST">
                    @csrf
                    @if(isset($testimonial))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif

                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <x-label>Resolution Date</x-label>
                            <input
								name="date_of_resolution"
								value="{{ old('date_of_resolution', $testimonial->date_of_resolution ?? '') }}"
								class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
								placeholder="mm/dd/yyyy"
								data-class="flatpickr-right"
							/>
                            <x-form-error key="publication_date" />
                        </div>                                                
                        <div>
							<x-label>Client Consent?</x-label>
							<label>
                                <input 
                                    type="radio" 
                                    name="client_consent" 
                                    value="1" 
                                    {{ (isset($testimonial) ? $testimonial->client_consent : old('client_consent', 0)) == 1 ? 'checked' : '' }}>
                                Yes
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                <input 
                                    type="radio" 
                                    name="client_consent" 
                                    value="0" 
                                    {{ (isset($testimonial) ? $testimonial->client_consent : old('client_consent', 0)) == 0 ? 'checked' : '' }}>
                                No
                            </label>
                        </div>
                    </div>

                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
							<x-label>Client Name</x-label>
							<x-text-input name="client_name" type="text" placeholder="Client Name..." class="text-input" value="{{ old('client_name', $testimonial->client_name ?? '') }}"/>
							<x-form-error key="client_name" />
                        </div>                        
                        <div>
							<x-label>Title</x-label>
							<x-text-input name="title" type="text" placeholder="Title..." class="text-input" value="{{ old('title', $testimonial->title ?? '') }}"/>
							<x-form-error key="title" />
                        </div>
                    </div>	
                    
                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Summary</x-label>
                            <textarea
                                    name="summary"
                                    rows="6"
                                    placeholder="Summary..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('summary', $testimonial->summary ?? '') }}</textarea>                            
                        </div>
                    </div>

                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Content</x-label>
                            <textarea
                                    name="content"
                                    rows="18"
                                    placeholder="Content..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('content', $testimonial->content ?? '') }}</textarea>                            
                        </div>
                    </div>

                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Outcome</x-label>
                            <textarea
                                    name="outcome"
                                    rows="18"
                                    placeholder="Outcome..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('outcome', $testimonial->outcome ?? '') }}</textarea>                            
                        </div>
                    </div>

                    <section class="space-y-8 py-6">

                    <x-accordion-panel header="Practice Area">
                        <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($practice_areas as $practice_area)
                                <div class="flex items-center space-x-2">
                                    <input
                                        type="checkbox"
                                        id="practice_area_{{ $practice_area->id }}"
                                        name="practice_areas[]"
                                        value="{{ $practice_area->id }}"
                                        {{ isset($testimonial) && $testimonial->practice_areas && $testimonial->practice_areas->contains($practice_area->id) ? 'checked' : '' }}
                                    >
                                    <label for="practice_area_{{ $practice_area->id }}">{{ $practice_area->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Bio">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                                @foreach ($bios as $bio)
                                    <div>
                                        <input
                                            type="checkbox"
                                            id="bio_{{ $bio->id }}"
                                            name="bios[]"
                                            value="{{ $bio->id }}"
                                            {{ isset($testimonial) && $testimonial->bios && $testimonial->bios->contains($bio->id) ? 'checked' : '' }}
                                        >
                                        <label for="bio_{{ $bio->id }}">{{ $bio->last_name }}, {{ $bio->first_name }}</label>
                                    </div>
                                @endforeach
                        </div>
                    </x-accordion-panel>  
                    
                    </section>

                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('bio.index') }}"
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
