<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Quotes
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('quote.index') }}">Quotes</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-4">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($quote) ? 'Edit' : 'Create' }} Quote
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($quote) ? route('quote.update', $quote->id) : route('quote.store') }}" method="POST">
                    @csrf
                    @if(isset($quote))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif

                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-3 gap-4">                        
                        <div>
                            <x-label for="type">Type</x-label>                            
                            <div class="flex flex-col space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="type[]" value="Customer Service"
                                        {{ str_contains(old('type', $quote->type ?? ''), 'Customer Service') ? 'checked' : '' }}>
                                    <span class="ml-2">Customer Service</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="type[]" value="Experience"
                                        {{ str_contains(old('type', $quote->type ?? ''), 'Experience') ? 'checked' : '' }}>
                                    <span class="ml-2">Experience</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="type[]" value="Commitment"
                                        {{ str_contains(old('type', $quote->type ?? ''), 'Commitment') ? 'checked' : '' }}>
                                    <span class="ml-2">Commitment</span>
                                </label>
                            </div>

                            <x-form-error key="type" />
                        </div>                                              
                        <div>
							<x-label>Active?</x-label>
							<label>
                                <input 
                                    type="radio" 
                                    name="active" 
                                    value="1" 
                                    {{ (isset($quote) ? $quote->active : old('active', 0)) == 1 ? 'checked' : '' }}>
                                Yes
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                <input 
                                    type="radio" 
                                    name="active" 
                                    value="0" 
                                    {{ (isset($quote) ? $quote->active : old('active', 0)) == 0 ? 'checked' : '' }}>
                                No
                            </label>
                        </div>
                    </div>                    
                    
                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Quote</x-label>
                            <textarea
                                    name="quote"
                                    rows="6"
                                    placeholder="Quote..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('quote', $quote->quote ?? '') }}</textarea>                            
                        </div>
                    </div>
                                        
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
