<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Bios
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('bio.index') }}">Bios</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-4">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($bio) ? 'Edit' : 'Create' }} Bio
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($bio) ? route('bio.update', $bio->id) : route('bio.store') }}" method="POST">
                    @csrf
                    @if(isset($bio))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
							<x-label>First Name</x-label>
							<x-text-input name="first_name" type="text" placeholder="First Name..." class="text-input" value="{{ old('first_name', $bio->first_name ?? '') }}"/>
							<x-form-error key="first_name" />
                        </div>
                        <div>
							<x-label>Middle Initial</x-label>
							<x-text-input name="middle_initial" type="text" placeholder="Middle Initial..." class="text-input" value="{{ old('middle_initial', $bio->middle_initial ?? '') }}"/>
                        </div>
                        <div>
							<x-label>Last Name</x-label>
							<x-text-input name="last_name" type="text" placeholder="Last Name..." class="text-input" value="{{ old('last_name', $bio->last_name ?? '') }}"/>
							<x-form-error key="last_name" />
                        </div>
                    </div>

					<div class="mb-5.5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
							<x-label>Email</x-label>
							<x-text-input name="email" type="text" placeholder="Email..." class="text-input" value="{{ old('email', $bio->email ?? '') }}"/>
							<x-form-error key="email" />
                        </div>
                        <div>
							<x-label>Phone</x-label>
							<x-text-input name="phone_number" type="text" placeholder="Phone Number..." class="text-input" value="{{ old('phone_number', $bio->phone_number ?? '') }}"/>
							<x-form-error key="phone_number" />
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
                                        {{ isset($bio) && $bio->practice_areas && $bio->practice_areas->contains($practice_area->id) ? 'checked' : '' }}
                                    >
                                    <label for="practice_area_{{ $practice_area->id }}">{{ $practice_area->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Education">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                                @foreach ($education as $education_item)
                                    <div>
                                        <input
                                            type="checkbox"
                                            id="education_{{ $education_item->id }}"
                                            name="education[]"
                                            value="{{ $education_item->id }}"
                                            {{ isset($bio) && $bio->education && $bio->education->contains($education_item->id) ? 'checked' : '' }}
                                        >
                                        <label for="education_{{ $education_item->id }}">{{ $education_item->name }}</label>
                                    </div>
                                @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Admission">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($admissions as $admission)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="admission_{{ $admission->id }}"
                                        name="admissions[]"
                                        value="{{ $admission->id }}"
                                        {{ isset($bio) && $bio->admissions && $bio->admissions->contains($admission->id) ? 'checked' : '' }}
                                    >
                                    <label for="admission_{{ $admission->id }}">{{ $admission->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>


                    <x-accordion-panel header="Languages">
                        <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($languages as $language)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="language_{{ $language->id }}"
                                        name="languages[]"
                                        value="{{ $language->id }}"
                                        {{ isset($bio) && $bio->languages && $bio->languages->contains($language->id) ? 'checked' : '' }}
                                    >
                                    <label for="language_{{ $language->id }}">{{ $language->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Levels">
                        <div class="grid grid-cols-1 sm:grid-cols-4 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($levels as $level)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="level_{{ $level->id }}"
                                        name="levels[]"
                                        value="{{ $level->id }}"
                                        {{ isset($bio) && $bio->levels && $bio->levels->contains($level->id) ? 'checked' : '' }}
                                    >
                                    <label for="level_{{ $level->id }}">{{ $level->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Memberships">
                        <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($memberships as $membership)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="membership_{{ $membership->id }}"
                                        name="memberships[]"
                                        value="{{ $membership->id }}"
                                        {{ isset($bio) && $bio->memberships && $bio->memberships->contains($membership->id) ? 'checked' : '' }}
                                    >
                                    <label for="membership_{{ $membership->id }}">{{ $membership->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Licenses">
                        <div class="grid grid-cols-1 sm:grid-cols-4 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($licenses as $license)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="license_{{ $license->id }}"
                                        name="licenses[]"
                                        value="{{ $license->id }}"
                                        {{ isset($bio) && $bio->licenses && $bio->licenses->contains($license->id) ? 'checked' : '' }}
                                    >
                                    <label for="license_{{ $license->id }}">{{ $license->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Awards">
                        <div class="grid grid-cols-1 sm:grid-cols-3 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($awards as $award)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="award_{{ $award->id }}"
                                        name="awards[]"
                                        value="{{ $award->id }}"
                                        {{ isset($bio) && $bio->awards && $bio->awards->contains($award->id) ? 'checked' : '' }}
                                    >
                                    <label for="award_{{ $award->id }}">{{ $award->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>


                    <x-accordion-panel header="News">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($news as $news_item)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="news_{{ $news_item->id }}"
                                        name="news[]"
                                        value="{{ $news_item->id }}"
                                        {{ isset($bio) && $bio->news && $bio->news->contains($news_item->id) ? 'checked' : '' }}
                                    >
                                    <label for="news_{{ $news_item->id }}">{{ $news_item->headline }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>


                    <x-accordion-panel header="Engagements">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($engagements as $engagement)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="engagement_{{ $engagement->id }}"
                                        name="engagements[]"
                                        value="{{ $engagement->id }}"
                                        {{ isset($bio) && $bio->engagements && $bio->engagements->contains($engagement->id) ? 'checked' : '' }}
                                    >
                                    <label for="engagement_{{ $engagement->id }}">{{ $engagement->title }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    <x-accordion-panel header="Multimedia">
                        <div class="grid grid-cols-1 sm:grid-cols-2 text-sm gap-4 bg-slate-50 p-4">
                            @foreach ($multimedias as $multimedia)
                                <div>
                                    <input
                                        type="checkbox"
                                        id="multimedia_{{ $multimedia->id }}"
                                        name="multimedias[]"
                                        value="{{ $multimedia->id }}"
                                        {{ isset($bio) && $bio->multimedias && $bio->multimedias->contains($multimedia->id) ? 'checked' : '' }}
                                    >
                                    <label for="multimedia_{{ $multimedia->id }}">{{ $multimedia->headline }}</label>
                                </div>
                            @endforeach
                        </div>
                    </x-accordion-panel>

                    </section>

                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('bio.index') }}"
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
