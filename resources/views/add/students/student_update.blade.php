@extends('layout.master')


@section('title')
    Sửa sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label  class="form-label">Mã sinh viên  : </label>
                    <input type="text" class="form-control" value="{{$student_id->student_code}}" name="student_code" id="">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tên sinh viên  : </label>
                    <input type="text" class="form-control" value="{{$student_id->student_name}}" name="student_name" id="">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Ngày sinh  : </label>
                    <input type="date" class="form-control" value="{{$student_id->student_birth}}" name="student_birth" id="">
                  </div>


                <div class="mb-3">
                    <label  class="form-label">Giới tính : </label>

                      <select  class="form-control" name="student_gender"   aria-label="Default select example">

                        <option {{$student_id->student_gender == 'nam' ? 'selected' : ''}} value="nam" >nam</option>
                        <option  {{$student_id->student_gender == 'nữ' ? 'selected' : ''}} value="nữ" >nữ</option>

                        </select>
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Điện thoại  : </label>
                    <input type="text" class="form-control" value="{{$student_id->student_phone}}" name="student_phone" id="">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Dân tộc : </label>
                    <input type="text" class="form-control" value="{{$student_id->student_nation}}" name="student_nation" id="">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Địa chỉ : </label>
                    <input type="text" class="form-control" value="{{$student_id->student_address}}" name="student_address" id="">
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Ảnh  : </label>
                    <input type="file" class="form-control"  name="student_img" id="">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Chuyên nghành : </label>

                      <select  class="form-control" name="major_id"   aria-label="Default select example">
                        <option selected>Chọn</option>
                        @foreach ($major as $item)
                            <option {{$item->id == $student_id->major_id ? 'selected' : ""}} value="{{$item->id}}" >{{$item->major_name}}</option>

                        @endforeach
                        </select>
                  </div>





                  <div class="mb-3">
                    <label  class="form-label">Niên khoá : </label>

                      <select  class="form-control" name="student_year"  aria-label="Default select example">
                        <option selected>Chọn</option>
                        @for ($i = 2019 ; $i <= $currentYear ; $i++)
                            <option {{$i == $student_id->student_year ? 'selected' : ''}} value="{{$i}}" >{{$i}}</option>
                        @endfor



                        </select>
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Trạng thái : </label>

                      <select  class="form-control" name="student_status"  aria-label="Default select example">

                        <option {{'Đang học' == $student_id->student_status ? 'selected' : ''}} value="Đang học" >Đang học</option>
                        <option {{'Không' == $student_id->student_status ? 'selected' : ''}} value="Không" >Không</option>

                        </select>
                  </div>



                <button type="submit" class="btn btn-primary">Sửa</button>
              </form>
        </div>


     </div>
</div>
@endsection


