@extends('classics.layouts.master')

@section('content')
    @include('classics.partials.nav')

    <div class="container-fluid">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Create_at</th>
                <th scope="col">Update_at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->created_at }}</td>
                    <td>{{ $customer->updated_at }}</td>
                    <td>
                        <a href="{{route('king.user.show', $customer->id)}}"
                           class="btn
                        btn-primary btn-sm">Add</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop