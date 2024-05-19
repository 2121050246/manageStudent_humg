@extends('layout.master')


@section('title')
    Thông tin sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

        @if (isset($student))

        <div class="col-xl-12 col-md-12 col-12  p-4">
            <div class="row">
                <div class="col-xl-5 col-md-5 col-5"></div>
                <div class="img-student col-xl-2 col-md-2 col-4">
                    <img src="{{$student->student_path_full}}" alt="profice1">
                </div>
                <div class="col-xl-5 col-md-5 col-4"></div>
            </div>
       </div>



       <div class="col-xl-12 col-md-12 col-12  p-4">
            <div class="row">
                <ul class="col-xl-5 shadow  bg-body rounded">
                    <h3 class="text-center p-3">Thông tin sinh viên</h3>
                    <li class="p-3" >
                        <span>Mã sv :  <b>{{ $student->student_code}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Họ và tên :  <b>{{ $student->student_name}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Ngày sinh : <b>{{ $student->student_birth}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Giới tính : <b>{{ $student->student_gender}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Điện thoại : <b>{{ $student->student_phone}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Email : <b>{{$user->email}}</b></span>
                    </li>
                    <li class="p-3">
                        <span>Dân tộc : <b>{{ $student->student_nation}} </b></span>
                    </li>

                    <li class="p-3">
                        <span>Địa chỉ : <b> {{ $student->student_address}}</b></span>
                    </li>

                </ul>

                    <div class="col-xl-2"></div>

                    <ul class="col-xl-5 shadow  bg-body rounded">
                        <h3 class="text-center p-3">Thông tin khoá học</h3>


                        <li class="p-3">
                            <span>Chuyên nghành : <b>{{$major->major_name}}</b></span>
                        </li>
                        <li class="p-3">
                            <span>Khoa : <b>{{$department->department_name}}</b></span>
                        </li>

                        <li class="p-3">
                            <span>Niên khoá :  <b>{{ $student->student_year}}</b></span>
                        </li>


                    </ul>

            </div>
       </div>
        @else
            <h4 class="text-center">Bạn không phải sinh viên</h4>
        @endif





    </div>
  </div>
</div>
@endsection


