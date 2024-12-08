<x-app-layout>

 <!-- Breadcrumb Start -->
<div
    class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
    Languages
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

<!-- ====== Table Section Start -->
<div class="flex flex-col gap-10">
    <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">        
            <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
                <div class="flex flex-col gap-9">
                <form action="{{ route('language.store') }}" method="POST">
                    @csrf
                    @method('POST')                
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Input Fields
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5">
                            <div>
                                <label
                                    class="mb-3 block text-sm font-medium text-black dark:text-white"
                                >
                                    Name
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Name"
                                    class="text-input"
                                />
                            </div>
                        </div>
                        <button
                            class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                        >
                            Submit
                      </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>  
</div>
</x-app-layout>
