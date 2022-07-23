<section id="header">
    <a href=""><img src="<?= base_url("assets/logo/logo.png") ?>" class="logo" alt="" width="150px"></a>

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
        <h1><strong>ERESTAWEB DEVELOVER</strong></h1>
        <h1><strong>ERESTAWEB DEVELOVER</strong></h1><br><br><br>
        <div class="animasi-teks"><strong>Jadikan Project Keinginan Kalian, Kami Siap Membantu.....</strong></div>
    </div>
</section>


<section id="img-wa">
    <div class="img">
        <a href="https://wa.me/6285236940533?text=Halo+erestaweb,+saya berminat dengan jasa anda" target="_blank"><img src="https://www.azostech.com/azapp/application/azcms/azostech/assets/images/chatwa.png"></a>
    </div>
</section>

<script>
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }
</script>