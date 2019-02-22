<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="">
  <div class="container-login100">
    <div class="wrap-login100v1">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl.png" alt="IMG">
        <div class="">
          <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl-axiata.png" alt="IMG">
        </div>
      </div>


      <form class="login100-form validate-form">
        <span class="login100-form-title">
          <b>WIB</b>Push
        </span>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email" placeholder="Username">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <input class="input100" type="password" name="pass" placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
        </div>

        <!-- <div class="container-login100-form-btn">
						<button class="login100-form-btn" href="index.html">
							Login
						</button>
				 </div> -->

        <div class="container-login100-form-btn">
          <a class="login100-form-btn" href="<?php echo site_url('dashboard'); ?>">
            Login
          </a>
        </div>

        <div class="text-center p-t-12">
          <span class="txt1">
            Forgot
          </span>
          <a class="txt2" href="#">
            Username / Password?
          </a>
        </div>

        <div class="text-center p-t-136">
        </div>
      </form>
    </div>
  </div>
</div>
<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>