<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki's Portofolio</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style_work.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--navigation-->
    <header class="aheader">
        <nav class="nav bd-grid">
            <div class="navtoggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="navmenu" id="nav-menu">
                <ul class="navlist">
                    <li class="navitem"><a href="#Work1" class="navlink active">Work 1</a></li>
                    <li class="navitem"><a href="#Work2" class="navlink">Work 2</a></li>
                    <li class="navitem"><a href="#Work3" class="navlink">Work 3</a></li>
                    <li class="navitem"><a href="index.php" class="navlink">Home</a></li>
                </ul>
            </div>
            <div>
                <input type="checkbox" id="switch" name="theme" />
                <label for="switch">Toggle</label>

                <a href="#" class="navlogo">Keenu</a>
            </div>

        </nav>
    </header>

    <div class="alert <?php echo $alert; ?>">
        <span><?php echo $alert2; ?></span>
    </div>

    <main class="amain">
        <section class="about section " id="Work1">
            <h2 class="sectionjudul">Work 1</h2>

            <div class="aboutcontainer bd-grid">
                <div class="aboutgambar">
                    <img src="assets\image\work1.png" alt="">
                </div>

                <div>
                    <h2 class="aboutsubtittle">Nida Syifa Islamic School Website</h2>
                    <p class="abouttext">
                        Programming language : PHP.
                        <br>
                        Framework : Laravel, Bootstrap.
                    </p>
                    <br>
                    <p class="abouttext">
                        Website yang saya bantu edit tampilannya ketika magang di kahuripan teknologi.
                    </p>
                </div>
            </div>
        </section>

        <section class="about section " id="Work2">
            <h2 class="sectionjudul">Work 2</h2>

            <div class="aboutcontainer bd-grid">
                <div class="aboutgambar">
                    <img src="assets\image\work3.png" alt="">
                </div>

                <div>
                    <h2 class="aboutsubtittle">Remoon</h2>
                    <p class="abouttext">
                        Framework : Code Igniter 3, Bootstrap.
                        <br>
                        Programming language: PHP.
                    </p>
                    <br>
                    <p class="abouttext">
                        Website tentang rental mobil online yang dimana didalamnya terdapat pemesanan,
                        serta edit akun bagi user dan terdapat manajemen akun, merk, mobil, pesanan bagi admin.
                    </p>
                </div>
            </div>
        </section>

        <section class="about section " id="Work3">
            <h2 class="sectionjudul">Work 3</h2>

            <div class="aboutcontainer bd-grid">
                <div class="aboutgambar">
                    <img src="assets\image\work2.png" alt="">
                </div>

                <div>
                    <h2 class="aboutsubtittle">Gympedia</h2>
                    <p class="abouttext">
                        Programming language : PHP.
                    </p>
                    <br>

                    <p class="abouttext">Website gym online dimana didalamnya terdapat fitur penyewaan alat, tutorial gym, sewa pelatih, dan fitur chat untuk konsultasi.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footerjudul">keenu</p>
        <div class="footersocial">
            <a href="https://web.facebook.com/muhamadrizki.nugroho/" class="footericon"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/keenu0/" class="footericon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footericon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>

    <!--untukscroll-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/work.js"></script>
    <script>
        var checkbox = document.querySelector('input[name=theme]');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                trans()
                document.documentElement.setAttribute('data-theme', 'dark')
            } else {
                trans()
                document.documentElement.setAttribute('data-theme', 'light')
            }
        })

        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition')
            }, 1000)
        }
    </script>

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        $('.alert').addClass("showi");

        setTimeout(function() {
            $('.alert').addClass("hide");
        }, 3000);
    </script>


</body>

</html>