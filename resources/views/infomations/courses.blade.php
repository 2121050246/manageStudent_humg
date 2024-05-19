@extends('layout.master')


@section('title')
    Thông tin sinh viên
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <form class="col-xl-12 col-md-12 col-12  p-4 d-flex" action="{{route('infor.courses_post')}}" method="POST">
            @csrf


            <select class="form-control m-2" name="department_id" aria-label="Default select example">

                <option>Khoa</option>
                @foreach ($department as $d)
                    <option {{ old('department_id', request()->input('department_id')) == $d->id ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->department_name }}</option>
                @endforeach




              </select>

              <select class="form-control m-2" name="major_id" aria-label="Default select example">
                <option selected>Chuyên nghành</option>
                @foreach ($major as $m)
                    <option {{ old('major_id', request()->input('major_id')) == $m->id ? 'selected' : '' }} value="{{ $m->id }}">{{ $m->major_name }}</option>
                @endforeach

              </select>

              <input type="submit" class="btn btn-primary m-2" value="Tìm" name="" id="">
        </form>



        @foreach ($department as $d)
        @if (isset($department_id))
            @if ($d->id == $department_id)
                @foreach ($major as $m)
                    @if (isset($major_id))
                        @if ($m->department_id == $d->id && $m->id == $major_id)
                            @foreach ($year as $y)
                                <div class="col-xl-12 col-md-12 col-12 p-4">
                                    <table class="table shadow bg-body rounded">
                                        <h4>Năm {{ $y->year_name }}</h4>
                                        <thead>
                                            <tr>
                                                {{-- <th scope="col">stt</th> --}}
                                                <th scope="col" class="text-center">Mã học phần</th>
                                                <th scope="col" class="text-center">Tên môn học</th>
                                                <th scope="col" class="text-center">Số tín chỉ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($course as $key => $c)
                                                @if ($c->year_id == $y->id && $c->major_id == $m->id)
                                                    <tr class="mb-3">
                                                        {{-- <th class="text-center" scope="row">{{ $key + 1 }}</th> --}}
                                                        <td class="text-center">{{ $c->course_code }}</td>
                                                        <td class="text-center">{{ $c->course_name }}</td>
                                                        <td class="text-center">{{ $c->course_number }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        @endif
                    @endif
                @endforeach
            @endif
        @endif
    @endforeach



















    </div>
  </div>
</div>
@endsection


