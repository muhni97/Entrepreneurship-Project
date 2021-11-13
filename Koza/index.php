<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="./img/book-bookmark-icon_34486.ico" type="img/x-icon">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>KOZA</title>
</head>

<body>

    <header id="header">
        <a href="#home" class="logo">KOZA</a>
        <div id="toggle"></div>
        <div id="navbar">
            <ul>
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="pricing.html">Satın Al</a></li>
                <li><a href="v_m.html">Vizyon&Misyon</a></li>
                <li><a href="aboutus.html">Hakkımızda</a></li>
                <li><a href="login.html">Giriş</a></li>
            </ul>
        </div>
    </header>

    <section>
        <form action="index.php" method="POST">
            <div class="row">
                <div class="text-box">
                    <p>Bir dakikada okuduğun kelime sayısı</p>
                    <input type="number" name="box1" placeholder="Sayı Giriniz!" require>
                </div>
                <div class="text-box">
                    <p>Kitabın ilk sayfasının kelime sayısı</p>
                    <input type="number" name="box2" placeholder="Sayı Giriniz!" require>
                </div>
                <div class="text-box">
                    <p>Kitabın orta sayfasının kelime sayısı - 1</p>
                    <input type="number" name="box3" placeholder="Sayı Giriniz!" require>
                </div>
                <div class="text-box">
                    <p>Kitabın orta sayfasının kelime sayısı - 2</p>
                    <input type="number" name="box4" placeholder="Sayı Giriniz!" require>
                </div>
                <div class="text-box">
                    <p>Kitabın son sayfasının kelime sayısı</p>
                    <input type="number" name="box5" placeholder="Sayı Giriniz!" require>
                </div>
                <div class="text-box">
                    <p>Kitabın sayfa sayısı</p>
                    <input type="number" name="box6" placeholder="Sayı Giriniz!" require>
                </div>
                <input type="submit" name="boxsubmit" value="HESAPLA" class="calc-btn">
                <!-- <h1>2 saat 30 dakika</h1> -->
                <div class="hour">
                    <p>
                        <?php

                        if (isset($_POST['boxsubmit'])) {
                            $v1 = $_POST['box1'];
                            $v2 = $_POST['box2'];
                            $v3 = $_POST['box3'];
                            $v4 = $_POST['box4'];
                            $v5 = $_POST['box5'];
                            $v6 = $_POST['box6'];
                            $v7 = (((($v2 + $v3 + $v4 + $v5) / 4) * $v6) / $v1) * 60;

                            function calculate($v7)
                            {
                                $output = '';
                                if ($v7 >= 3600) {
                                    $hours = floor($v7 / 3600);
                                    $v7 = $v7 % 3600;
                                    $output .= $hours . ' Saat';
                                    if ($hours != 1) $output .= '';
                                    if ($v7 > 0) $output .= ' ';
                                }
                                if ($v7 >= 60) {
                                    $minutes = floor($v7 / 60);
                                    $v7 = $v7 % 60;
                                    $output .= $minutes . ' Dakika';
                                    if ($minutes != 1) $output .= '';
                                    if ($v7 > 0) $output .= '';
                                }

                                if ($v7 != 1) $output .= '';
                                return $output;
                            }
                            echo calculate($v7);
                        }   ?>
                    </p>
                </div>
            </div>
            <!-- <button type="submit" name="boxsubmit">HESAPLA</button> -->
        </form>
    </section>



    <script>
        const header = document.getElementById('header');
        const toggle = document.getElementById('toggle');
        const navbar = document.getElementById('navbar');

        document.onclick = function(e) {
            if (e.target.id !== 'header' && e.target.id !== 'toggle' && e.target.id !== 'navbar') {
                toggle.classList.remove('active');
                navbar.classList.remove('active');
            }
        }

        toggle.onclick = function() {
            toggle.classList.toggle('active');
            navbar.classList.toggle('active');
        }
    </script>

</body>

</html>