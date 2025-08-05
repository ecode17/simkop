<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="background: #f7fafc;min-height:80vh;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div class="card shadow-sm border-0 rounded-4 mb-4">
                    <div style="height:320px;overflow:hidden; border-top-left-radius:1.2rem; border-top-right-radius:1.2rem;">
                        <img src="<?= base_url('assets/img/Tambah Data Nasabah-2.png') ?>"
                            class="w-100 h-100"
                            style="object-fit:cover;"
                            alt="<?= esc($news['judul']) ?>">
                    </div>
                    <div class="card-body px-4 py-4">
                        <h1 class="fw-bold mb-3" style="color:#21795a;font-size:2.1rem;"><?= esc($news['judul']) ?></h1>
                        <div class="mb-3" style="font-size:1.07rem;color:#3a7561;">
                            <i class="bi bi-calendar-event"></i>
                            <?= $news['waktu'] ? date('d M Y', strtotime($news['waktu'])) : '-' ?>
                        </div>
                        <div class="mb-4 text-muted" style="font-size:1.04rem;line-height:1.7;">
                            <?= nl2br($news['berita']) ?>
                        </div>
                        <?php if (!empty($news['tag'])): ?>
                        <div class="mb-2">
                            <span class="badge rounded-pill bg-success-soft text-success" style="background:#e8faf3;">
                                <i class="bi bi-tag"></i> <?= esc($news['tag']) ?>
                            </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="<?= site_url('news/location') ?>" class="btn btn-outline-success rounded-pill px-4">
                        <i class="bi bi-arrow-left"></i> Kembali ke Daftar Lokasi
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
