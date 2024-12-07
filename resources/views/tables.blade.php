<x-app-layout>

 <!-- Breadcrumb Start -->
<div
    class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
    Tables
    </h2>

    <nav>
    <ol class="flex items-center gap-2">
        <li>
        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
        </li>
        <li class="font-medium text-primary">Tables</li>
    </ol>
    </nav>
</div>
<!-- Breadcrumb End -->

<!-- ====== Table Section Start -->
<div class="flex flex-col gap-10">
    <!-- ====== Table One Start -->
    @include('partials.table-01')
    <!-- ====== Table One End -->

    <!-- ====== Table Two Start -->
    @include('partials.table-02')
    <!-- ====== Table Two End -->

    <!-- ====== Table Three Start -->
    @include('partials.table-03')
    <!-- ====== Table Three End -->
</div>

</x-app-layout>
