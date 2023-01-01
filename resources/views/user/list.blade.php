@extends('layout.index')

@section('body')

    <div class="row">
        <div class="col-lg-6 ">
            <!--begin::لیست Widget 8-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-dark">اخرین محصولات</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">هداor
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">درگاه ها</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="مدت ها قبل از نشستن برای قرار دادن قلم دیجیتال روی کاغذ ، باید مطمئن شوید که باید بنشینید و بنویسید"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">اشتراک</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">صورتحساب</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">بیانه ها</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Tags-->
                                                <span class="form-check-label text-muted fs-6">وضعیت</span>
                                                <!--end::Tags-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">تنظیمات</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3">
                    <!--begin::آیتم-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">جام و سبز</a>
                                <span class="text-muted fw-semibold d-block pt-1">بصری خیره کننده است</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::بخش-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-ستاره-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">4.2</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                            <!--end::بخش-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-10.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">الگوهای صورتی</a>
                                <span class="text-muted fw-semibold d-block pt-1">دور و بر زنانه</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::بخش-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-ستاره-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.0</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                            <!--end::بخش-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">هنر انتزاعی</a>
                                <span class="text-muted fw-semibold d-block pt-1">اراده برای جذب خوانندگان</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::بخش-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-ستاره-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                            <!--end::بخش-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-9.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">بشقاب دسرها</a>
                                <span class="text-muted fw-semibold d-block pt-1">روند غذا و الهام بخش</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::بخش-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-ستاره-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">3.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                            <!--end::بخش-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::آیتم-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::لیست Widget 8-->
        </div>
        <div class="col-lg-6"></div>
    </div>

    <div class="row">
        <div class="mb-5 col-lg-10 m-auto">

            <x-widget.card :padding="false">
                <x-slot:header>
                <span class="card-label fw-bold fs-3 mb-1">
                    لیست کاربر ها
                </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                    تمامی کاربر های سیستم اینجا هستند
                </span>
                </x-slot:header>

                <x-slot:header_toolbar>
                    <x-widget.button href="{{ url('/user/create') }}" :light="false">
                        کاربر جدید
                    </x-widget.button>
                </x-slot:header_toolbar>


                <x-widget.table>
                    <x-slot:th>
                        <th>#</th>
                        <th>نام</th>
                        <th>وضعیت</th>
                        <th>نام کاربری</th>
                        <th>رایانامه</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </x-slot:th>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <x-widget.badge>فعال</x-widget.badge>
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <x-widget.button color="warning">
                                    ویرایش
                                </x-widget.button>
                                <x-widget.button color="danger" href="{{ url('user/' . $user->id . '/delete') }}">
                                    حذف
                                </x-widget.button>
                            </td>
                        </tr>
                    @endforeach

                </x-widget.table>

            </x-widget.card>
        </div>
    </div>



@endsection
