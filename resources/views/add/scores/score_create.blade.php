@extends('layout.master')


@section('title')
    Thêm điểm
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="{{route('add.score.post')}}" >
                @csrf


                <div class="mb-3">
                    <label  class="form-label">Tên môn học : </label>

                    <select class="form-control" name="subject_id" aria-label="Default select example">
                        <option selected></option>
                        @if ($register_course)
                            @php
                                // Lấy và chuyển thành mảng
                                $scoredSubjectIds = $score->pluck('subject_id')->toArray();
                            @endphp
                            @foreach ($register_course as $r)
                                @if (!in_array($r->id, $scoredSubjectIds))
                                    <option value="{{ $r->id }}">{{ $r->subject_name }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                    @error('subject_id')
                        <p style="color: red">{{$message}}</p>
                    @enderror

                  </div>


                   <div class="mb-3">
                    <label  class="form-label">Điểm A  : </label>
                    <select  class="form-control" name="A"  aria-label="Default select example">
                        <option selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)
                        <option value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>

                      @error('A')
                          <p style="color: red">{{$message}}</p>
                      @enderror
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Điểm B  : </label>
                    <select  class="form-control" name="B"  aria-label="Default select example">
                        <option selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)
                        <option value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>
                    @error('B')
                       <p style="color: red">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Điểm C  : </label>
                    <select  class="form-control" name="C"  aria-label="Default select example">
                        <option  selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)
                        <option value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>

                    @error('C')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                  </div>















                <button type="submit" class="btn btn-primary">Tạo</button>
              </form>
        </div>


     </div>
</div>
@endsection


