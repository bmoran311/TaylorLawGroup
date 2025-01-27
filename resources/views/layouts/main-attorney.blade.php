<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <header>
        <x-main-header :practice-areas="$practice_areas" />
        <x-attorney-banner />
    </header>

    <x-attorney-header-block />
    
    @yield('content')  

    <x-footer-contact />      

    <footer>
	    <x-main-footer />        	
	</footer>
</body>

</html>