<main>
    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <a href="<?=base_url()?>RekapWarnet/TambahRekap" class="btn btn-primary m-2">Tambah Rekap</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Warnet</th>
                                            <th>Nama Op</th>
                                            <th>Jam Berakhir</th>
                                            <th>Shift</th>
                                            <th>Jumlah</th>
                                            <th>gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Warnet</th>
                                            <th>Nama Op</th>
                                            <th>Jam Berakhir</th>
                                            <th>Shift</th>
                                            <th>Jumlah</th>
                                            <th>gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($rekap as $item): ?>
                                        <tr>
                                            <td><?=$item['nama_warnet']?></td>
                                            <td><?=$item['nama_op']?></td>
                                            <td><?=$item['jam']?></td>
                                            <td><?=$item['shift']?></td>
                                            <td><?=$item['jumlah']?></td>
                                            <td>
                                                <img src="<?=base_url()?>uploads/<?=$item['gambar']?>" height="100px" widht="100px" id="imageToSend"/>
                                            </td>
                                            <td class="gap-2">
                                                <input type="text" id="hiddenInput" value="Balinet, Op dea, jam 15:00 , shift 1 = <?=$item['jumlah']?>" style="display:none;">
                                                <button class="btn btn-sm btn-success my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-sm btn-warning my-2" id="copyButton">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
                                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
</main>