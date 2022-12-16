@extends('layout.index')

@section('body')
    <x-card>
        <x-slot:header>
            <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm">کاربر جدید</a>
        </x-slot:header>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>نام کاربری</th>
                <th>رایانامه</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <button class="btn btn-warning">ویرایش</button>
                        <button class="btn btn-danger">حذف</button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </x-card>

@endsection
