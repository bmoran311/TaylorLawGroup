<x-app-layout>
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Contacts
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"><a class="font-medium" href="{{ route('contact.index') }}">Contacts</a></li>
    </ol>
    </nav>
</div>

<div class="grid grid-cols-5 gap-8">
    <div class="col-span-5 xl:col-span-4">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                {{ isset($contact) ? 'Edit' : 'Create' }} Contact
                </h3>
            </div>
            <div class="p-7">
                <form action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($contact))
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif
                    <div class="mb-5.5 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
							<x-label>First Name</x-label>
							<x-text-input name="first_name" type="text" placeholder="First Name..." class="text-input" value="{{ old('first_name', $contact->first_name ?? '') }}"/>
							<x-form-error key="first_name" />
                        </div>                       
                        <div>
							<x-label>Last Name</x-label>
							<x-text-input name="last_name" type="text" placeholder="Last Name..." class="text-input" value="{{ old('last_name', $contact->last_name ?? '') }}"/>
							<x-form-error key="last_name" />
                        </div>
                    </div>

					<div class="mb-5.5 grid grid-cols-1 sm:grid-cols-3 gap-4">  
                        <div>
							<x-label>Company</x-label>
							<x-text-input name="company" type="text" placeholder="Company..." class="text-input" value="{{ old('company', $contact->company ?? '') }}"/>							
                        </div>
                        <div>
							<x-label>Email</x-label>
							<x-text-input name="email" type="text" placeholder="Email..." class="text-input" value="{{ old('email', $contact->email ?? '') }}"/>
							<x-form-error key="email" />
                        </div>
                        <div>
							<x-label>Phone</x-label>
							<x-text-input name="phone_number" type="text" placeholder="Phone Number..." class="text-input" value="{{ old('phone_number', $contact->phone_number ?? '') }}"/>
							<x-form-error key="phone_number" />
                        </div>
                    </div>                    

                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full">
                            <x-label>Message</x-label>
                            <textarea
                                name="message"
                                rows="10"
                                placeholder="Message..."
                                class="w-full rounded-lg border-[1.5px] border-primary bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input dark:text-white"
                            >{{ old('message', $contact->message ?? '') }}</textarea>
                        </div>
                    </div>
                                       
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="flex justify-end gap-4.5">
                            <a href="{{ route('contact.index') }}"
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
