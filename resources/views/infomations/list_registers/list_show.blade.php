@extends('layout.master')


@section('title')
   Danh sách đăng kí
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



        </div>
        <table class="table shadow  bg-body rounded">
            @if (isset($register_course))
                {{ $register_course->links() }}
            @endif



            <thead>
              <tr>
                <th scope="col">stt</th>
                <th scope="col" class="text-center">Tên môn</th>
                <th scope="col" class="text-center">Số tín</th>
                <th scope="col" class="text-center">Xoá</th>

              </tr>
            </thead>
            <tbody>
               @if (isset($register_course))
                   @foreach ($register_course as $key => $item)
                    <tr class="mb-3">
                        <th class="text-center" scope="row">{{$key + 1}}</th>
                        <td class="text-center"> {{$item->subject_name}}</td>
                        <td class="text-center"> {{$item->subject_number}}</td>





                        <td class="text-center">
                            <a href="{{route('infor.list_register.delete' , ['id' =>  $item->id])}}" class="btn btn-danger ">Xoá</a>

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


