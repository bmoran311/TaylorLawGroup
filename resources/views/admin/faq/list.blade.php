<x-app-layout>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            FAQs
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">FAQ</li>
            </ol>
        </nav>
    </div>

    <section class="flex justify-end mb-4">
        <x-create-button href="{{ route('faq.create') }}">Add FAQ</x-create-button>
    </section>

    <div class="flex flex-col gap-10">
        <div
            class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto taylor-table sortable">
                    <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px]  xl:pl-11">
                            Name
                        </th>
                        <th class="min-w-[150px]">
                            Description
                        </th>
                        <th class="no-sort">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $faq->name }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $faq->description }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">FAQ
                                    <button class="hover:text-primary">
                                        <a href="{{ route('faq.edit', ['faq' => $faq]) }}">
                                            <x-icon-view/>
                                        </a>
                                    </button>
                                    <form action="{{route('faq.destroy', ['faq' => $faq])}}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
                                        @method('DELETE')
                                        @csrf
                                        <button class="hover:text-primary">
                                            <x-icon-delete/>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
