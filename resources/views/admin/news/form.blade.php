<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        News
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('news.index') }}">News</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($news) ? 'Edit' : 'Create' }} News
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($news) ? route('news.update', $news->id) : route('news.store') }}" method="POST">
                    @csrf
                    @if(isset($news))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Publication Date</x-label>
                            <input
								name="publication_date"
								value="{{ old('publication_date', $news->publication_date ?? '') }}"
								class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
								placeholder="mm/dd/yyyy"
								data-class="flatpickr-right"
							/>
                            <x-form-error key="publication_date" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>News Headline</x-label>
                            <x-text-input name="headline" type="text" placeholder="News headline..." class="text-input" value="{{ old('headline', $news->headline ?? '') }}"/>
                            <x-form-error key="headline" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Publication</x-label>
                            <x-text-input name="publication" type="text" placeholder="Publication..." class="text-input" value="{{ old('publication', $news->publication ?? '') }}"/>
                            <x-form-error key="publication" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>URL</x-label>
                            <x-text-input name="url" type="text" placeholder="URL..." class="text-input" value="{{ old('url', $news->url ?? '') }}"/>
                            <x-form-error key="url" />
                        </div>
                    </div>
                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Summary</x-label>
                            {{-- <textarea
                                    name="summary"
                                    rows="6"
                                    placeholder="Summary..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('summary', $career->summary ?? '') }}</textarea> --}}
                            <x-trix name="summary" />
                        </div>
                    </div>

                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('news.index') }}"
                                class="btn-white"
                                type="submit">
                                Cancel
                            </a>
                            <button
                                class="btn-primary"
                                type="submit"
                            >Save</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
