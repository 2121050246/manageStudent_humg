@extends('layout.master')


@section('title')
    Thông tin sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

       <div class="col-xl-12 col-md-12 col-12  p-4">


        @if (isset($score))
        <table class="table shadow  bg-body rounded">

            @if (isset($score))
              {{ $score->links() }}

            @endif


            <thead>
              <tr>
                <th scope="col">stt</th>

                {{-- <th scope="col" class="text-center">Mã học phần</th> --}}
                <th scope="col" class="text-center">Tên môn học</th>
                {{-- <th scope="col" class="text-center">Nhóm</th> --}}

                {{-- <th scope="col" class="text-center">Số tín chỉ</th> --}}

                <th scope="col" class="text-center">Điểm A</th>
                <th scope="col" class="text-center">Điểm B</th>
                <th scope="col" class="text-center">Điểm C</th>

                <th scope="col" class="text-center">Điểm hệ 10</th>
                <th scope="col" class="text-center">Điểm hệ 4</th>
                <th scope="col" class="text-center">Kết quả</th>
                <th scope="col " class="text-center">Danh sách lớp</th>


              </tr>
            </thead>
            <tbody>

                @foreach ($score as $k => $s)
                    <tr class="mb-3">
                        <th class="text-center" scope="row">{{$k  + 1}}</th>
                        {{-- <td class="text-center">12</td> --}}

                        <td class="text-center"> {{$s->score_name}}</td>

                        {{-- <td class="text-center">12</td> --}}

                        <td class="text-center">{{$s->score_a}}</td>
                        <td class="text-center">{{$s->score_b}}</td>
                        <td class="text-center">{{$s->score_c}}</td>


                        <td class="text-center">{{$s->result_ten}}</td>
                        <td class="text-center">{{$s->result_four}}</td>

                        <td class="text-center">{{$s->status}}</td>





                        <td class="text-center">   <i class="fa-solid fa-list "></i></td>

                    </tr>
                @endforeach




            </tbody>
          </table>


          @else
          <h3>Bạn không phải  sinh viên</h3>
      @endif
       </div>





    </div>
  </div>
</div>
@endsection


