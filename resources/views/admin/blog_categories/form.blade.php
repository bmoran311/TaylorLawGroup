<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
    FAQ Categories
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('blog_category.index') }}">Blog Categories</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($blog_category) ? 'Edit' : 'Create' }} Blog Category
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($blog_category) ? route('blog_category.update', $blog_category->id) : route('blog_category.store') }}" method="POST">
                    @csrf
                    @if(isset($blog_category))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Blog Category Name</x-label>
                            <x-text-input name="name" type="text" placeholder="Blog Category Name..." class="text-input" value="{{ old('name', $blog_category->name ?? '') }}"/>
                            <x-form-error key="name" />
                        </div>
                    </div>
                    <div class="flex justify-end gap-4.5">
                            <a href="{{ route('blog_category.index') }}"
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
