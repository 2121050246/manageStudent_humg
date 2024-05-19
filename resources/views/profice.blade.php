@extends('layout.master')


@section('title')
    Hồ sơ
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">

      <div class="col-xl-12 col-md-12 col-12">
        <table class="table shadow  bg-body rounded">


            <thead>
              <tr>


                <th scope="col" class="text-center">Tên tài khoản</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Mật khẩu</th>







              </tr>
            </thead>
            <tbody>

                    <tr class="mb-3">

                        <td class="text-center">{{$user_name}}</td>
                        <td class="text-center">{{$user_email}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-secondary ">Quên mật khẩu </a>
                        </td>



                    </tr>




            </tbody>

          </table>
      </div>

    </div>



  </div>
</div>
@endsection
