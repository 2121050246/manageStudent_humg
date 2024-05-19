@extends('layout.master')


@section('title')
    Thêm  môn học
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.course.post')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Mã môn học:</label>
                    <input type="text" name="subject_code" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Tên môn học:</label>
                    <input type="text" name="name_subject" class="form-control" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Số chỉ  : </label>

                      <select  class="form-control " name="name_number"  aria-label="Default select example">
                          <option selected>Chọn</option>
                            @for ($i = 2 ; $i <= 4 ; $i++ )
                                <option value= "{{ $i }}">{{ $i }}</option>

                            @endfor


                        </select>
                  </div>


                <div class="mb-3">
                  <label  class="form-label">Chuyên ngành  : </label>

                    <select  class="form-control " name="name_major"  aria-label="Default select example">
                        <option selected>Chọn</option>
                        @foreach ($major as $m)
                            <option value="{{$m->id}}">{{$m->major_name}}</option>
                        @endforeach



                      </select>
                </div>

                <div class="mb-3">
                    <label  class="form-label">Năm  : </label>

                      <select  class="form-control " name="name_year"  aria-label="Default select example">
                          <option selected>Chọn</option>
                          @foreach ($year as $y)
                              <option value="{{$y->id}}">{{$y->year_name}}</option>
                          @endforeach



                        </select>
                  </div>


                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


