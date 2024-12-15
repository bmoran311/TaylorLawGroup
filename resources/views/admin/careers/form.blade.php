<x-app-layout>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Career
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary"><a class="font-medium"
                                                        href="{{ route('career.index') }}">Careers</a></li>
            </ol>
        </nav>
    </div>

    <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        {{ isset($career) ? 'Edit' : 'Create' }} Career
                    </h3>
                </div>
                <div class="p-7">
                    <form action="{{ isset($career) ? route('career.update', $career->id) : route('career.store') }}"
                          method="POST">
                        @csrf
                        @if(isset($career))
                            @method('PUT')
                        @else
                            @method('POST')
                        @endif
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Job Title</x-label>
                                <x-text-input name="job_title" type="text" placeholder="Job Title..." class="text-input"
                                              value="{{ old('job_title', $career->job_title ?? '') }}"/>
                                <x-form-error key="job_title"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Location</x-label>
                                <x-text-input name="location" type="text" placeholder="Location..." class="text-input"
                                              value="{{ old('location', $career->location ?? '') }}"/>
                                <x-form-error key="location"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Employment Type</x-label>
                                <x-text-input name="employment_type" type="text" placeholder="Employment Type..."
                                              class="text-input"
                                              value="{{ old('employment_type', $career->employment_type ?? '') }}"/>
                                <x-form-error key="employment_type"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Job Summary</x-label>
                                <x-text-input name="job_summary" type="text" placeholder="Job Summary..."
                                              class="text-input"
                                              value="{{ old('job_summary', $career->job_summary ?? '') }}"/>
                                <x-form-error key="job_summary"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Responsibilities</x-label>
                                <x-text-input name="responsibilities" type="text" placeholder="Responsibilities..."
                                              class="text-input"
                                              value="{{ old('responsibilities', $career->responsibilities ?? '') }}"/>
                                <x-form-error key="responsibilities"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Qualifications</x-label>
                                <x-text-input name="qualifications" type="text" placeholder="Qualifications..."
                                              class="text-input"
                                              value="{{ old('qualifications', $career->qualifications ?? '') }}"/>
                                <x-form-error key="qualifications"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Skills</x-label>
                                <x-text-input name="skills" type="text" placeholder="Skills..." class="text-input"
                                              value="{{ old('skills', $career->skills ?? '') }}"/>
                                <x-form-error key="skills"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Practice Area</x-label>
                                <x-text-input name="practice_area" type="text" placeholder="Practice Area..."
                                              class="text-input"
                                              value="{{ old('practice_area', $career->practice_area ?? '') }}"/>
                                <x-form-error key="practice_area"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Salary Benefits</x-label>
                                <x-text-input name="salary_benefits" type="text" placeholder="Salary Benefits..."
                                              class="text-input"
                                              value="{{ old('salary_benefits', $career->salary_benefits ?? '') }}"/>
                                <x-form-error key="salary_benefits"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Application Deadline</x-label>
                                <x-text-input name="application_deadline" type="text"
                                              placeholder="Application Deadline..." class="text-input"
                                              value="{{ old('application_deadline', $career->application_deadline ?? '') }}"/>
                                <x-form-error key="application_deadline"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Job Posting Date</x-label>
                                <x-text-input name="job_posting_date" type="text"
                                              placeholder="Job Posting Date..." class="text-input"
                                              value="{{ old('job_posting_date', $career->job_posting_date ?? '') }}"/>
                                <x-form-error key="job_posting_date"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="flex justify-end gap-4.5">
                                <a href="{{ route('career.index') }}"
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
