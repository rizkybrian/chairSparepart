@extends('layouts.main');

@section('container')
<section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="width: 100%; height: 550px;">
                    <img src="img/slide1.jpeg" class="d-block w-100" alt="contoh 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Judul Barang</h5>
                        <p>Deskripsi Singkat Produk</p>
                    </div>
                </div>
                <div class="carousel-item" style="width: 100%; height: 550px;">
                    <img src="img/slide2.jpg" class="d-block w-100" alt="contoh 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Judul Barang</h5>
                        <p>Deskripsi Singkat Produk</p>
                    </div>
                </div>
                <div class="carousel-item" style="width: 100%; height: 550px;">
                    <img src="img/slide3.jpeg" class="d-block w-100" alt="contoh 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Judul Barang</h5>
                        <p>Deskripsi Singkat Produk</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <h1>Jenis Produk 1</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk1.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk2.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk3.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk4.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="#">
                <p style="font-size:20px; margin-left:85%; margin-top:10px;">Lainnya..</p>
            </a>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <h1>Jenis Produk 2</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk1.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk2.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk3.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk4.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="#">
                <p style="font-size:20px; margin-left:85%; margin-top:10px;">Lainnya..</p>
            </a>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <h1>Jenis Produk 3</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk1.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk2.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk3.jpeg" class="card-img-top p-1" style="height: 250px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/produk4.jpg" class="card-img-top p-1" style="height: 250px;"alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                            <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                            <a href="#"><img src="img/cart.png" style="width: 25px; margin-left:15px;"
                                    alt="cart"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="#">
                <p style="font-size:20px; margin-left:85%; margin-top:10px;">Lainnya..</p>
            </a>
        </div>
    </section>
    @endsection