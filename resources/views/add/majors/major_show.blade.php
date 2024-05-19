@extends('layout.master')


@section('title')
    Thông tin chuyên nghành
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

                    <a class="btn btn-primary" href="{{route('add.major.create')}}">Thêm</a>







            </div>


        </div>
        <table class="table shadow  bg-body rounded">

              {{ $major->links() }}

            <thead>
              <tr>
                <th scope="col">stt</th>
                <th scope="col" class="text-center">Tên chuyên nghành</th>
                <th scope="col" class="text-center">Tên khoa</th>
                <th scope="col" class="text-center">Sửa</th>

                <th scope="col" class="text-center">Xoá</th>











              </tr>
            </thead>
            <tbody>
               @if (isset($major))
                   @foreach ($major as $key => $item)
                    <tr class="mb-3">
                        <th class="text-center" scope="row">{{$key + 1}}</th>
                        <td class="text-center"> {{$item->major_name}}</td>
                        @foreach ($department as $depart)
                            @if ($depart->id === $item->department_id)
                                <td class="text-center">{{$depart->department_name}}</td>
                            @endif

                        @endforeach


                        <td class="text-center">
                            <a href="{{route('add.major.update', ['id' => $item->id])}}" class="btn btn-secondary ">Sửa</a>

                        </td>
                        <td class="text-center">
                            <a href="{{route('add.major.delete' , ['id' =>  $item->id])}}" class="btn btn-danger ">Xoá</a>

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


