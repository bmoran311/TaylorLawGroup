<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body>
    <header>      
      	<x-main-header />
		<x-home-header />      
  	</header>

    <x-home-about />   
    <x-home-team />   
    <x-home-software />   
    
	<x-home-testimonials />      
	<x-footer-contact />       

	<footer>
		<x-main-footer />        	
	</footer>
</body>
</html>
