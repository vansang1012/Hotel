@extends('master')

@section('content')
    <div class="container">
        <div style="text-align: center"><h3>Create Employee</h3></div>
        <br>
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
        <form action="{{route('employee.store')}}" method="post" class="form-control">
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
                            <input type="text" class="form-control" id="pwd" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Birthday</label>
                            <input type="date" class="form-control" id="pwd" name='birthday' required>
                        </div>
                        <div class="form-group">
                            <label for="email">GenDer</label>
                            <input type="text" class="form-control" id="pwd" name='gender' required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="number" class="form-control" id="pwd" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">ID_card</label>
                            <input type="text" class="form-control" id="pwd" name="id_card" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="pwd" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Addess</label>
                            <input type="text" class="form-control" id="pwd" name="address" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Employee</button>
                <a class="btn btn-primary" href="{{route('employee.index')}}">Back</a>
            </div>
        </form>
    </div>
@endsection
