	@include('layouts.header.header')		
	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		@include('layouts.Load.Load')		
		<!-- /Loader -->
		@include('layouts.sidebar.main-sidebar')		
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.header.main-header')			
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
            	@include('layouts.footer.footer')
				@include('layouts.css_script.script.scripts')	
	</body>
</html>