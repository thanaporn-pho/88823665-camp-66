@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{url('/register')}}" onsubmit="return myfunction()" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
                <div class="valid-feedback">
                    OK
                </div>
                <div class="invalid-feedback" id="invalid-name">
                    กรุณากรอกข้อมูล name
                </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                <div class="valid-feedback">
                    OK
                </div>
                <div class="invalid-feedback" id="invalid-email">
                    กรุณาระบุข้อมูล email
                </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password"class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                <div class="valid-feedback">
                    OK
                </div>
                <div class="invalid-feedback" id="invalid-password">
                    กรุณาระบุข้อมูล password
                </div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" id="mycheckbox" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
                <div class="valid-feedback">
                    OK
                </div>
                <div class="invalid-feedback" id="invalid-mycheckbox" style="display: none;">
                    กรุณายอมรับเงื่อนไข
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" onclick="myfunction()">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        {{-- <button class="btn" onclick="myfunction()">Click Me</button> --}}
        <!-- /.social-auth-links -->
            <p class="mb-0">
                {{-- <a href="login.html" class="text-center"> I already have a membership </a> --}}
            </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script>
        let $myval
        var myval2 = "value of my val2"
        const myval3 = ""

        console.log("Hello World!");

        //alert("Hello Word!");
        /**/
        //
        //ALERT("Hello World");
        function myfunction(){
            let name = $('#name');
            let email = $('#email');
            let password = $('#password');
            let mycheckbox = $('#mycheckbox');
            let isValid = true;
            //document.getElementByClass()
            //name.value = "My Name Value"
            //name.val("My Name Value")
            // console.log(name.val(), email.value,password.value,mycheckbox.checked);
            if (name.val().trim() === "") {
                name.addClass('is-invalid');
                $('#invalid-name').html("<b>ใส่ name เป็นค่านี้ไม่ได้")
                isValid = false;
            } else {
                name.removeClass('is-invalid');
                $('#invalid-name').html("");
            }
            let emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailCheck.test(email.val().trim())) {
                email.addClass('is-invalid');
                $('#invalid-email').html("<b>กรุณาระบุ email ที่ถูกต้อง โดยต้องมี @ และ .")
                isValid = false;
            } else {
                email.removeClass('is-invalid');
                $('#invalid-email').html("");
            }

            let passwordCheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
            if (!passwordCheck.test(password.val().trim())) {
                password.addClass('is-invalid');
                $('#invalid-password').html("<b>รหัสผ่านต้องมีตัวเลข, ตัวพิมพ์เล็ก, และตัวพิมพ์ใหญ่")
                isValid = false
            } else {
                password.removeClass('is-invalid');
                $('#invalid-password').hide();
            }

            if (!mycheckbox.prop("checked")) {
                mycheckbox.parent().addClass("is-invalid");
                $('#invalid-mycheckbox').show().html("<b>กรุณายอมรับเงื่อนไข</b>");
                isValid = false
            } else {
                mycheckbox.parent().removeClass("is-invalid");
                $('#invalid-mycheckbox').html("");
            }

            return isValid;
        }



    </script>
    <script>
        console.log(myval2);
    </script>
@endsection
