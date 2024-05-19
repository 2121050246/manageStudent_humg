@extends('layout.master')


@section('title')
    Sửa khoa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Mã khoa :</label>
                    <input type="text" name="code" value="{{$data->department_code}}" class="form-control" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tên khoa :</label>
                    <input type="text" name="name"  value="{{$data->department_name}}"  class="form-control" aria-describedby="emailHelp">
                  </div>









                <button type="submit" class="btn btn-primary">Sửa</button>
              </form>
        </div>


     </div>
</div>
@endsection


