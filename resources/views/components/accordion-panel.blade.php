<div x-data="{open: false}">
    <h3 class="mb-3 block font-medium text-black dark:text-white border-b pb-2 mb-4 flex items-center justify-between">
        <span>{{ $header }}</span>
        <button @click="open = !open" class="font-normal text-xs" type="button">
            <span x-cloak x-show="open">Close</span>
            <span x-cloak x-show="!open">Open</span>
        </button>
    </h3>
    <div x-cloak x-show="open">
        {{ $slot }}
    </div>
</div>
