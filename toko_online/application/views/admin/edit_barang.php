<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

    <?php foreach($barang as $brg): ?>

        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>" required>
            </div>

            <div class="for-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>" required>
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>" required>
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>" required>
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>" required>
            </div>

            <button type="submit" class="btn btn-primary tbn-sm mt-3">Simpan</button> 
        </form>

    <?php endforeach ?>
</div>