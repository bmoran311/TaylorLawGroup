<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Engagement
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('engagement.index') }}">Engagement</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($engagement) ? 'Edit' : 'Create' }} Engagement
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($engagement) ? route('engagement.update', $engagement->id) : route('engagement.store') }}" method="POST">
                    @csrf
                    @if(isset($engagement))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif					                   
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Event Date</x-label>
                            <input
								name="event_date"
								value="{{ old('event_date', $engagement->event_date ?? '') }}"
								class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
								placeholder="mm/dd/yyyy"
								data-class="flatpickr-right"
							/>
                            <x-form-error key="event_date" />                           
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Event Time</x-label>
                            <x-text-input name="event_time" type="text" placeholder="Time..." class="text-input" value="{{ old('event_time', $engagement->event_time ?? '') }}"/>                                                        
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Title</x-label>
                            <x-text-input name="title" type="text" placeholder="Title..." class="text-input" value="{{ old('title', $engagement->title ?? '') }}"/>                           
                            <x-form-error key="title" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Conference / Publication</x-label>
                            <x-text-input name="conference" type="text" placeholder="Conference..." class="text-input" value="{{ old('conference', $engagement->conference ?? '') }}"/>                           
                            <x-form-error key="conference" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Type</x-label>
                            <select name="type" id="event_type" class="text-input">
                                <option value="">Select Type</option>
                                @foreach($event_types as $event_type)
                                    <option value="{{ $event_type }}" 
                                        {{ isset($engagement) && $engagement->type === $event_type ? 'selected' : '' }}>
                                        {{ $event_type }}
                                    </option>
                                @endforeach
                            </select>   
                            <x-form-error key="type" />                       
                        </div>
                    </div>					
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Summary</x-label>
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
                            <a href="{{ route('engagement.index') }}"
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
