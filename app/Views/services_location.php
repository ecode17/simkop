<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="background: #f7fafc;">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold" style="color:#1e6d58;">Layanan Regional & Artikel Lokasi</h2>
                <p class="text-muted mb-0 fs-5" style="color:#43766C">
                    Temukan berita dan update terbaru tentang layanan koperasi di berbagai lokasi/regional.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($news as $item):
                $namaWilayah = $item['tag'] ?? 'kabupaten';
                $slug = url_title('jasa pembuatan sistem informasi koperasi di ' . $namaWilayah, '_', true);
            ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow-sm border-0 rounded-4 w-100 h-100 hover-shadow"
                        style="background: #fff;transition:.2s;">
                        <div style="height: 200px; overflow: hidden; border-top-left-radius: 1.2rem; border-top-right-radius: 1.2rem;">
                            <img src="<?= base_url('assets/img/Tambah Data Nasabah-2.png') ?>"
                                class="img-fluid w-100"
                                style="object-fit: cover; height: 100%;"
                                alt="Berita <?= esc($item['judul']) ?>">
                        </div>
                        <div class="card-body px-4 py-3 d-flex flex-column">
                            <h5 class="card-title fw-bold mb-2" style="color: #21795a; font-size:1.12rem;">
                                <?= esc($item['judul']) ?>
                            </h5>
                            <div class="mb-2 small" style="font-size:0.97rem;color:#3a7561;">
                                <i class="bi bi-calendar-event"></i>
                                <?= $item['waktu'] ? date('d M Y', strtotime($item['waktu'])) : '-' ?>
                            </div>
                            <p class="card-text text-muted flex-grow-1" style="font-size:0.98rem;min-height:65px;">
                                <?= esc(substr(strip_tags($item['berita']), 0, 110)) ?>...
                            </p>
                            <a href="<?= site_url('layanan/' . $item['id_news'] . '/' . $slug) ?>" class="btn btn-outline-success btn-sm rounded-pill mt-2 align-self-start px-3">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (empty($news)): ?>
                <div class="col-12">
                    <div class="alert alert-info text-center shadow rounded-4">
                        Tidak ada berita layanan regional.
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- PAGINATION MODERN DENGAN ELLIPSIS -->
        <?php
        $totalPages = $pager->getPageCount('location');
        $currentPage = $pager->getCurrentPage('location');
        $range = 1;
        $showFirstLast = $totalPages > 5;
        function page_link_location($page, $pager, $label = null, $active = false)
        {
            $url = $pager->getPageURI($page, 'location');
            return '<li class="page-item' . ($active ? ' active' : '') . '">
                <a class="page-link" href="' . $url . '">' . ($label ?? $page) . '</a>
            </li>';
        }
        ?>
        <?php if ($totalPages > 1): ?>
            <div class="row">
                <div class="col d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-slim shadow-sm mb-0">
                            <!-- Prev -->
                            <li class="page-item<?= ($currentPage == 1 ? ' disabled' : '') ?>">
                                <a class="page-link" href="<?= ($currentPage == 1) ? '#' : $pager->getPageURI($currentPage - 1, 'location') ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <!-- First page & ellipsis -->
                            <?php if ($showFirstLast && $currentPage > $range + 2): ?>
                                <?= page_link_location(1, $pager, '1', $currentPage == 1) ?>
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            <?php endif; ?>
                            <!-- Middle pages -->
                            <?php
                            $start = max(1, $currentPage - $range);
                            $end = min($totalPages, $currentPage + $range);
                            for ($i = $start; $i <= $end; $i++):
                                if ($i == 1 || $i == $totalPages) continue;
                                echo page_link_location($i, $pager, null, $currentPage == $i);
                            endfor;
                            ?>
                            <!-- Last page & ellipsis -->
                            <?php if ($showFirstLast && $currentPage < $totalPages - ($range + 1)): ?>
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                                <?= page_link_location($totalPages, $pager, $totalPages, $currentPage == $totalPages) ?>
                            <?php endif; ?>
                            <!-- Jika halaman sedikit -->
                            <?php if (!$showFirstLast):
                                for ($i = 1; $i <= $totalPages; $i++):
                                    echo page_link_location($i, $pager, null, $currentPage == $i);
                                endfor;
                            endif; ?>
                            <!-- Next -->
                            <li class="page-item<?= ($currentPage == $totalPages ? ' disabled' : '') ?>">
                                <a class="page-link" href="<?= ($currentPage == $totalPages) ? '#' : $pager->getPageURI($currentPage + 1, 'location') ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
    .pagination-slim {
        --bs-pagination-padding-x: 0.92rem;
        --bs-pagination-padding-y: 0.56rem;
        --bs-pagination-border-radius: 50px;
        --bs-pagination-color: #21795a;
        --bs-pagination-bg: #fff;
        --bs-pagination-border-width: 1.3px;
        --bs-pagination-border-color: #bde8d6;
        --bs-pagination-hover-bg: #e8faf3;
        --bs-pagination-hover-color: #21795a;
        --bs-pagination-active-bg: #1e6d58;
        --bs-pagination-active-border-color: #1e6d58;
        --bs-pagination-active-color: #fff;
        box-shadow: 0 4px 18px 0 rgba(30, 109, 88, .09);
        border-radius: 3rem !important;
    }

    .pagination-slim .page-link {
        border-radius: 50px !important;
        border: 1.3px solid #bde8d6;
        color: #21795a;
        margin: 0 4px;
        min-width: 40px;
        text-align: center;
        background: #fff;
        font-weight: 500;
        font-size: 1.02rem;
        transition: all .16s cubic-bezier(.43, .18, .51, 1.17);
        box-shadow: none;
    }

    .pagination-slim .page-item.active .page-link {
        background: #1e6d58;
        color: #fff !important;
        border-color: #1e6d58;
        font-weight: 600;
    }

    .pagination-slim .page-link:hover {
        background: #bde8d6;
        color: #1e6d58;
        border-color: #21795a;
    }

    .pagination-slim .page-item.disabled .page-link {
        background: #f7fafc;
        color: #b1b1b1;
        border-color: #d2e7df;
        cursor: not-allowed;
    }

    .pagination-slim .page-item .page-link:focus {
        box-shadow: 0 0 0 .16rem #bde8d6 !important;
    }

    .hover-shadow:hover {
        box-shadow: 0 8px 36px 0 rgba(30, 109, 88, .11) !important;
        transform: translateY(-4px) scale(1.01);
        transition: 0.2s cubic-bezier(.24, .74, .58, 1.01);
        z-index: 2;
    }
</style>

<?= $this->endSection() ?>