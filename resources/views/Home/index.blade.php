<!DOCTYPE html>
<html lang="en">
    <head>
        @include('home.head')
    </head>
	
	<body>
		<!-- HEADER -->
		<header>
			@include('home.header')
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			@include('home.nav')
		</nav>
		<!-- /NAVIGATION -->

		<!--COLLECTION SECTION -->
		
		<!-- /SECTION -->
            @include('home.collectionSection')

		<!--NEW PRODUCTS SECTION -->
		@include('home.newCollection')
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		@include('home.hotdeal')
		<!-- /HOT DEAL SECTION -->

		<!--TOP DEALS SECTION -->
		@include('home.topselling')
		<!-- /SECTION -->

		<!-- SECTION -->
		
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		@include('home.contact')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		@include('home.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		@include('home.js')
	</body>
</html>
