<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Resources
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('resource.index') }}">Resources</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($resource) ? 'Edit' : 'Create' }} Resource
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($resource) ? route('resource.update', $resource->id) : route('resource.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($resource))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Title</x-label>
                            <x-text-input name="title" type="text" placeholder="Title..." class="text-input" value="{{ old('title', $resource->title ?? '') }}"/>
                            <x-form-error key="title" />
                        </div>
                    </div>
                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <x-label>Published Date</x-label>
                            <input
                                name="published_date"
                                value="{{ old('published_date', $resource->published_date ?? '') }}"
                                class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                placeholder="mm/dd/yyyy"
                                data-class="flatpickr-right"
                            />
                            <x-form-error key="published_date"/>
                        </div>
                        <div>
                            <x-label>Category</x-label>
                            <select name="resource_category_id" id="resource_category_id" class="text-input">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ isset($resource) && $resource->resource_category_id === $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-form-error key="blog_category_id"/>
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
							<x-label>Thumbnail Image</x-label>
                            <input type="file" class="form-control" id="thumbnail_image" name="thumbnail_image">
                            @if(isset($resource) && $resource->thumbnail_image)
                                <img src="{{ asset('storage/' . $resource->thumbnail_image) }}" alt="Headshot" width="100">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remove_thumbnail_image" name="remove_thumbnail_image" value="1">
                                    <label for="remove_thumbnail_image" class="form-check-label">Remove Thumbnail Image</label>
                                </div>
                            @endif
                            <x-form-error key="thumbnail_image" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
							<x-label>File Upload</x-label>
                            <input type="file" class="form-control" id="file_upload" name="file_upload">
                            @if(isset($resource) && $resource->file_upload)
                                Click <a href="{{ asset('storage/' . $resource->file_upload) }}" target="_blank">here</a> to view file.
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remove_file_upload" name="remove_file_upload" value="1">
                                    <label for="remove_file_upload" class="form-check-label">Remove File Upload</label>
                                </div>
                            @endif
                            <x-form-error key="file_upload" />
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Tags</x-label>
                            <x-text-input name="tags" type="text" placeholder="Tags..." class="text-input" value="{{ old('tags', $resource->tags ?? '') }}"/>
                            <x-form-error key="tags" />
                        </div>
                    </div>
                    <div class="mb-5.5">
                        <div class="w-full">
                            <x-label>Description</x-label>
                            <x-trix name="description" :value="old('description', $resource->description ?? '')" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('resource.index') }}"
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
