<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{Vite::asset('resources/css/style.css')}}">
    <title>Catalog Product</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><h1>Chanies</h1></div>
        <ul class="menu">
            <li><a href="" class="active">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">About Us</a></li>
            <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
        </ul>

        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div>
    </nav>

    <section class="content">
        <h1>Chanies</h1>
        <p>Get The Best Dimsum in Town</p>
    </section>

    <h1 class="pheading">Katalog Produk</h1>
    <h2 class="pheading">Produk Matang</h2>

    <section class="sec">
        <div class="products">

            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 5.jpg')}}" alt=""></div>
                <h3>Dimsum Original 5 pcs</h3>
                <br>
                <div class="title">Dimsum Original dengan 100% daging ayam yang disajikan hangat</div>
                <div class="box">
                    <div class="price">Rp.16.000</div>
                
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 4.jpeg')}}" alt=""></div>
                <h3>Dimsum Keju 5 pcs</h3>
                <br>
                <div class="title">Dimsum Keju terbuat dari 100% daging ayam dengan keju diatasnya yang disajikan hangat</div>
                <div class="box">
                    <div class="price">Rp.17.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 6.jpg')}}" alt=""></div>
                <h3>Dimsum Crab 5 pcs</h3>
                <br>
                <div class="title">Dimsum Crab terbuat dari 100% daging ayam dengan potongan crabstick diatasnya yang disajikan hangat</div>
                <div class="box">
                    <div class="price">Rp.17.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
        </div>
    </section>
    <h2 class="pheading">Produk Frozen</h2>
    <section class="sec">
        <div class="products">

            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 7.jpg')}}" alt=""></div>
                <h3>Dimsum Original 50 pcs</h3>
                <br>
                <div class="title">Dimsum Original dengan 100% daging ayam tersedia dalam bentuk frozen food</div>
                <div class="box">
                    <div class="price">Rp.60.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 9.jpg')}}" alt=""></div>
                <h3>Dimsum Keju 50 pcs</h3>
                <br>
                <div class="title">Dimsum Keju terbuat dari 100% daging ayam dengan keju diatasnya tersedia dalam bentuk frozen food</div>
                <div class="box">
                    <div class="price">Rp.63.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 8.jpg')}}" alt=""></div>
                <h3>Dimsum Crab 50 pcs</h3>
                <br>
                <div class="title">Dimsum Crab terbuat dari 100% daging ayam dengan potongan crabstick tersedia dalam bentuk frozen food</div>
                <div class="box">
                    <div class="price">Rp.65.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="products">

            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 3.jpeg')}}" alt=""></div>
                <h3>Nugget Sayur 50 pcs</h3>
                <br>
                <div class="title">Nugget sayur sehat dengan isisan wortel, daun bawang, dandaging ayam dengan kualitas baik</div>
                <div class="box">
                    <div class="price">Rp.55.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 2.jpeg')}}" alt=""></div>
                <h3>Nugget Ayam 50 pcs</h3>
                <br>
                <div class="title">Nugget ayam full daging ayam yang enak dan pastinya sehat</div>
                <div class="box">
                    <div class="price">Rp.55.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 1.jpeg')}}" alt=""></div>
                <h3>Molen 10 pcs</h3>
                <br>
                <div class="title">Molen dengan isian pisang bisa custom isi tambahan seperti coklat atau keju</div>
                <div class="box">
                    <div class="price">Rp.30.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
        </div>
    </section>


    <footer>
        <p>Dirga yang buat anjay, ngeri banget loch</p>
    </footer>

    <script>
        $(".menu-btn").click(function(){
            $(".navbar .menu").toggleClass("active");
            $(".menu-btn i").toggleClass("active");
        });
    </script>

</body>
</html>