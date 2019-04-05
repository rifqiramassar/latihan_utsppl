<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?=$this->session->flashdata('message');?>
      <div class="card-body">
        <form action="<?=base_url('auth');?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input id="email" name="email" class="form-control" placeholder="Email address"
                autofocus="autofocus" value="<?=set_value('email')?>">
              <label for="inputEmail">Email address</label>
            </div>
            <?=form_error('email', '<p class="text-danger">', '</p>')?>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <label for="inputPassword">Password</label>
            </div>
            <?=form_error('password', '<p class="text-danger">', '</p>')?>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url('auth/register')?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
