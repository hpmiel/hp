<!--begin::Aside-->
<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
	<!--begin::Aside Toolbarl-->
	<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
		<!--begin::Aside user-->
		<!--layout-partial:layout/aside/_toolbar.blade.php-->
        @include('layout.layout.aside._toolbar')
		<!--end::Aside user-->
	</div>
	<!--end::Aside Toolbarl-->
	<!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid">
		<!--layout-partial:layout/aside/_menu.blade.php-->
        @include('layout.layout.aside._menu')
	</div>
	<!--end::Aside menu-->
	<!--begin::Footer-->

	<!--end::Footer-->
</div>
<!--end::Aside-->
