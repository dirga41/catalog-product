<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css') }}">
    <title>Catalog Product</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Chanies</h1>
        </div>
        <ul class="menu">
            <li><a href="" class="active">Home</a></li>
            <li><a href="#Products">Products</a></li>
            <li><a href="#About">About Us</a></li>
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

    <section id="Products"></section>
    <h1 class="pheading">Katalog Produk</h1>
    <h2 class="pheading">Produk Matang</h2>

    <section class="sec">

        <div class="products">

            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 5.jpg') }}" alt=""></div>
                <h3>Dimsum Original 5 pcs</h3>
                <br>
                <div class="title">Dimsum Original dengan 100% daging ayam yang disajikan hangat</div>
                <div class="box">
                    <div class="price">Rp.16.000</div>

                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 4.jpeg') }}" alt=""></div>
                <h3>Dimsum Keju 5 pcs</h3>
                <br>
                <div class="title">Dimsum Keju terbuat dari 100% daging ayam dengan keju diatasnya yang disajikan
                    hangat</div>
                <div class="box">
                    <div class="price">Rp.17.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 6.jpg') }}" alt=""></div>
                <h3>Dimsum Crab 5 pcs</h3>
                <br>
                <div class="title">Dimsum Crab terbuat dari 100% daging ayam dengan potongan crabstick diatasnya yang
                    disajikan hangat</div>
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
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 7.jpg') }}" alt=""></div>
                <h3>Dimsum Original 50 pcs</h3>
                <br>
                <div class="title">Dimsum Original dengan 100% daging ayam tersedia dalam bentuk frozen food</div>
                <div class="box">
                    <div class="price">Rp.60.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 9.jpg') }}" alt=""></div>
                <h3>Dimsum Keju 50 pcs</h3>
                <br>
                <div class="title">Dimsum Keju terbuat dari 100% daging ayam dengan keju diatasnya tersedia dalam
                    bentuk frozen food</div>
                <div class="box">
                    <div class="price">Rp.63.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 8.jpg') }}" alt=""></div>
                <h3>Dimsum Crab 50 pcs</h3>
                <br>
                <div class="title">Dimsum Crab terbuat dari 100% daging ayam dengan potongan crabstick tersedia dalam
                    bentuk frozen food</div>
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
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 3.jpeg') }}" alt=""></div>
                <h3>Nugget Sayur 50 pcs</h3>
                <br>
                <div class="title">Nugget sayur sehat dengan isisan wortel, daun bawang, dandaging ayam dengan kualitas
                    baik</div>
                <div class="box">
                    <div class="price">Rp.55.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 2.jpeg') }}" alt=""></div>
                <h3>Nugget Ayam 50 pcs</h3>
                <br>
                <div class="title">Nugget ayam full daging ayam yang enak dan pastinya sehat</div>
                <div class="box">
                    <div class="price">Rp.55.000</div>
                    {{-- <button class="btn">Buy Now</button> --}}
                </div>
            </div>
            <div class="card">
                <div class="img"><img src="{{ Vite::asset('resources/img/Produk 1.jpeg') }}" alt=""></div>
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
        <section class="footer-container">
            <div class="footer-item">
                <h2>Lokasi</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7469952254023!2d112.66578840000001!3d-7.269605899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ff1955cedaa5%3A0x61d4ed29f825703d!2sAyam%20geprek%20klasik!5e0!3m2!1sid!2sid!4v1735008927961!5m2!1sid!2sid"
                    width="100%" height="250" style="border: 0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="footer-item">
                <h2>Deskripsi</h2>
                <p>UMKM Chanies Dimsum dan Frozen Food yang berlokasi di Jl. Manukan Tama No.27 No.21k, Manukan Kulon, Kec. Tandes, Surabaya, Jawa Timur 60185 didirikan dengan visi untuk menyediakan makanan sehat yang bebas dari MSG, khususnya bagi kalangan lanjut usia yang ingin menikmati produk frozen food tanpa mengorbankan nilai gizi. Dalam upaya memenuhi kebutuhan konsumen yang semakin sadar akan pentingnya kesehatan, usaha ini berkomitmen untuk menyajikan produk berkualitas tinggi yang tetap lezat dan bergizi. Sejak berdiri selama 2,5 tahun, Chanies telah berhasil menarik perhatian konsumen dengan fokus pada kualitas dan kesehatan, menjadikannya pilihan yang tepat bagi mereka yang peduli akan asupan makanan.</p>
                <div id="owner-info" style="margin-top: 20px;">
                    <h2>Informasi Owner</h2>
                    <a href="https://wa.me/628123456789?text=Halo%20saya%20ingin%20bertanya"
                        style="display: inline-block; padding: 10px 20px; background-color: #25D366; color: white; text-decoration: none; border-radius: 5px; font-family: Arial, sans-serif;">
                        Hubungi Kami di WhatsApp
                    </a>
                    {{-- <a href="{{ route('about') }}"
                        style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">
                        Lokasi Kami
                    </a> --}}
                </div>
            </div>
        </section>
    </footer>

    <script>
        $(".menu-btn").click(function() {
            $(".navbar .menu").toggleClass("active");
            $(".menu-btn i").toggleClass("active");
        });
    </script>

</body>

</html>
