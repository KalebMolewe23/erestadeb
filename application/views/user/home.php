<section id="header">
    <a href=""><img src="<?= base_url("assets/logo/eresta_dev.png") ?>" class="logo" alt="" width="250px"></a>

    <div>
        <ul id="navbar">
            <li>
                <div class="boxContainer">
                    <table class="elementsContainer">
                        <tr>
                            <td>
                                <form action="<?= base_url('home/search/') ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" class="search" name="keyword" placeholder="Search...">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="<?= base_url('home/search'); ?>">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a class="active" href="<?= base_url("home"); ?>">Home</a></li>
            <li><a href="<?= base_url("home/produk"); ?>">Produk</a></li>
            <li><a href="<?= base_url("home/about"); ?>">About</a></li>
            <li><a href="<?= base_url("auth"); ?>">Login</a>/<a href="<?= base_url("auth/register"); ?>">Register</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="hero">
    <div class="container">
        <!-- <canvas id="canvas"> -->
            <div class="row">
                <div class="col">
                    <h2><strong>Website Developer</strong></h2>
                    <h5>Jasa pembuatan ,pengembangan website, </h5>
                    <h5>dan custome sesuai kebutuhan anda </h5><br>
                    <h5 class="typewrite text-black" data-period="2000" data-type='["Jadikan Project Keinginan Anda, Kami Siap Membantu....." ]'></h5>
                </div>
                <div class="col col-lg-3">
                    <img src="<?= base_url("assets/image/cpu.png"); ?>" width="350px">
                </div>
            </div>
        <!-- </canvas> -->
</section>


<section id="img-wa">
    <div class="img">
        <a href="https://wa.me/6285236940533?text=Halo+erestaweb,+saya berminat dengan jasa anda" target="_blank"><img src="https://www.azostech.com/azapp/application/azcms/azostech/assets/images/chatwa.png"></a>
    </div>
</section>