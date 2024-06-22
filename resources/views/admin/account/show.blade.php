@extends('admin.main')

@section('content')
    <div class="card-body">
        <form action="" method="GET" enctype="multipart/form-data" class="text-center">
            @csrf
            <div class="container-fluid d-flex text-center">
                <div class="col-md-4 border-right">
                    <h2>Tài khoản</h2>
                    <div class="form-group d-flex align-items-center">
                        <label class="m-0 px-2" for="">Email</label>
                        <input class="form-control" type="email" id="email" value="{{ $user->account->email }}" disabled>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="m-0 px-2" for="">Created</label>
                        <input class="form-control w-75" type="datetime-local" id="created_at" value="{{ $user->account->created_at }}" disabled>
                    </div>
                </div>
                <div class="col-md-8 border-left">
                    <h2>Thông tin</h2>
                    <div class="form-group d-flex align-items-center">
                        <label class="m-0 px-2" for="">Name</label>
                        <input class="form-control text-center" type="text" id="full_name" value="{{ $user->full_name }}" disabled>

                        <label class="m-0 px-2" for="">Birthday</label>
                        <input class="form-control col-3 text-center" type="date" id="birthday" value="{{ $user->birthday }}" disabled>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="m-0 px-2" for="">Gender</label>
                        <input class="form-control col-2 text-center" type="text" id="gender" value="{{ $user->gender }}" disabled>

                        <label class="m-0 px-2" for="">Phone</label>
                        <input class="form-control text-center" type="tel" id="phone" value="{{ $user->phone }}" disabled>

                        <label class="m-0 px-2" for="">City</label>
                        <input class="form-control col-3 text-center" type="text" id="city" value="{{ $user->city }}" disabled>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="m-0 px-2" for="">Address</label>
                        <input class="form-control text-center" type="text" id="address" value="{{ $user->address }}" disabled>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Cập nhật thông tin</button>
        </form>
        <button class="btn btn-danger" onclick="window.location.href='{{ route('admin.users.list') }}'">Quay lại</button>
    </div>
@endsection
