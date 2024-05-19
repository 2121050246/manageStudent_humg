@extends('layout.master')


@section('title')
    Sửa tài khoản
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Tên tài khoản :</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Mật khẩu : </label>
                    <input type="password"  value="{{$data->password}}" name="password" class="form-control">
                  </div>

                <div class="mb-3">
                  <label  class="form-label">Email : </label>
                  <input type="email"  value="{{$data->email}}" name="email" class="form-control" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                  <label  class="form-label">Vai trò : </label>

                    <select  class="form-control " name="role"   aria-label="Default select example">


                        <option {{$data->roles === 'admin' ? 'selected' : ''}} value="admin" >admin</option>
                        <option {{$data->roles === 'student' ? 'selected' : ''}} value="student">student</option>

                      </select>
                </div>


                <button type="submit" class="btn btn-primary">Sửa</button>
              </form>
        </div>


     </div>
</div>
@endsection


