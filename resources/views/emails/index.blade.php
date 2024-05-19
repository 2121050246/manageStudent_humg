@extends('layout.master')


@section('title')
    Gửi email
@endsection

@section('css')
<link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
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

            <form method="POST" action="{{route('email.sent')}}">
                @csrf

                <div class="mb-3">
                    <label  class="form-label">Email : </label>

                      <select  class="form-control " name="email"  aria-label="Default select example">
                          <option selected>Chọn</option>
                            @foreach ($user as $item)
                                <option value="{{$item->email}}">{{$item->email}}</option>

                            @endforeach

                        </select>
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Tiêu đề:</label>
                    <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
                  </div>



                  <div class="form-group mb-3">
                    <label  class="form-label">Nội dung :</label>

                    <textarea class="form-control" name="content" id="example" rows="3"></textarea>
                  </div>







                <button type="submit" class="btn btn-primary">Gửi</button>



              </form>

        </div>







    </div>
  </div>
</div>
@endsection


@section('js')

<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
<script>
    var editor = new FroalaEditor('#example');
</script>
@endsection
