<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?=base_url('auth/register');?>" method="post">
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name" autofocus="autofocus">
                  <label for="name">First name</label>

                </div>
                <?=form_error('name');?>
              </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
              <label for="email">Email address</label>

            </div>
            <?=form_error('email');?>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                  <label for="password1">Password</label>
                </div>
                <?=form_error('password1');?>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm password">
                  <label for="password2">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url('auth')?>">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>