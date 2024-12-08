<x-app-layout>

 <!-- Breadcrumb Start -->
<div
    class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Create New Language
    </h2>

    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary">Languages</li>
    </ol>
    </nav>
</div>
<!-- Breadcrumb End -->


<div class="grid grid-cols-5 gap-8">
                <div class="col-span-5 xl:col-span-3">
                  <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                      <h3 class="font-medium text-black dark:text-white">
                        Create New Language
                      </h3>
                    </div>
                    <div class="p-7">
                      <form action="{{ route('language.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                           <div class="w-full">
                                <x-label>Language Name</x-label>
                                <x-text-input
                                    name="name"
                                    type="text"
                                    placeholder="Language Name..."
                                    class="text-input"
                                />
                            </div>
                        </div>

                        <div class="flex justify-end gap-4.5">
                          <a href="{{ route('language.index') }}"
                            class="btn-white"
                            type="submit"
                          >
                            Cancel
                          </a>
                          <button
                            class="btn-primary"
                            type="submit"
                          >
                            Save
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>


</x-app-layout>
