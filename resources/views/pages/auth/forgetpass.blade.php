@extends('layouts.app')
@section('content')
<div class="section" style="margin-bottom: 250px;;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="padding: 50px;">
                      <form action="http://8.215.6.229/reset_password" method="post">
                        <input type="hidden" name="_token" value="sK7nbMTV99ohDv0u6ZEmGBTwVJo5z1X1EJLZQ1Vn">                            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                                                        </div>
                        <div class="form-group">
                            <label>ReCaptcha</label>
                            <div class="g-recaptcha" data-sitekey="6LfxetMhAAAAAAxs5d8g_qJ0PRhKJPcVTeZdTTWt"></div>
                            <div id='html_element'></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill-out btn-block">Reset</button>
                        </div>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection;