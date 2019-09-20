@extends('master')

@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <div style="text-align: center"><h3>Update Employee</h3></div>
        <br>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('employee.update',$employee->id)}}" method="post" class="form-control">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pwd">Group</label>
                            <select name="group_id" class="form-control">
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">
                                        {{$group->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" id="pwd" name="name" value="{{$employee->name}}"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="email">Birthday</label>
                            <input type="date" class="form-control" id="pwd" name='birthday'
                                   value="{{$employee->birthday}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">GenDer</label>
                            <input type="text" class="form-control" id="pwd" name='gender' value="{{$employee->gender}}"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="number" class="form-control" id="pwd" name="phone" value="{{$employee->phone}}"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="email">ID_card</label>
                            <input type="text" class="form-control" id="pwd" name="id_card"
                                   value="{{$employee->id_card}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="pwd" name="email" value="{{$employee->email}}"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="email">Addess</label>
                            <input type="text" class="form-control" id="pwd" name="address"
                                   value="{{$employee->addresss}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-primary" href="{{route('employee.index')}}">Back</a>
            </div>
        </form>
    </div>
@endsection
