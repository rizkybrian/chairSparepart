<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"></link>
    <title>Sparepart</title>
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <img src="img/logo3.png" alt="logo" width="50px">
        <a class="navbar-brand" href="#">Sparepart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Jenis Sparepart
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Kategori 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Kategori 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Kategori 3</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</section>
<section class="mt-5">
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
            <div class="carousel-item"  style="width: 100%; height: 550px;">
            <img src="img/slide2.jpg" class="d-block w-100" alt="contoh 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Judul Barang</h5>
                    <p>Deskripsi Singkat Produk</p>
                </div>
            </div>
            <div class="carousel-item"  style="width: 100%; height: 550px;">
            <img src="img/slide3.jpeg" class="d-block w-100" alt="contoh 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Judul Barang</h5>
                    <p>Deskripsi Singkat Produk</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
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
            <div class="row row-cols-4">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk1.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk2.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk3.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk4.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
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
            <div class="row row-cols-4">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk1.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk2.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk3.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk4.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
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
            <div class="row row-cols-4">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk1.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="img/produk2.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk3.jpeg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" >
                        <img src="img/produk4.jpg" class="card-img-top" style="width:100%; height: 250px; padding: 2%;" alt="produk3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk</h5>
                                <a href="#" class="btn btn-primary p-1">Detail Produk</a>
                                <a href="#"><img src="img/cart.png" style="width: 35px; margin-left:15px;" alt="cart"></a>
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
<section id="contact">
      <div class="container">
        <div class="row text-start">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-start">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="nama">Name</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="nama" required/>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input name="email" type="email" class="form-control" id="email" required/>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea name="pesan" class="form-control" id="pesan" rows="3" required></textarea>
              </div>
              <button type="submit" value="submit" name="submit" class="btn btn-dark">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-center text-white p-5 mt-2">
      <p>Created by <a href="instagram.com/kyfbrn_" class="text-white fw-bold" style="text-decoration:none">Rizky Febrian</a></p>
    </footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>