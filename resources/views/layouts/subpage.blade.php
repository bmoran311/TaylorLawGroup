<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
	<header>	
        <x-main-header />
        <x-main-banner :h1Text="$headerInfo['h1Text']" :h4Text="$headerInfo['h4Text']" :bannerText="$headerInfo['bannerText']" />
    </header>

    @yield('content') 

	<x-home-testimonials /> 
    <x-footer-contact />      

    <footer>
	    <x-main-footer />        	
	</footer>
</body>
</html>