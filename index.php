<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Protoflio</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
                    <li class="navitem"><a href="#home" class="navlink active">Home</a></li>
                    <li class="navitem"><a href="#about" class="navlink">About</a></li>
                    <li class="navitem"><a href="#skills" class="navlink">Skills</a></li>
                    <li class="navitem"><a href="#work" class="navlink">Work</a></li>
                    <li class="navitem"><a href="#contact" class="navlink">Contact</a></li>
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
        <section class="home bd-grid" id="home">
            <div class="homedata">
                <h1 class="homejudul">Hi,<br>I'am <span class="homejudulwarna">Rizki</span><br> Front-End <br>Web developer</h1>

                <a href="https://drive.google.com/file/d/1yODBd12Xxb11Tv1NSjIspSjNj73gOu4q/view?usp=sharing" class="button">Download CV</a>
            </div>

            <div class="homesocial">
                <a href="https://web.facebook.com/muhamadrizki.nugroho/" class="homesocialicon"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/keenu0/" class="homesocialicon"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/keenu1" class="homesocialicon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="homegambar">
                <img src="assets\image\profilx.png" alt="">
            </div>
        </section>

        <section class="about section " id="about">
            <h2 class="sectionjudul">About</h2>

            <div class="aboutcontainer bd-grid">
                <div class="aboutgambar">
                    <img src="assets\image\profil3.jpeg" alt="">
                </div>

                <div>
                    <h2 class="aboutsubtittle">I'am Keenu</h2>
                    <p class="abouttext">My name is Muhamad Rizki Nugroho I'm a Front End Engineer. I describe myself as a passionate developer who loves coding, and the web platform.
                    </p>
                    <br>
                    <p class="abouttext">I'm curently student at Singa Perbangsa Karawang University where I am become lab assistant to help college teacher to teach how to coding website for 1 semester and doing internship in PT Kahuripan teknologi for a month as a front end developer, That helps me to learn a ton of new stuff. Now, I’m looking to leverage everything I’ve learned in uni and get some hands-on work experience.</p>
                </div>
            </div>
        </section>

        <section class="skills section" id="skills">
            <h2 class="sectionjudul">Skills</h2>

            <div class="skillscontainer bd-grid">
                <div>
                    <h2 class="skillssubtittle">Profesional Skills</h2>
                    <p class="skillstext">i'm still minim experience but i always improving my skills by doing my own project and doing internships in many companies.</p>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bxl-html5 skillsicon'></i>
                            <span class="skillsnama2">HTML5</span>
                        </div>
                        <div class="skillsbar skillshtml">

                        </div>
                        <div>
                            <span class="skillspercentage">95%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bxl-css3 skillsicon'></i>
                            <span class="skillsnama2">CSS3</span>
                        </div>
                        <div class="skillsbar skillscss">

                        </div>
                        <div>
                            <span class="skillspercentage">85%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bxl-javascript skillsicon'></i>
                            <span class="skillsnama2">JAVASCRIPT</span>
                        </div>
                        <div class="skillsbar skillsjs">

                        </div>
                        <div>
                            <span class="skillspercentage">80%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bxs-paint skillsicon'></i>
                            <span class="skillsnama">UX/UI</span>
                        </div>
                        <div class="skillsbar skillsux">

                        </div>
                        <div>
                            <span class="skillspercentage">85%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bx-code skillsicon'></i>
                            <span class="skillsnama">PHP</span>
                        </div>
                        <div class="skillsbar skillphp">

                        </div>
                        <div>
                            <span class="skillspercentage">85%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bxl-bootstrap skillsicon'></i>
                            <span class="skillsnama">Bootstrap</span>
                        </div>
                        <div class="skillsbar skillbts">

                        </div>
                        <div>
                            <span class="skillspercentage">80%</span>
                        </div>
                    </div>
                    <div class="skillsdata">
                        <div class="skillsnama1">
                            <i class='bx bx-shape-square skillsicon'></i>
                            <span class="skillsnama">Code Igniter</span>
                        </div>
                        <div class="skillsbar skillci">

                        </div>
                        <div>
                            <span class="skillspercentage">80%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="assets/img/work3.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <section class="work section" id="work">
            <h2 class="sectionjudul">Work</h2>

            <div class="workcontainer bd-grid">
                <div class="workgambar">
                    <a href="Work.php"><img src="assets/image/work1.png" alt=""></a>
                </div>
                <div class="workgambar">
                    <a href="Work.php"><img src="assets/image/work2.png" alt=""></a>
                </div>
                <div class="workgambar">
                    <a href="Work.php"><img src="assets/image/work3.png" alt=""></a>
                </div>
                <div class="workgambar">
                    <a href="Work.php"><img src="assets/image/work4.png" alt=""></a>
                </div>

            </div>
        </section>

        <section class="contact section" id="contact">
            <h2 class="sectionjudul">Contact</h2>

            <div class="contactcontainer bd-grid">
                <form class="contactform" action="" method="POST">
                    <input type="text" placeholder="Email" class="contactinput" name="email">
                    <input type="text" placeholder="Name" class="contactinput" name="nama">
                    <textarea type="text" placeholder="Message here.." cols="0" rows="10" class="contactinput" name="pesan"></textarea>
                    <input type="submit" value="Send" class="contactbutton button" name="submit">
                </form>
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
    <script src="assets/js/main.js"></script>
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