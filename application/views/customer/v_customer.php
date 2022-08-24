<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="<?= base_url("assets/logo/eresta_dev.png") ?>">
                <!-- <h2>ERESTA<span class="danger">DEV</span></h2> -->
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
        </div>

        <!-- MENU -->
        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <a href="<?= base_url('auth/logout'); ?>">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>
    <main>
        <h1>My List</h1><br>
        <div class="container">
            <h3>Join :<?= $user['created']; ?></h3>
        </div>
        <div class="my_list">
            <table id="customers" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name Progress</th>
                        <th>Progress</th>
                        <th>Created</th>
                        <th>Finished</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $this->db->select('id_progress, progress.iduser, name_progress, progress, photo, progress.created, progress.finished, progress.status');
                    $this->db->join('user', 'user.iduser = progress.iduser');
                    $this->db->where('progress.iduser', $user['iduser']);
                    $cek = $this->db->get('progress')->result();
                    $no = 1;
                    foreach ($cek as $value) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td style="width:35%"><?= $value->name_progress; ?></td>
                            <td align="center"><?= $value->progress; ?> %</td>
                            <td align="center"><?= $value->created; ?></td>
                            <td align="center"><?= $value->finished; ?></td>
                            <td align="center" style="width:15%">
                                <?php if ($value->status == 1) { ?>
                                    <span class="label danger">Cancel</span>
                                <?php } else if ($value->status == 2) { ?>
                                    <span class="label info">On Progress</span>
                                <?php } else if ($value->status == 3) { ?>
                                    <span class="label success">Finished</span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
        </div>
    </div>
</div>