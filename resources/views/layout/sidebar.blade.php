
  {{-- đóng sidebar  --}}

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">






<aside class="left-sidebar">

    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="#" class="text-nowrap logo-img">
          {{-- <img src="{{asset('demo_admin/src/assets/images/logos/dark-logo.svg')}}" width="180" alt="" /> --}}
          <h3> <span>Humg.org </span></h3>

        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>

        </div>
      </div>


      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">

          <li class="btn btn-primary mb-2   ">
            <a class=" text-white" href="{{route('home')}}" >
              <span class="pe-2">

                <i class="fa-solid fa-house"></i>
              </span>
              <span class="hide-menu">Trang chủ</span>
            </a>
          </li>




          <li class="btn btn-primary mb-2">
            <div class="text-white" aria-expanded="false">
              <span class="pe-2">
                <i class="fa-solid fa-list"></i>
              </span>
              <span class="hide-menu">Thông tin</span>
            </div>
            <ul class="list-unstyled d-none">
                <li class="btn ">
                    <a class="text-white" href="{{route('infor.student')}}">
                        Sinh viên
                    </a>
                </li>


                <li class="btn">
                    <a class="text-white" href="{{route('infor.courses')}}">
                        Chương trình đào tạo
                    </a>
                </li>

                <li class="btn">
                    <a class="text-white" href="{{route('infor.register_subject')}}">
                        Đăng kí môn
                    </a>
                </li>


                <li class="btn">
                    <a class="text-white" href="{{route('infor.list_register')}}">
                        Danh sách môn đăng kí
                    </a>
                </li>

                <li class="btn">
                    <a class="text-white" href="{{route('infor.result')}}">
                        Kết quả học tập
                    </a>
                </li>





            </ul>
          </li>


          @if (session('power') == 'admin')
          <li class="btn btn-primary mb-2">
            <div class="text-white" aria-expanded="false">
              <span class="pe-2">
                <i class="fa-solid fa-plus"></i>

              </span>
              <span class="hide-menu">Thêm</span>

            </div>
            <ul class="list-unstyled d-none">
                <li class="btn">
                    <a class="text-white" href="{{route('add.account')}}" >
                        Tài khoản
                    </a>
                </li>


                <li class="btn">
                    <a class="text-white" href="{{route('add.department')}}">
                        Khoa
                    </a>
                </li>
                <li class="btn">
                    <a class="text-white" href="{{route('add.major')}}">
                        Chuyên nghành
                    </a>
                </li>

                <li class="btn">
                    <a class="text-white" href="{{route('add.year')}}">
                        Năm học
                    </a>
                </li>
                <li class="btn">
                    <a class="text-white" href="{{route('add.course')}}">
                        Môn học
                    </a>
                </li>


                <li class="btn">
                    <a class="text-white" href="{{route('add.student')}}">
                       Thông tin sinh viên
                    </a>
                </li>
                <li class="btn">
                    <a class="text-white" href="{{route('add.score.show')}}">
                        Điểm
                    </a>
                </li>


                {{-- <li class="btn">
                    <a class="text-white" href="https://coccoc.com/search?query=themle+dropdown">
                        Chương trình đào tạo
                    </a>
                </li> --}}


            </ul>
          </li>







          <li class="btn btn-primary mb-2   ">
            <a class=" text-white" href="{{route('email.index')}}" >
              <span class="pe-2">

                <i class="fa-solid fa-envelope"></i>
              </span>
              <span class="hide-menu">Gửi thông báo</span>
            </a>
          </li>



          @endif






        </ul>

      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
