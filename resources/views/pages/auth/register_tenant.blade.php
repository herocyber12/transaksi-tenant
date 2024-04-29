@extends('layouts.app')
@section('content')
<div class="section" style="margin-bottom: 250px;;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="padding: 50px;">
                       <!--                         -->
       
                       <button onclick="ajax_modal('Form Cek Data Tenant','http://8.215.6.229/cekdaftartenant')" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Cek Tenant </button>
                    
                    </br></br>
                    <form action="http://8.215.6.229/daftartenant" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="sK7nbMTV99ohDv0u6ZEmGBTwVJo5z1X1EJLZQ1Vn">    <div class="row">
                        <div class="form-group col-6">
                            <label>Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" class="form-control" value="" >
                                    </div>
                        <div class="form-group col-6">
                            <label>No Telpon Perusahaan</label>
                            <input type="numeric" name="no_telp_perusahaan" value="" class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>Email Perusahaan</label>
                            <input type="email" name="email_perusahaan" class="form-control">
                            <!---->
                        </div>
                        <div class="form-group col-6">
                            <label>NIK</label>
                            <input type="numeric" name="nik" value=""  class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>Nama Toko</label>
                            <input type="text" name="nama_toko" value="" class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="" class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>Provinsi</label>
                            <select name="id_prov" class="form-control">
                                <option value="">Pilih Salah Satu</option>
                                                   <option value="33" >JAWA TENGAH</option>
                                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Kabupaten</label>
                            <select name="id_kab" class="form-control">
                                <option value="">Pilih Salah Satu</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Kecamatan</label>
                            <select name="id_kec" class="form-control">
                                <option value="">Pilih Salah Satu</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Kelurahan</label>
                            <select name="id_kel" class="form-control">
                                <option value="">Pilih Salah Satu</option>
                            </select>
                        </div>
                        <!-- <div class="form-group col-6">
                            <label>Level</label>
                            <input type="numeric" name="level" class="form-control">
                        </div> --> 
                        <div class="form-group col-6">
                            <label>Jenis Usaha</label>
                            <select name="jenis_usaha" class="form-control select2">
                                <option value="">Pilih Salah Satu</option>
                                                <option value="Transportasi" >Transportasi</option>
                                                <option value="Hotel &amp; Restaurant" >Hotel &amp; Restaurant</option>
                                                <option value="Mall dan Pusat Perbelanjaan" >Mall dan Pusat Perbelanjaan</option>
                                                <option value="Pasar Tradisional, Shelter Kuliner, dan Pasar Ikan" >Pasar Tradisional, Shelter Kuliner, dan Pasar Ikan</option>
                                                <option value="UMKM dan Industri Kreatif , Bisnis Online" >UMKM dan Industri Kreatif , Bisnis Online</option>
                                                <option value="Edukasi, Kursus &amp; Pelatihan" >Edukasi, Kursus &amp; Pelatihan</option>
                                                <option value="Komputer, Gadget, dan Elektronik" >Komputer, Gadget, dan Elektronik</option>
                                                <option value="Properti, Real Estate, Material Building &amp; Equipment" >Properti, Real Estate, Material Building &amp; Equipment</option>
                                                <option value="Bisnis &amp; Jasa Keuangan" >Bisnis &amp; Jasa Keuangan</option>
                                                <option value="Pariwisata, Tour &amp; Entertainment" >Pariwisata, Tour &amp; Entertainment</option>
                                                <option value="Health &amp; Beauty" >Health &amp; Beauty</option>
                                                <option value="Energi &amp; Sumber Daya Alam" >Energi &amp; Sumber Daya Alam</option>
                                                <option value="Ritel &amp; Pertokoan" >Ritel &amp; Pertokoan</option>
                                                <option value="Lain-lain (Other)" >Lain-lain (Other)</option>
                                                <option value="Pasar Legi" >Pasar Legi</option>
                                                <option value="Pasar Klewer" >Pasar Klewer</option>
                                                <option value="Pasar Gede" >Pasar Gede</option>
                                                <option value="Pasar Singosaren" >Pasar Singosaren</option>
                                                <option value="Pasar Ngudi Rejeki Gilingan" >Pasar Ngudi Rejeki Gilingan</option>
                                                <option value="Pasar TBIH Depok" >Pasar TBIH Depok</option>
                                                <option value="Pasar Nusukan" >Pasar Nusukan</option>
                                                <option value="Pasar Harjodaksino" >Pasar Harjodaksino</option>
                                                <option value="Pasar Klitikan Notoharjo" >Pasar Klitikan Notoharjo</option>
                                                <option value="Pasar Jongke" >Pasar Jongke</option>
                                                <option value="Pasar Rejosari" >Pasar Rejosari</option>
                                                <option value="Pasar Gading" >Pasar Gading</option>
                                                <option value="Pasar Ngarsopuro" >Pasar Ngarsopuro</option>
                                                <option value="Pasar Kadipolo" >Pasar Kadipolo</option>
                                                <option value="Pasar Kembang" >Pasar Kembang</option>
                                                <option value="Pasar Cinderamata " >Pasar Cinderamata </option>
                                                <option value="Pasar Tanggul" >Pasar Tanggul</option>
                                                <option value="Pasar Pucangsawit" >Pasar Pucangsawit</option>
                                                <option value="Pasar Ledoksari" >Pasar Ledoksari</option>
                                                <option value="Pasar Mojosongo" >Pasar Mojosongo</option>
                                                <option value="Pasar Panggungrejo" >Pasar Panggungrejo</option>
                                                <option value="Pasar Nongko" >Pasar Nongko</option>
                                                <option value="Pasar Triwindu" >Pasar Triwindu</option>
                                                <option value="Pasar Kabangan" >Pasar Kabangan</option>
                                                <option value="Pasar Purwosari" >Pasar Purwosari</option>
                                                <option value="Pasar Sidodadi" >Pasar Sidodadi</option>
                                                <option value="Pasar Ayam" >Pasar Ayam</option>
                                                <option value="Pasar Kliwon" >Pasar Kliwon</option>
                                                <option value="Pasar Mebel" >Pasar Mebel</option>
                                                <option value="Pasar Penumping" >Pasar Penumping</option>
                                                <option value="Pasar Jebres / Buah Jurug" >Pasar Jebres / Buah Jurug</option>
                                                <option value="Pasar Ayu Balapan / Sidomulyo" >Pasar Ayu Balapan / Sidomulyo</option>
                                                <option value="Pasar Tunggulsari" >Pasar Tunggulsari</option>
                                                <option value="Pasar Ngemplak" >Pasar Ngemplak</option>
                                                <option value="Pasar Sangkrah" >Pasar Sangkrah</option>
                                                <option value="Pasar Elpabes" >Pasar Elpabes</option>
                                                <option value="Pasar Ngumbul / Bangunharjo" >Pasar Ngumbul / Bangunharjo</option>
                                                <option value="Pasar Sibela Mojosongo" >Pasar Sibela Mojosongo</option>
                                                <option value="Pasar Joglo / Bambu" >Pasar Joglo / Bambu</option>
                                                <option value="Pasar Besi" >Pasar Besi</option>
                                                <option value="Shelter Kuliner Galabo" >Shelter Kuliner Galabo</option>
                                                <option value="Shelter Kuliner Kota Barat" >Shelter Kuliner Kota Barat</option>
                                                <option value="Shelter Kuliner Manahan" >Shelter Kuliner Manahan</option>
                                                <option value="Jasa Transportasi" >Jasa Transportasi</option>
                                                <option value="Alat Transportasi" >Alat Transportasi</option>
                                                <option value="Solo Paragon Mall" >Solo Paragon Mall</option>
                                                <option value="Solo Grand Mall" >Solo Grand Mall</option>
                                                <option value="Solo Square Mall" >Solo Square Mall</option>
                                                <option value="The Park Mall" >The Park Mall</option>
                                                <option value="Pakuwon Mall" >Pakuwon Mall</option>
                                                <option value="BTC" >BTC</option>
                                                <option value="PGS" >PGS</option>
                                                <option value="Luwes Group" >Luwes Group</option>
                                                <option value="Palur Plasa" >Palur Plasa</option>
                                                <option value="Pasar Ikan Balekambang" >Pasar Ikan Balekambang</option>
                                                <option value="Shelter kuliner Solo Square" >Shelter kuliner Solo Square</option>
                                                <option value="Shelter Kuliner Manahan Timur" >Shelter Kuliner Manahan Timur</option>
                                                <option value="Shelter Kuliner Manahan Barat" >Shelter Kuliner Manahan Barat</option>
                                                <option value="Shelter Sekar Taji" >Shelter Sekar Taji</option>
                                                <option value="Industri Manufacture" >Industri Manufacture</option>
                                                <option value="Sami Luwes" >Sami Luwes</option>
                                                <option value="KAI" >KAI</option>
                                            </select>
                                    </div>
                        
                        <!-- <div class="form-group col-6">
                            <label>Tenant Unggulan</label>
                            <input type="numeric" name="tenant_unggulan" class="form-control">
                            <small class="text-muted">0 = tidak / 1 = iya</small>
                        </div> -->
                        <!-- <div class="form-group col-6">
                            <label>QRIS</label>
                            <input type="numeric" name="is_has_qris" class="form-control">
                            <small class="text-muted">0 = tidak / 1 = iya</small>
                        </div> -->
                       <!--  <div class="form-group col-6">
                            <label>Generated</label>
                            <input type="numeric" name="is_generated" class="form-control">
                            <small class="text-muted">0 = tidak / 1 = iya</small>
                        </div> -->
                        <div class="form-group col-6">
                            <label>Instgram (Optional)</label>
                            <input type="text" name="instagram" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Whatsapp (Optional)</label>
                            <input type="text" name="whatsapp" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Facebook (Optional)</label>
                            <input type="text" name="facebook" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Profile ( 540x600 )</label>
                            <input type="file" required name="profile" value="" class="form-control">
                            <small class="text-danger">*max foto 1mb</small>
                                    </div>
                        <div class="form-group col-6">
                            <label>Promosi Yang Ditawarkan</label>
                            <textarea name="promosi_yang_ditawarkan" class="form-control"></textarea> 
                                    </div>
                        <div class="form-group col-6">
                            <label>* Nomor Rekening</label>
                            <input type="text" name="nomor_rekening" value="" class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>* Nama Bank</label>
                            <input type="text" name="nama_bank" value="" class="form-control">
                                    </div>
                        <div class="form-group col-6">
                            <label>* Password</label>
                            <input type="password" name="password" value="" class="form-control" required>
                                    </div>
                        <div class="form-group col-6">
                            <label>ReCaptcha</label>
                            <div class="g-recaptcha" data-sitekey="6LfxetMhAAAAAAxs5d8g_qJ0PRhKJPcVTeZdTTWt"></div>
                                        <div id='html_element'></div>
                    
                        </div>
                        
                        <div class="form-group col-4 offset-8">
                            <button type="submit" class="btn btn-success btn-block">Kirim</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection