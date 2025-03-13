<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Memberships
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('membership.index') }}">Memberships</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-3">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($membership) ? 'Edit' : 'Create' }} Membership
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($membership) ? route('membership.update', $membership->id) : route('membership.store') }}" method="POST">
                    @csrf
                    @if(isset($membership))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Membership Name</x-label>
                            <x-text-input name="name" type="text" placeholder="Membership Name..." class="text-input" value="{{ old('name', $membership->name ?? '') }}"/>
                            <x-form-error key="name" />
                        </div>
					</div>
					<div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Type</x-label>
                            <select name="type" id="type" class="text-input">
                                <option value="">Select Type</option>
                                <option value="State Bar" {{ old('type', $membership->type ?? '') == 'State Bar' ? 'selected' : '' }}>State Bar</option>
                                <option value="National Bar" {{ old('type', $membership->type ?? '') == 'National Bar' ? 'selected' : '' }}>National Bar</option>
                                <option value="Specialty Bar" {{ old('type', $membership->type ?? '') == 'Specialty Bar' ? 'selected' : '' }}>Specialty Bar</option>
                                <option value="Miscellaneous" {{ old('type', $membership->type ?? '') == 'Miscellaneous' ? 'selected' : '' }}>Miscellaneous</option>
                            </select>
                            <x-form-error key="type" />
                        </div>
					</div>

                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('membership.index') }}"
                                class="btn-white"
                                type="submit">
                                Cancel
                            </a>
                            <button
                                class="btn-primary"
                                type="submit"
                            >Save</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
