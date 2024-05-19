@extends('layout.master')


@section('title')
    Thêm tài khoản
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.account.create_post')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Tên tài khoản :</label>
                    <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Mật khẩu : </label>
                    <input type="password" name="password" class="form-control">
                  </div>

                <div class="mb-3">
                  <label  class="form-label">Email : </label>
                  <input type="email" name="email" class="form-control" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                  <label  class="form-label">Vai trò : </label>

                    <select  class="form-control " name="role"  aria-label="Default select example">
                        <option selected>Chọn</option>
                        <option value="admin">admin</option>
                        <option value="student">student</option>

                      </select>
                </div>


                <button type="submit" class="btn btn-primary">Tạo</button>



              </form>
              {{-- <a class="btn btn-danger" href="{{route('back')}}">Huỷ</a> --}}
        </div>


     </div>
</div>
@endsection


