@extends('layouts.app')
@section('content')
<div class="section">
    <style>
        .col-md-12:hover{
            box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
        }
        .product{
            margin:15px;
        }
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
            transform: scale(.7) !important;
            }
            .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
            }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row shop_container grid">

                                        <div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="http://127.0.0.1:8000/produk/tenant/1/15844">
                                                                
                                <img class="ajax-produk-foto" src="http://8.215.6.229/storage/images/oljFRVyS0K.png" data-lazy-src="http://127.0.0.1:8000/public/tenant/logo/0000000_Eterniskin_1633062944.jpg" alt="None">
                                                                </a>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title text-center">
                                    <a href="http://127.0.0.1:8000/produk/tenant/1/15844">Solo City Tour</a>
                                </h6>
                                
                                <div class="product_price text-center"> 
                                    <span class="price">Rp 550,000</span></br/>
                                    <a href="http://8.215.6.229/paket-checkout/2028" class="btn btn-sm btn-danger">Pesan Sekarang</a>
                                </div>
                                
                                <div id="accordion" class="accordion">
                                    <div class="card mb-0">
                                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                            <a class="card-title" style="cursor: pointer">
                                                Lihat Fasilitas
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                                            <p class="MsoNormal" align="center" style="margin-bottom:0cm;text-align:center;
line-height:normal"><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;="" color:="" red;="" background-image:="" initial;="" background-position:="" background-size:="" background-repeat:="" background-attachment:="" background-origin:="" background-clip:="" initial;"="">ITINERARY</span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"="">DAY 1 CHEK
IN HOTEL<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"="">DAY&nbsp; 2
TOUR PROGRAM<o:p></o:p></span></p><ul type="disc">
 <li class="MsoNormal" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
     font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-font-kerning:0pt;mso-ligatures:="" none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">PURA MANGKUNEGARAN<o:p></o:p></span></li>
 <li class="MsoNormal" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
     font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-font-kerning:0pt;mso-ligatures:="" none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">MASJID SYEKH ZAYED<o:p></o:p></span></li>
 <li class="MsoNormal" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
     font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-font-kerning:0pt;mso-ligatures:="" none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">PASAR ANTIK TRIWINDU<o:p></o:p></span></li>
 <li class="MsoNormal" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
     font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-font-kerning:0pt;mso-ligatures:="" none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">MAKAN SIANG<o:p></o:p></span></li>
 <li class="MsoNormal" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
     font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-font-kerning:0pt;mso-ligatures:="" none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">SHOOPING TOUR RETAIL
     VENDOR SGS<o:p></o:p></span></li>
</ul><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"="">DAY 3 CEK
OUT HOTEL<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:red;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">* Minimal 4
Pax / Tour</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"=""><o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:red;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">Periode
Tour</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"=""> </span><span style="font-size:12.0pt;font-family:
" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:red;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">1 - 31
Oktober 2023</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"=""><o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">HOTEL</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"="">&nbsp;</span><span style="color: black; font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 12pt;"="">***&nbsp;
Rp. 550.000 / pax</span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">* Include
Breakfast</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"=""><o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:12.0pt;
font-family:" source="" sans="" pro",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-font-kerning:0pt;="" mso-ligatures:none;mso-fareast-language:in;mso-bidi-language:ar-sa"="">CONTACT
PERSON</span><span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"="">&nbsp;:&nbsp;</span><span style="color: black; font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 12pt;"="">0821-2486-3324</span></p><p>
</p><p class="MsoNormal"><o:p>&nbsp;</o:p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                                    </div>
            </div>
        </div>
    </div>
@endsection