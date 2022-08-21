<div class="container">
    <div class="forms-container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url('auth'); ?>" class="sign-in-form" method="post">
                    <h2 class="title">Sign in</h2>
                    <?= $this->session->flashdata('message') ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn solid" value="Login" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <img src="<?= base_url("assets/icon/undraw_medical_research_qg4d.svg"); ?>" class="image" alt="">
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/login/app.js'); ?>">