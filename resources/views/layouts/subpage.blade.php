<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
	<header>	
        <x-main-header :practice-areas="$practice_areas" />
        <x-main-banner h1Text="OUR ATTORNEYS" h4Text="MEET OUR PEOPLE" bannerText="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis." />
    </header>

    @yield('content') 

	<x-home-testimonials /> 
    <x-footer-contact />      

    <footer>
	    <x-main-footer />        	
	</footer>
</body>
</html>