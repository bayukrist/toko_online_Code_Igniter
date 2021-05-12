<div class="container-fluid">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img width="100%" height="450px" src="<?php echo base_url('assets/img/slider1.png')?>"class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img width="100%" height="450px" src="<?php echo base_url('assets/img/slider2.png')?>"class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" role="button" href="#carouselExampleInterval"  data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" role="button" href="#carouselExampleInterval"  data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

    <div class="row text-center mt-3">
        <?php foreach ($peralatan_olahraga as $brg) : ?>

            <div class="card ml-2 mb-2" style="width: 16rem;">
                <img width="200px" height="200px" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge bg-success mb-3"> <b>Rp. <?php echo number_format($brg->harga, 0,',','.') ?></b></span><br>
                   <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                   <?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
                </div>

        <?php endforeach ?>
    </div>
</div>