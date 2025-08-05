<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    // Daftar Provinsi (kategori 2)
    public function index()
    {
        $newsModel = new NewsModel();

        $perPage = 9;
        $news = $newsModel
            ->where('id_category', 2)
            ->orderBy('waktu', 'DESC')
            ->paginate($perPage, 'news');

        $pager = $newsModel->pager;

        return view('services_regency', [
            'title' => 'Daftar Aplikasi Koperasi per Provinsi',
            'activeMenu' => 'news',
            'news' => $news,
            'pager' => $pager
        ]);
    }

    // Detail Provinsi (kategori 2)
    public function detail($id)
    {
        $newsModel = new NewsModel();
        $news = $newsModel->find($id);

        if (!$news || $news['id_category'] != 2) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Tambah hit view
        $newsModel->where('id_news', $id)->set('view', 'view+1', false)->update();

        $namaProvinsi = $news['tag'] ?? 'Provinsi';
        $judul = 'Jasa Pembuatan Aplikasi Koperasi di ' . $namaProvinsi;
        $metaDescription = mb_substr(strip_tags($news['berita']), 0, 160);

        return view('detail_services_regency', [
            'title' => $judul,
            'metaDescription' => $metaDescription,
            'metaTags' => $news['meta_description'] ?? '',
            'activeMenu' => 'news',
            'news' => $news,
            'namaWilayah' => $namaProvinsi
        ]);
    }

    // Daftar Kabupaten (kategori 1)
    public function location()
    {
        $newsModel = new NewsModel();

        $perPage = 9;
        $news = $newsModel
            ->where('id_category', 1)
            ->orderBy('waktu', 'DESC')
            ->paginate($perPage, 'location');

        $pager = $newsModel->pager;

        return view('services_location', [
            'title' => 'Layanan Sistem Informasi Koperasi per Kabupaten',
            'activeMenu' => 'location',
            'news' => $news,
            'pager' => $pager
        ]);
    }

    // Detail Kabupaten (kategori 1)
    public function location_detail($id)
    {
        $newsModel = new NewsModel();
        $news = $newsModel->find($id);

        if (!$news || $news['id_category'] != 1) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $namaKabupaten = $news['tag'] ?? 'Kabupaten';
        $judul = 'Jasa Pembuatan Sistem Informasi Koperasi di ' . $namaKabupaten;
        $metaDescription = mb_substr(strip_tags($news['berita']), 0, 160);

        return view('services_location_detail', [
            'title' => $judul,
            'metaDescription' => $metaDescription,
            'metaTags' => $news['meta_description'] ?? '',
            'activeMenu' => 'location',
            'news' => $news,
            'namaWilayah' => $namaKabupaten
        ]);
    }
}
