<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Rekap</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Rekap</li>
        </ol>
        <div>
            <form action="<?=base_url("index.php/RekapWarnet/simpanRekap/")?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleNamaWarnet" class="form-label">Nama Warnet</label>
                    <input name="nama_warnet" type="text" class="form-control" id="exampleNamaWarnet" value="Bali Net" >
                </div>
                <div class="mb-3">
                    <label for="exampleNamaOperator" class="form-label">Nama Operator</label>
                    <input name="nama_operator" type="text" class="form-control" id="exampleNamaOperator" value="Dea Ayu Ananda" >
                </div>
                <div class="mb-3">
                    <label for="exampleJamAkhir" class="form-label">Jam Akhir</label>
                    <input name="jam_akhir" type="text" class="form-control" id="exampleJamAkhir" value="15:00" >
                </div>
                <div class="mb-3">
                    <label for="exampleShift" class="form-label">Shitf</label>
                    <input name="shift" type="text" class="form-control" id="exampleShift" value="1" >
                </div>
                <div class="mb-3">
                    <label for="exampleJumlah" class="form-label">Jumlah</label>
                    <input name="jumlah" type="number" class="form-control" id="exampleJumlah">
                </div>
                <div class="mb-3">
                    <label for="exampleUpload" class="form-label">File</label>
                    <input name="file" type="file" class="form-control" id="exampleUpload" accept="image/*" capture="camera"    >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>               
    </div>
</main>