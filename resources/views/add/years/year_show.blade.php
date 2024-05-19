@extends('layout.master')


@section('title')
   Năm học
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

                <a class="btn btn-primary" href="{{route('add.year.create')}}">Thêm</a>


        </div>


    </div>

      <div class="col-xl-12 col-md-12 col-12">
        <table class="table shadow  bg-body rounded">


            <thead>
              <tr>


                <th scope="col" class="text-center">stt</th>
                <th scope="col" class="text-center">Năm học</th>
                <th scope="col" class="text-center">Xoá</th>


              </tr>
            </thead>
            <tbody>

                    @if (isset($data))
                        @foreach ($data as $key => $item)
                            <tr class="mb-3">
                                <th class="text-center" scope="row">{{$key + 1}}</th>
                                <td class="text-center">{{$item->year_name}}</td>

                                <td class="text-center">
                                    <a href="{{route('add.year.delete' ,['id' => $item->id])}}" class="btn btn-secondary ">Xoá </a>
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
@endsection
