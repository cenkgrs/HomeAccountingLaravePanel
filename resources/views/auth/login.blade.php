@extends('auth.layout')
<div class="container box-center">
    <form action="" method="post" class="login-form">
        {{ csrf_field() }}
        <div class="col-md-12 col-xs-12">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control">
        </div>
        <div class="col-md-12 col-xs-12">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
        <div class="col-md-12 col-xs-12 mt1">
            <input type="submit" class="btn btn-primary btn-block" value="Login">
        </div>
    </form>
</div>