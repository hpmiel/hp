@extends('layout.index')

@section('body')

    <x-card>

        <x-slot:header>
            <h3>افزودن کاربر جدید</h3>
        </x-slot:header>

        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ url('/user/create') }}" method="post"
              autocomplete="off">
            @csrf


            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> نام</span>
                </label>
                <input type="text" class="form-control form-control-solid" name="name" value="">
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> نام کاربری</span>
                </label>
                <input type="text" class="form-control form-control-solid" name="username" value="">
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> گروه کابری</span>
                </label>
                <select class="form-control" name="group_id">
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> گذرواژه</span>
                </label>
                <input type="text" class="form-control form-control-solid" name="password" value="">
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> تکرار گذرواژه</span>
                </label>
                <input type="text" class="form-control form-control-solid" name="repassword" value="">
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> رایانامه</span>
                </label>
                <input type="email" class="form-control form-control-solid" name="email" value="">
            </div>

            <div class="fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span> تلفن همراه</span>
                </label>
                <input type="number" class="form-control form-control-solid" name="cellphone" value="">
            </div>

            <div class="fv-row mb-7">
                <button type="submit" class="btn btn-success">ذخیره</button>
                <a href="{{ url('/user') }}" class="btn btn-primary">بازگشت</a>
            </div>

        </form>

    </x-card>

@endsection
