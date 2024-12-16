<x-app-layout>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Careers
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Career</li>
            </ol>
        </nav>
    </div>

    <section class="flex justify-end mb-4">
        <x-create-button href="{{ route('career.create') }}">Add Career</x-create-button>
    </section>

    <div class="flex flex-col gap-10">
        <div
            class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto taylor-table sortable">
                    <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px]  xl:pl-11">
                            Job Title
                        </th>
                        <th class="min-w-[150px]">
                            Location
                        </th>
                        <th class="min-w-[150px]">
                            Employment Type
                        </th>
                        <th class="no-sort">
                            Job Summary
                        </th>
                        <th class="no-sort">
                            Responsibilities
                        </th>
                        <th class="no-sort">
                            Qualifications
                        </th>
                        <th class="no-sort">
                            Skills
                        </th>
                        <th class="no-sort">
                            Application Deadline
                        </th>
                        <th class="no-sort">
                           Job Posting Date
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($careers as $career)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $career->job_title }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $career->location }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->employment_type }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->job_summary }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->responsibilities }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->qualifications }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->skills }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->application_deadline }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $career->job_posting_date }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                    <button class="hover:text-primary">
                                        <a href="{{ route('career.edit', ['career' => $career]) }}">
                                            <x-icon-view/>
                                        </a>
                                    </button>
                                    <form action="{{route('career.destroy', ['career' => $career])}}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this career?')">
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
