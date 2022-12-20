@extends('layout.index')

@section('body')
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
                            <x-widget.button color="danger">
                                حذف
                            </x-widget.button>
                        </td>
                    </tr>
                @endforeach

            </x-widget.table>

        </x-widget.card>
    </div>

@endsection
