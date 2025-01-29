<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <header>
        <x-main-header />
        <x-attorney-banner />
    </header>
        
    @yield('content')  

    <x-footer-contact />      

    <footer>
	    <x-main-footer />        	
	</footer>
</body>

</html>