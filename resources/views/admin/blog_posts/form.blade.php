<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Blog Posts
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('blog_post.index') }}">Blog Posts</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($blog_post) ? 'Edit' : 'Create' }} Blog Post
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($blog_post) ? route('blog_post.update', $blog_post->id) : route('blog_post.store') }}" method="POST">
                    @csrf
                    @if(isset($blog_post))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Title</x-label>
                            <x-text-input name="title" type="text" placeholder="Title..." class="text-input" value="{{ old('title', $blog_post->title ?? '') }}"/>
                            <x-form-error key="title" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Category</x-label>
                            <select name="blog_category_id" id="blog_category_id" class="text-input">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ isset($blog_post) && $blog_post->blog_category_id === $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-form-error key="blog_category_id"/>
                        </div>
                    </div>
                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <x-label>Is Featured?</x-label>
                            <label>
                                <input
                                    type="radio"
                                    name="is_featured"
                                    value="1"
                                    {{ (isset($blog_post) ? $blog_post->is_featured : old('is_featured', 0)) == 1 ? 'checked' : '' }}>
                                Yes
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                <input
                                    type="radio"
                                    name="is_featured"
                                    value="0"
                                    {{ (isset($blog_post) ? $blog_post->client_consent : old('is_featured', 0)) == 0 ? 'checked' : '' }}>
                                No
                            </label>
                        </div>
                        <div>
                            <x-label>Is Visible?</x-label>
                            <label>
                                <input
                                    type="radio"
                                    name="visibility"
                                    value="1"
                                    {{ (isset($blog_post) ? $blog_post->visibility : old('visibility', 0)) == 1 ? 'checked' : '' }}>
                                Yes
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                <input
                                    type="radio"
                                    name="visibility"
                                    value="0"
                                    {{ (isset($blog_post) ? $blog_post->visibility : old('visibility', 0)) == 0 ? 'checked' : '' }}>
                                No
                            </label>
                        </div>
                    </div>
                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <x-label>Slug</x-label>
                            <x-text-input name="slug" type="text" placeholder="Slug.." class="text-input" value="{{ old('slug', $blog_post->slug ?? '') }}"/>
                            <x-form-error key="slug" />
                        </div>
                        <div>
                            <x-label>Published Date</x-label>
                            <input
                                name="published_date"
                                value="{{ old('published_date', $blog_post->published_date ?? '') }}"
                                class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                placeholder="mm/dd/yyyy"
                                data-class="flatpickr-right"
                            />
                            <x-form-error key="published_date"/>
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Excerpt</x-label>
                            <textarea
                                name="excerpt"
                                rows="6"
                                placeholder="Excerpt..."
                                class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                            >{{ old('excerpt', $blog_post->excerpt ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Content</x-label>
                            <textarea
                                name="content"
                                rows="6"
                                placeholder="Content..."
                                class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                            >{{ old('content', $blog_post->content ?? '') }}</textarea>
                        </div>
                    </div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Tags</x-label>
                            <x-text-input name="tags" type="text" placeholder="Tags..." class="text-input" value="{{ old('tags', $blog_post->tags ?? '') }}"/>
                            <x-form-error key="tags" />
                        </div>
                    </div>                                       
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>SEO Title</x-label>
                            <x-text-input name="seo_title" type="text" placeholder="SEO Title..." class="text-input" value="{{ old('seo_title', $blog_post->seo_title ?? '') }}"/>
                            <x-form-error key="seo_title" />
                        </div>
                    </div>
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>SEO Meta Description</x-label>
                            <x-text-input name="seo_meta_description" type="text" placeholder="SEO Meta Description..." class="text-input" value="{{ old('seo_meta_description', $blog_post->seo_meta_description ?? '') }}"/>
                            <x-form-error key="seo_meta_description" />
                        </div>
                    </div>                   
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('blog_post.index') }}"
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
