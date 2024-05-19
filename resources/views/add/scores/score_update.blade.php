@extends('layout.master')


@section('title')
    Sửa điểm
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12  p-4">
            <form method="POST" action="" >

                @csrf
                   <div class="mb-3">
                    <label  class="form-label">Điểm A  : </label>
                    <select  class="form-control" name="A"  >
                        <option selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)


                        <option {{ $score->score_a == $i ? 'selected' : ''}} value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>

                      @error('A')
                          <p style="color: red">{{$message}}</p>
                      @enderror
                  </div>


                  <div class="mb-3">
                    <label  class="form-label">Điểm B  : </label>
                    <select  class="form-control" name="B"  >
                        <option selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)
                        <option {{ $score->score_b == $i ? 'selected' : ''}} value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>
                    @error('B')
                       <p style="color: red">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Điểm C  : </label>
                    <select  class="form-control" name="C"  >
                        <option  selected></option>
                        @for ($i = 0 ; $i <= 10 ; $i++)
                        <option {{ $score->score_c == $i ? 'selected' : ''}} value="{{$i}}" >{{$i}}</option>
                        @endfor
                    </select>

                    @error('C')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                  </div>




                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        </div>


     </div>
</div>
@endsection


