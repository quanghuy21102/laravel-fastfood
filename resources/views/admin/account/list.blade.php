@extends('admin.main')

@section('content')
    <div class="card-body">
        <table class="table table-sm table-hover table-bordered text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $key => $account)
                <tr>
                    <th class="align-middle" scope="row">{{ $account->account_id }}</th>
                    <td class="align-middle">{{ $account->email }}</td>
                    <td class="align-middle">{{ $account->password }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
