<x-app-layout>

<div class="mb-8">
    <div class="bg-yellow-50 text-center border border-yellow-200 p-4 shadow-lg shadow-slate-200 max-w-5xl mx-auto" role="alert">
        <p class="text-sm leading-5 text-yellow-700">
        <b>Awards</b> and distinctions in the legal profession are acknowledgments of excellence, expertise, and professional reputation. <br>
        Some notable examples include: American Bar Association (ABA) Awards, Burton Awards for Legal Achievement and Chambers USA Awards for Excellence.
        </p>
    </div>
</div>

<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
    Awards
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
            </li>
            <li class="font-medium text-primary">Awards</li>
        </ol>
    </nav>
</div>

<section class="flex justify-end mb-4">
    <x-create-button href="{{ route('award.create') }}">Add New Award</x-create-button>
</section>

<div class="flex flex-col gap-10">
    <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
            <table class="w-full table-auto taylor-table sortable">
                <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px]  xl:pl-11">
                            Award
                        </th>
                        <th class="min-w-[220px]  xl:pl-11">
                            Publication
                        </th>
                        <th class="min-w-[150px]">
                            Created Date
                        </th>
                        <th class="min-w-[120px]">
                            Status
                        </th>
                        <th class="no-sort">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($awards as $award)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $award->name }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $award->publication }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $award->created_at->format('M d, Y') }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                Active
                                </p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                    <button class="hover:text-primary">
                                        <a href="{{ route('award.edit', ['award' => $award]) }}"><x-icon-view /></a>
                                    </button>
                                    <form action="{{route('award.destroy', ['award' => $award])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this award?')">
                                        @method('DELETE')
                                        @csrf
                                        <button class="hover:text-primary">
                                            <x-icon-delete />
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
