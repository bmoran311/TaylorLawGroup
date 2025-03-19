<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <header style="margin-top: 25px;">
        <x-header.header />
        <x-main.banner :h1Text="$headerInfo['h1Text']" :h4Text="$headerInfo['h4Text']" :bannerText="$headerInfo['bannerText']" />
    </header>

    @yield('content')

    @if (!request()->is('testimonials'))
        <x-home.testimonials />
    @endif
    <x-footer.contact />

    <footer>
        <x-footer.footer />
    </footer>
</body>

</html>
