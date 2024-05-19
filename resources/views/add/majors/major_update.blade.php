@extends('layout.master')


@section('title')
    Sửa chuyên nghành
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="">
                @csrf


                  <div class="mb-3">
                    <label  class="form-label">Tên chuyên nghành :</label>
                    <input type="text" name="major_name"  value="{{$item->major_name}}"  class="form-control" aria-describedby="emailHelp">
                  </div>




                  <div class="mb-3">
                    <label  class="form-label">Tên khoa  : </label>

                      <select  class="form-control" name="department_id"   aria-label="Default select example">

                        @foreach ($data as $d)

                        <option value="{{$d->id}}" {{$d->id === $item->department_id ? 'selected' : ''}} >{{$d->department_name}}</option>

                        @endforeach


                        </select>
                  </div>




                <button type="submit" class="btn btn-primary">Sửa</button>
              </form>
        </div>


     </div>
</div>
@endsection


