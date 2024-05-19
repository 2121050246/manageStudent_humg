@extends('layout.master')


@section('title')
    Thêm sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.student.post')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label  class="form-label">Mã sinh viên  : </label>
                    <input type="text" class="form-control" name="student_code" id="">

                    @error('student_code')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tên sinh viên  : </label>
                    <input type="text" class="form-control" name="student_name" id="">

                    @error('student_name')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Ngày sinh  : </label>
                    <input type="date" class="form-control" name="student_birth" id="">

                    @error('student_birth')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>


                <div class="mb-3">
                    <label  class="form-label">Giới tính : </label>

                      <select  class="form-control" name="student_gender"  aria-label="Default select example">
                        <option selected></option>
                        <option value="nam" >nam</option>
                        <option value="nữ" >nữ</option>

                        </select>

                        @error('student_gender')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Điện thoại  : </label>
                    <input type="text" class="form-control" name="student_phone" id="">

                    @error('student_phone')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Dân tộc : </label>
                    <input type="text" class="form-control" name="student_nation" id="">
                    @error('student_nation')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Thành phố : </label>

                      <select  class="form-control" name="student_address"  aria-label="Default select example">
                        <option selected></option>
                        @foreach ($cities as $city)
                            <option value="{{$city['name']}}" >{{$city['name']}}</option>

                        @endforeach
                        </select>

                        @error('student_address')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Ảnh  : </label>
                    <input type="file" class="form-control" name="student_img" id="">


                    @error('student_img')
                    <p style="color: red">{{$message}}</p>
                 @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Chuyên nghành : </label>

                      <select  class="form-control" name="major_id"  aria-label="Default select example">
                        <option selected></option>
                        @foreach ($major as $item)
                            <option value="{{$item->id}}" >{{$item->major_name}}</option>

                        @endforeach
                        </select>

                        @error('major_id')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tài khoản : </label>

                      <select  class="form-control" name="user_id"  aria-label="Default select example">
                        <option selected></option>
                        @foreach ($user as $u)

                            <option value="{{$u->id}}" >{{$u->name}}</option>

                        @endforeach
                        </select>

                        @error('user_id')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>




                  <div class="mb-3">
                    <label  class="form-label">Niên khoá : </label>

                      <select  class="form-control" name="student_year"  aria-label="Default select example">
                        <option selected></option>
                        @for ($i = 2019 ; $i <= $currentYear ; $i++)
                            <option value="{{$i}}" >{{$i}}</option>
                        @endfor



                        </select>


                        @error('student_year')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Trạng thái : </label>

                      <select  class="form-control" name="student_status"  aria-label="Default select example">
                        <option selected></option>
                        <option value="Đang học" >Đang học</option>
                        <option value="Không" >Không</option>

                        </select>
                        @error('student_status')
                        <p style="color: red">{{$message}}</p>
                     @enderror
                  </div>



                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


