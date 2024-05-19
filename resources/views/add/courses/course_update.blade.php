@extends('layout.master')


@section('title')
    Sửa  môn học
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Mã môn học:</label>
                    <input type="text" value="{{$item->course_code}}" name="subject_code" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Tên môn học:</label>
                    <input type="text" name="name_subject" value="{{$item->course_name}}" class="form-control" aria-describedby="emailHelp">
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Số chỉ  : </label>

                      <select  class="form-control " name="name_number"  aria-label="Default select example">

                            @for ($i = 2 ; $i <= 4 ; $i++ )
                                <option {{$item->course_number === $i ? 'selected' :''}}  value= "{{$i}}">{{$i}}</option>

                            @endfor


                        </select>
                  </div>



                <div class="mb-3">
                  <label  class="form-label">Chuyên ngành  : </label>

                    <select  class="form-control " name="name_major"  aria-label="Default select example">

                        @foreach ($major as $m)
                            <option {{$item->major_id === $m->id ? 'selected' : ''}} value="{{$m->id}}">{{$m->major_name}}</option>
                        @endforeach



                      </select>
                </div>

                <div class="mb-3">
                    <label  class="form-label">Năm  : </label>

                      <select  class="form-control " name="name_year"  aria-label="Default select example">

                          @foreach ($year as $y)
                              <option {{$item->year_id === $y->id ? 'selected' : ''}} value="{{$y->id}}">{{$y->year_name}}</option>
                          @endforeach



                        </select>
                  </div>


                <button type="submit" class="btn btn-primary">Sửa</button>
              </form>
        </div>


     </div>
</div>
@endsection


