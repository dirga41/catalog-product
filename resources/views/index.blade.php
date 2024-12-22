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

    <h1 class="pheading">Our Products</h1>

    <section class="sec">
        <div class="products">

            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 1.jpeg')}}" alt=""></div>
                <div class="dexc">Molen</div>
                <div class="title">Molen</div>
                <div class="box">
                    <div class="price">RP.15000</div>
                    <button class="btn">Buy Now</button>
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 1.jpeg')}}" alt=""></div>
                <div class="dexc">Molen</div>
                <div class="title">Molen</div>
                <div class="box">
                    <div class="price">RP.15000</div>
                    <button class="btn">Buy Now</button>
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 1.jpeg')}}" alt=""></div>
                <div class="dexc">Molen</div>
                <div class="title">Molen</div>
                <div class="box">
                    <div class="price">RP.15000</div>
                    <button class="btn">Buy Now</button>
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{Vite::asset('resources/img/Produk 1.jpeg')}}" alt=""></div>
                <div class="dexc">Molen</div>
                <div class="title">Molen</div>
                <div class="box">
                    <div class="price">RP.15000</div>
                    <button class="btn">Buy Now</button>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <p>Dirga yang buat anjay</p>
    </footer>

    <script>
        $(".menu-btn").click(function(){
            $(".navbar .menu").toggleClass("active");
            $(".menu-btn i").toggleClass("active");
        });
    </script>

</body>
</html>