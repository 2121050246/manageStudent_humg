@extends('layout.master')


@section('title')
   Điểm
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">


        {{-- <form class="col-xl-12 col-md-12 col-12  p-4 d-flex" action="{{route('add.score.showed')}}" method="POST">
            @csrf




              <select class="form-control m-2" name="major_id" aria-label="Default select example">
                <option selected>Chuyên nghành</option>
                @foreach ($major as $m)
                    <option {{ old('major_id', request()->input('major_id')) == $m->id ? 'selected' : '' }} value="{{ $m->id }}">{{ $m->major_name }}</option>
                @endforeach

              </select>

              <input type="submit" class="btn btn-primary m-2" value="Tìm" name="" id="">
        </form> --}}




        <div class="col-xl-12 col-md-12 col-12  p-4">


            @if (session('msg'))
                <div class="alert alert-primary ">
                    {{session('msg')}}
                </div>
            @endif



            <div class="col-xl-12 col-md-12 col-12  p-4">

                <a class="btn btn-primary" href="{{route('add.score.create')}}">Thêm</a>


        </div>


    </div>

      <div class="col-xl-12 col-md-12 col-12">
        <table class="table shadow  bg-body rounded">

             {{ $score->links() }}



            <thead>
              <tr>


                <th scope="col" class="text-center">stt</th>
                <th scope="col" class="text-center">Tên môn học</th>
                <th scope="col" class="text-center">Điểm A</th>

                <th scope="col" class="text-center">Điểm B</th>

                <th scope="col" class="text-center">Điểm C</th>
                <th scope="col" class="text-center">Hệ 4</th>
                <th scope="col" class="text-center">Hệ 10</th>



                <th scope="col" class="text-center">Trạng thái</th>




                <th scope="col" class="text-center">Sửa</th>
                <th scope="col" class="text-center">Xoá</th>


              </tr>
            </thead>
            <tbody>



                @if (isset($score))
                    @foreach ($score as  $k => $s)
                        <tr>
                            <th class="text-center" scope="row">{{$k + 1}}</th>
                            <td class="text-center"> {{$s->score_name}}</td>
                            <td class="text-center"> {{$s->score_a}}</td>
                            <td class="text-center"> {{$s->score_b}}</td>
                            <td class="text-center"> {{$s->score_c}}</td>
                            {{-- <td class="text-center"> {{$s->subject_id}}</td> --}}
                            <td class="text-center"> {{$s->result_four}}</td>
                            <td class="text-center"> {{$s->result_ten}}</td>


                            <td class="text-center"> {{$s->status}}</td>

                            <td class="text-center">
                                <a href="{{route('add.score.update' , ['id' => $s->id])}}" class="btn btn-secondary ">Sửa</a>
                            </td>
                            <td class="text-center">
                                <a href="{{route('add.score.delete' , ['id' => $s->id])}}" class="btn btn-danger ">Xoá</a>

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
