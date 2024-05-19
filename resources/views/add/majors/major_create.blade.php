@extends('layout.master')


@section('title')
    Thêm chuyên ngành
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.major.post')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Tên chuyên nghành  :</label>
                    <input type="text" name="major_name" class="form-control" aria-describedby="emailHelp">
                  </div>




                  <div class="mb-3">
                    <label  class="form-label">Tên khoa  : </label>

                      <select  class="form-control" name="department_id"  aria-label="Default select example">
                        <option selected>Chọn</option>
                        @foreach ($data as $item)

                        <option value="{{$item->id}}">{{$item->department_name}}</option>

                        @endforeach


                        </select>
                  </div>








                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


