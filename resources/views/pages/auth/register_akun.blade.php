@extends('layouts.app')
@section('content')
<div class="section" style="margin-bottom: 250px;;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="padding: 50px;">
                                                
                    <form class="row" action="http://8.215.6.229/signup" method="post">

                            <input type="hidden" name="_token" value="sK7nbMTV99ohDv0u6ZEmGBTwVJo5z1X1EJLZQ1Vn">                            <div class="form-group col-md-6">
                                <label>Nama Depan</label>
                                <input type="text" name="nama_depan" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Nama Belakang</label>
                                <input type="text" name="nama_belakang" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Nomor HP</label>
                                <input type="number" name="nomor_hp" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Konfirmasi Kata Sandi</label>
                                <input type="password" name="confirm_password" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select name="id_province" class="form-control">
                                    <option value="">Pilih Salah Satu</option>
                                                                        <option value="11">ACEH</option>
                                                                        <option value="12">SUMATERA UTARA</option>
                                                                        <option value="13">SUMATERA BARAT</option>
                                                                        <option value="14">RIAU</option>
                                                                        <option value="15">JAMBI</option>
                                                                        <option value="16">SUMATERA SELATAN</option>
                                                                        <option value="17">BENGKULU</option>
                                                                        <option value="18">LAMPUNG</option>
                                                                        <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                                                        <option value="21">KEPULAUAN RIAU</option>
                                                                        <option value="31">DKI JAKARTA</option>
                                                                        <option value="32">JAWA BARAT</option>
                                                                        <option value="33">JAWA TENGAH</option>
                                                                        <option value="34">DI YOGYAKARTA</option>
                                                                        <option value="35">JAWA TIMUR</option>
                                                                        <option value="36">BANTEN</option>
                                                                        <option value="51">BALI</option>
                                                                        <option value="52">NUSA TENGGARA BARAT</option>
                                                                        <option value="53">NUSA TENGGARA TIMUR</option>
                                                                        <option value="61">KALIMANTAN BARAT</option>
                                                                        <option value="62">KALIMANTAN TENGAH</option>
                                                                        <option value="63">KALIMANTAN SELATAN</option>
                                                                        <option value="64">KALIMANTAN TIMUR</option>
                                                                        <option value="65">KALIMANTAN UTARA</option>
                                                                        <option value="71">SULAWESI UTARA</option>
                                                                        <option value="72">SULAWESI TENGAH</option>
                                                                        <option value="73">SULAWESI SELATAN</option>
                                                                        <option value="74">SULAWESI TENGGARA</option>
                                                                        <option value="75">GORONTALO</option>
                                                                        <option value="76">SULAWESI BARAT</option>
                                                                        <option value="81">MALUKU</option>
                                                                        <option value="82">MALUKU UTARA</option>
                                                                        <option value="91">PAPUA BARAT</option>
                                                                        <option value="94">PAPUA</option>
                                                                    </select>
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten</label>
                                <select name="id_regencies" class="form-control">
                                    <option value="">Pilih Salah Satu</option>
                                </select>
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <select name="id_district" class="form-control">
                                    <option value="">Pilih Salah Satu</option>
                                </select>
                                                            </div>
                            <div class="form-group col-md-6">
                                <label>Desa</label>
                                <select name="id_village" class="form-control">
                                    <option value="">Pilih Salah Satu</option>
                                </select>
                                                            </div>
                            <div class="form-group col-6">
                                <label>ReCaptcha</label>
                                   <div class="g-recaptcha" data-sitekey="6LfxetMhAAAAAAxs5d8g_qJ0PRhKJPcVTeZdTTWt"></div>
                                                                      <div id='html_element'></div>
                            </div>
                                    
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-fill-out btn-block">Daftar</button>
                            </div>
                            <div class="form-group col-md-12 mt-2 text-center">
                                <span class="text-muted">Sudah memiliki akun? <a
                                        href="{{route('login')}}">Masuk</a></span>
                            </div>
                            <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection