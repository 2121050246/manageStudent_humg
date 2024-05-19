@extends('layout.master')


@section('title')
    Thêm khoa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.department.post')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Mã khoa :</label>
                    <input type="text" name="code" class="form-control" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tên khoa :</label>
                    <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
                  </div>









                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


