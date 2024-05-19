@extends('layout.master')


@section('title')
    Thêm năm học
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.year.post')}}">
                @csrf

                <div class="mb-3">
                    <label  class="form-label">Năm : </label>

                      <select  class="form-control" name="year"  aria-label="Default select example">
                        <option selected>Chọn</option>



                        @for($i = 2019; $i <= $currentYear; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor


                        </select>
                  </div>



                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


