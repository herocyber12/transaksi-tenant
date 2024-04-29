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
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h3>Solo Square Event</h3><br/>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <p>Lokasi : <b>Solo Square Mall</b> - Dipublish pada : <b>11 September 2023</b></p>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <img style="object-fit:cover;width:70%" class="ajax-produk-foto" src="http://8.215.6.229/storage/images/D5MPMuaZcW.jpg" data-lazy-src="http://8.215.6.229/storage/images/D5MPMuaZcW.jpg" alt="Solo Square Event">
            </div>
            <div class="col-lg-8 offset-md-2">
                <div class="container">
                    Solo Square Mall

                </div>
            </div>
             
        </div>
    </div>
</div>
@endsection