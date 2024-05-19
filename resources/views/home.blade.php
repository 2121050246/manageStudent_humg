@extends('layout.master')


@section('title')
    Trang chủ
@endsection



@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">




      {{-- ------------- --}}
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-3 mt-3">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Số lượng sinh viên</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$count_student}}</h4>
                  </div>
                  {{-- <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mt-3">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Số lượng khoa</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$count_department}}</h4>


                  </div>
                  {{-- <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mt-3">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Số lượng chuyên nghành</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$count_major}}</h4>


                  </div>
                  {{-- <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mt-3">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Số lượng môn học</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$count_course}}</h4>


                  </div>
                  {{-- <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>











    </div>



  </div>
</div>
@endsection



