<x-app-layout>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            FAQ
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary"><a class="font-medium"
                                                        href="{{ route('faq.index') }}">FAQs</a></li>
            </ol>
        </nav>
    </div>

    <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        {{ isset($faq) ? 'Edit' : 'Create' }} FAQ
                    </h3>
                </div>
                <div class="p-7">
                    <form action="{{ isset($faq) ? route('faq.update', $faq->id) : route('faq.store') }}"
                          method="POST">
                        @csrf
                        @if(isset($faq))
                            @method('PUT')
                        @else
                            @method('POST')
                        @endif
                        <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-label>Name</x-label>
                                <x-text-input name="name" type="text" placeholder="Name..." class="text-input"
                                              value="{{ old('name', $faq->name ?? '') }}"/>
                                <x-form-error key="name"/>
                            </div>
                            <div>
                                <x-label>Description</x-label>
                                <x-text-input name="description" type="text" placeholder="Description..." class="text-input"
                                              value="{{ old('description', $faq->description ?? '') }}"/>
                                <x-form-error key="description"/>
                            </div>
                        </div>
                        <section class="space-y-8 py-6">
                            <x-accordion-panel header="Category">
                                <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                                    @foreach ($categories as $category)
                                        <div class="flex items-center space-x-2">
                                            <input
                                                type="radio"
                                                id="category_{{ $category->id }}"
                                                name="category"
                                                value="{{ $category->id }}"
                                                {{ isset($faq) && $faq->faq_category_id ? 'checked' : '' }}
                                            >
                                            <label for="category_{{ $category->id }}">{{ $category->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </x-accordion-panel>
                        </section>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="flex justify-end gap-4.5">
                                <a href="{{ route('faq.index') }}"
                                   class="btn-white"
                                   type="submit">
                                    Cancel
                                </a>
                                <button
                                    class="btn-primary"
                                    type="submit"
                                >Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
