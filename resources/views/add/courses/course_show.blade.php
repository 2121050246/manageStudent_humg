@extends('layout.master')


@section('title')
    Thông tin môn học
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

                        <a class="btn btn-primary" href="{{route('add.course.create')}}">Thêm</a>







                </div>


            </div>
            <table class="table shadow  bg-body rounded">

                  {{ $course->links() }}

                <thead>
                  <tr>
                    <th scope="col">stt</th>
                    <th scope="col" class="text-center">Mã môn học</th>

                    <th scope="col" class="text-center">Tên môn học</th>
                    <th scope="col" class="text-center">Số tín</th>

                    <th scope="col" class="text-center">Chuyên ngành</th>
                    <th scope="col" class="text-center">Năm</th>
                    <th scope="col" class="text-center">Sửa</th>
                    <th scope="col" class="text-center">Xoá</th>






                  </tr>
                </thead>
                <tbody>
                   @if (isset($course))
                       @foreach ($course as $key => $item)
                        <tr class="mb-3">
                            <th class="text-center" scope="row">{{$key + 1}}</th>
                            <td class="text-center"> {{$item->course_code}}</td>
                            <td class="text-center"> {{$item->course_name}}</td>
                            <td class="text-center"> {{$item->course_number}}</td>

                            @foreach ($major as $m)
                                @if ($m->id == $item->major_id)
                                    <td class="text-center">{{$m->major_name}}</td>
                                @endif

                            @endforeach

                            @foreach ($year as $y)
                                @if ($y->id == $item->year_id)
                                    <td class="text-center">{{$y->year_name}}</td>
                                @endif

                            @endforeach




                            <td class="text-center">
                                <a href="{{route('add.course.update',['id' =>$item->id])}}" class="btn btn-secondary ">Sửa</a>

                            </td>

                            <td class="text-center">
                                <a href="{{route('add.course.delete',['id' => $item->id])}}" class="btn btn-danger ">Xoá</a>

                            </td>


                        </tr>
                       @endforeach
                   @endif



                </tbody>

              </table>





           </div>
           </div>



    </div>
  </div>
</div>
@endsection


