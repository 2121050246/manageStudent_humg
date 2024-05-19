@extends('layout.master')


@section('title')
    Đăng kí môn học
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <form class="col-xl-12 col-md-12 col-12  p-4 " action="{{route('infor.register_subjected')}}" method="POST">

            <div class="mb-3">
                @if (session('msg'))
                <div class="alert alert-primary ">
                    {{session('msg')}}
                </div>
                @endif
            </div>

            @csrf
            @if (isset($course))
            @foreach ($course as $c)
            @php
                $is_registered = false;
            @endphp
            @foreach ($register_course as $r)
                @if ($c->id == $r->course_id)
                    @php
                        $is_registered = true;
                        break;
                    @endphp
                @endif
            @endforeach
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" {{ $is_registered ? 'disabled' : '' }} name="check[]" value="{{ $c->id }}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $c->course_name }}
                </label>
            </div>
        @endforeach

            @endif

              <button class="btn btn-primary mb-3">Đăng kí</button>

        </form>
  </div>
</div>
@endsection


