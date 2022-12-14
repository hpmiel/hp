<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="fa" direction="rtl" dir="rtl" style="dirction: rtl" >
	<!--begin::Head-->
	<head>
        <title>My app</title>
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"  />
        <!--begin::Fonts(mوatory for all pages)-->
        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700')}}" />
        <!--end::Fonts-->
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link  rel="stylesheet" type="text/css" href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(' assets/plugins/custom/datatables/datatables.bundle.css')}}"/>
        <!--end::Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
        <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href={{asset('assets/css/style.bundle.rtl.css')}} rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="page-loading-enabled page-loading header-tablet-and-mobile-fixed aside-enabled">
		@include('layout.partials.theme-mode._init')
    <!--layout-partial:partials/theme-mode/_init.html-->
		<!--layout-partial:partials/_loader.html-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                @include('layout.layout.aside._base')
				<!--layout-partial:layout/aside/_base.blade.php-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('layout.layout.header._base')
                    <!--layout-partial:layout/header/_base.blade.php-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
                            <div id="kt_content_container" class="container-fluid">
                            @yield('body')
                            </div>

						</div>
						<!--end::Post-->
                            @include('layout.layout._footer')
					</div>
					<!--end::Content-->
					<!--layout-partial:layout/_footer.blade.php-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--layout-partial:partials/_drawers.html-->
		<!--end::Main-->
		<!--layout-partial:partials/_scrolltop.html-->
		<!--begin::Modals-->
		<!--layout-partial:partials/modals/_invite-friends.html-->
		<!--layout-partial:partials/modals/users-search/_main.html-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "{{asset('assets')}}/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
