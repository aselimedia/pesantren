<?=
$this->extend('Layout/Admin/templates');
$this->section('content');
?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Tambah Dokumen Keperluan Instansi</h5>
                    </div>
                    <hr>
                    <form action="<?= base_url('/admin/dokumen/add/instansi') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Instansi Tujuan</label>
                            <input type="text" name="instansi" class="form-control <?= (isset($validation)) ? ($validation->hasError('instansi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Universitas Negeri malang" value="<?= set_value('instansi') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('instansi')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Instansi Tujuan</label>
                            <input type="text" name="alamat" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Buaya VI Malang" value="<?= set_value('alamat') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('alamat')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keperluan</label>
                            <input type="text" name="perihal" class="form-control <?= (isset($validation)) ? ($validation->hasError('perihal')) ? 'is-invalid' : null : null ?>" placeholder="Keperluan" value="<?= set_value('perihal') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('perihal')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kop</label>
                            <select name="kop" class="select2">
                                <?php foreach ($kopSurat as $data) : ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengajuan Surat</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl" class="form-control datepicker-input" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                    <div class="row">
                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>