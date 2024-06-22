@extends('admin.main')

@section('content')
    <div class="card-body">
        <table class="table table-sm table-hover table-bordered text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">SĐT</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Thành phố</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th class="align-middle" scope="row">{{ $user->user_id }}</th>
                    <td class="align-middle">{{ $user->full_name }}</td>
                    <td class="align-middle">{{ $user->birthday }}</td>
                    <td class="align-middle">{{ $user->gender }}</td>
                    <td class="align-middle">{{ $user->phone }}</td>
                    <td class="align-middle">{{ $user->address }}</td>
                    <td class="align-middle">{{ $user->city }}</td>
                    <td class="align-middle">
                        <form action="/admin/users/info/{{ $user->user_id }}" method="GET">
                            <button class="btn btn-info">
                                <i class="fas fa-solid fa-info-circle"></i>
                            </button>
                        </form>
                        <form action="" method="post">
                            <button class="btn btn-secondary">
                                <i class="fas fa-solid fa-pen"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
