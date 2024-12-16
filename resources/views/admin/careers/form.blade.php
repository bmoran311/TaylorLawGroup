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
                        <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-label>Job Title</x-label>
                                <x-text-input name="job_title" type="text" placeholder="Job Title..." class="text-input"
                                              value="{{ old('job_title', $career->job_title ?? '') }}"/>
                                <x-form-error key="job_title"/>
                            </div>                            
                            <div>
                                <x-label>Location</x-label>
                                <x-text-input name="location" type="text" placeholder="Location..." class="text-input"
                                              value="{{ old('location', $career->location ?? '') }}"/>
                                <x-form-error key="location"/>
                            </div>
                        </div>          
                        <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-label>Application Deadline</x-label>
                                <input
                                    name="application_deadline"
                                    value="{{ old('application_deadline', $career->application_deadline ?? '') }}"
                                    class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                    placeholder="mm/dd/yyyy"
                                    data-class="flatpickr-right"
                                />                       
                                <x-form-error key="application_deadline"/>                                
                            </div>  
                            <div>                          
                                <x-label>Job Posting Date</x-label>
                                <input
                                    name="job_posting_date"
                                    value="{{ old('job_posting_date', $career->job_posting_date ?? '') }}"
                                    class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                    placeholder="mm/dd/yyyy"
                                    data-class="flatpickr-right"
                                />  
                            </div>
                        </div>               
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Employment Type</x-label>                                
                                <select name="employment_type" id="employment_type" class="form-control">
                                    <option value="">Select Type</option>
                                    @foreach ($employment_types as $employment_type)
                                        <option value="{{ $employment_type }}" 
                                            {{ isset($career) && $career->employment_type === $employment_type ? 'selected' : '' }}>
                                            {{ $employment_type }}
                                        </option>
                                    @endforeach
                                </select>                                
                                <x-form-error key="employment_type"/>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Job Summary</x-label>
                                <textarea
                                    name="job_summary"
                                    rows="6"
                                    placeholder="Summary..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('summary', $career->job_summary ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Responsibilities</x-label>
                                <textarea
                                    name="responsibilities"
                                    rows="6"
                                    placeholder="Responsibilities..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('responsibilities', $career->responsibilities ?? '') }}</textarea>                                
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Qualifications</x-label>
                                <textarea
                                    name="qualifications"
                                    rows="6"
                                    placeholder="Qualifications..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('qualifications', $career->qualifications ?? '') }}</textarea>                     
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Skills</x-label>
                                <textarea
                                    name="skills"
                                    rows="6"
                                    placeholder="Skills..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('skills', $career->skills ?? '') }}</textarea> 
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full">
                                <x-label>Salary Benefits</x-label>
                                <textarea
                                    name="salary_benefits"
                                    rows="6"
                                    placeholder="Salary Benefits..."
                                    class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                                >{{ old('salary_benefits', $career->salary_benefits ?? '') }}</textarea>                                 
                            </div>
                        </div>                        
                        <section class="space-y-8 py-6">
                            <x-accordion-panel header="Practice Area">
                                <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                                    @foreach ($practice_areas as $practice_area)
                                        <div class="flex items-center space-x-2">
                                            <input
                                                type="checkbox"
                                                id="practice_area_{{ $practice_area->id }}"
                                                name="practice_areas[]"
                                                value="{{ $practice_area->id }}"
                                                {{ isset($career) && $career->practice_areas && $career->practice_areas->contains($practice_area->id) ? 'checked' : '' }}
                                            >
                                            <label for="practice_area_{{ $practice_area->id }}">{{ $practice_area->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </x-accordion-panel>
                        </section>
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
