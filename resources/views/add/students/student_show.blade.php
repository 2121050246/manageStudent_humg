@extends('layout.master')


@section('title')
    Thông tin sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">


                @if (session('msg'))
                    <div class="alert alert-primary ">
                        {{session('msg')}}
                    </div>
                @endif





                <div class="col-xl-12 col-md-12 col-12  p-4">

                    <a class="btn btn-primary" href="{{route('add.student.create')}}">Thêm</a>







            </div>


        </div>
        <table class="table shadow  bg-body rounded">

              {{ $student->links() }}

            <thead>

                <tr>
                    <th scope="col">stt</th>
                    <th scope="col" class="text-center">Mã sv</th>
                    <th scope="col" class="text-center">Tên sinh viên</th>
                    <th scope="col" class="text-center">Ngày sinh</th>
                    <th scope="col" class="text-center">Giới tính</th>
                    <th scope="col" class="text-center">Điện thoại</th>
                    <th scope="col" class="text-center">Dân tộc</th>
                    <th scope="col" class="text-center">Địa chỉ</th>
                    <th scope="col" class="text-center">Nghành</th>
                    <th scope="col" class="text-center">Niên khoá</th>
                    <th scope="col" class="text-center">Trạng thái</th>

                    <th scope="col" class="text-center">Sửa</th>

                    <th scope="col" class="text-center">Xoá</th>




                  </tr>


            </thead>
            <tbody>

               @if (isset($student))
               @foreach ($student as $key => $item)

               <tr class="mb-3">
                <th class="text-center" scope="row">{{$key+1}}</th>
                <td class="text-center">{{$item->student_code}}</td>
                <td class="text-center">{{$item->student_name}}</td>
                <td class="text-center">{{$item->student_birth}}</td>
                <td class="text-center">{{$item->student_gender}}</td>



                <td class="text-center">{{$item->student_phone}}</td>

                <td class="text-center">{{$item->student_nation}}</td>

                <td class="text-center">{{$item->student_address}}</td>
                @foreach ($major as $m)
                    @if ($m->id == $item->major_id)
                        <td class="text-center">{{$m->major_name}}</td>

                    @endif
                @endforeach


                <td class="text-center">{{$item->student_year}}</td>

                <td class="text-center">{{$item->student_status}}</td>




                <td class="text-center">
                    <a href="{{route('add.student.update', ['id' => $item->id])}}" class="btn btn-secondary ">Sửa</a>

                </td>
                <td class="text-center">
                    <a href="{{route('add.student.delete' , ['id' => $item->id])}}" class="btn btn-danger ">Xoá</a>

                </td>


            </tr>
        @endforeach
               @endif




            </tbody>

          </table>








    </div>
  </div>
</div>
@endsection


