@extends('master')

@section('content')
    <div class="container">
        <div>
        </div>
        <br>
        <br>
        <h3 style="text-align: center">Danh Sách Nhân Viên</h3>
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(session('success'))
                    <h3>Update thanh cong</h3>
                @endif
                    @if(session('success_store'))
                        <h3>Add nhan vien thanh cong</h3>
                    @endif
                @if(session('success_delete'))
                    <h3> Delete thanh cong</h3>
                @endif
                <table class="table table-bordered" style="text-align: center">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Group</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th colspan="2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($employees)==0)
                        <tr>
                            <td colspan="6">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->Group->name}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->gender}}</td>
                                <td>{{$employee->phone}}</td>
                                <td><a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}"><img
                                            resource="../images/update.png">Update</a></td>
                                <td><a class="btn btn-danger"
                                       href="{{route('employee.destroy',$employee->id)}}"
                                       onclick="return confirm('You are delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
                <br>
                <div><a class="btn btn-primary" href="{{route('employee.create')}}">Add Employee</a></div>
            </div>
        </div>

    </div>

@endsection
