<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SengketaTanah;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function biddingSponsor()
    {
        return view('public.bidding_sponsor');
    }
    public function kerjasamaLahan()
    {
        $data['sengketa'] = SengketaTanah::get();
        $data['data_jual_beli'] = $this->data_jual_beli();
        return view('public.kerjasama_lahan', $data);
    }
    public function podcastSengketa()
    {
        return view('public.podcast_sengketa');
    }

    public function jualBeliLahan()
    {
        $data['sengketa'] = SengketaTanah::get();

        $data['data_jual_beli'] = $this->data_jual_beli();


        return view('public.jual_beli_lahan', $data);
    }

    public function lelangLahan()
    {
        $data['sengketa'] = SengketaTanah::get();

        $data['data_jual_beli'] = $this->data_jual_beli();

        return view('public.lelang_lahan', $data);
    }

    public function bidLahan()
    {
        $data['sengketa'] = SengketaTanah::get();

        $data['data_jual_beli'] = $this->data_jual_beli();

        return view('public.bid_lahan', $data);
    }

    public function bidRumah()
    {
        $data['sengketa'] = SengketaTanah::get();

        $data['data_jual_beli'] = $this->data_jual_beli();

        return view('public.bid_rumah', $data);
    }

    public function joinSengketa()
    {
        return view('sengketa.join');
    }

    public function jasaAppraisal()
    {
        return view('sengketa.jasa_appraisal');
    }

    public function jasaTukangUkur()
    {
        return view('sengketa.jasa_ukur');
    }

    public function jasaNotaris()
    {
        return view('sengketa.jasa_notaris');
    }

    public function jasaPPAT()
    {
        return view('sengketa.jasa_ppat');
    }

    public function jasaPengacara()
    {
        return view('sengketa.jasa_pengacara');
    }

    public function detailDataDiri()
    {
        return view('sengketa.detail_data_diri');
    }

    public function registerKerjasama()
    {
        return view('auth.kerjaSama.register');
    }
    public function registerJualBeli()
    {
        return view('auth.jual-beli-lahan.register');
    }
    public function registerLelangLahan()
    {
        return view('auth.lelangLahan.register');
    }

    public function biddingPengacara()
    {
        $data['sengketa'] = SengketaTanah::get();
        $data['data_jual_beli'] = $this->data_jual_beli();
        return view('public.bidding_pengacara', $data);
    }

    public function listTukang()
    {
        return view('public.list-tukang');
    }
    public function detailTukang(Request $request)
    {
        $data['req'] = $request;
        return view('public.detail-tukang', $data);
    }
    public function detailPetugas(Request $request)
    {
        $data['req'] = $request;
        return view('public.detail-petugas', $data);
    }
    private function data_jual_beli()
    {
        return [
            [

                'id' => 1,
                'owner' => "Bahru",
                'objek' => "Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-001",
                "luas" => "1 Ha",
                'lokasi' => "Pancawati, Bogor",
                'dana' => "Rp.450.000.000",
                "imbal_hasil" => "Fee 50% Dari Pinjaman",
                "jaminan" => "Sertifikat Tanah",
                "jumlah_bid" => 3,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => "images/lahan1.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan3.jpeg",
                "img3" => "images/lahan4.jpeg",
                "img-rumah" => "images/rm1.jpg",
                "img-rumah1" => "images/rm2.jpg",
                "img-rumah2" => "images/rm3.jpg",
                "img-rumah3" => "images/rm4.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 2,
                'owner' => "Fatah",
                'objek' => "Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-001",
                "luas" => "5000 m",
                'lokasi' => "Pancawati, Bogor",
                'dana' => "Rp.500.000.000",
                "imbal_hasil" => "Bagi Hasil 70/30*",
                "jaminan" => "Sertifikat Rumah",
                "jumlah_bid" => 4,
                "link_yt" => 'https://www.youtube.com/embed/byby3HJ3OCI',
                "img" => 'images/lahan2.jpeg',
                "img1" => "images/lahan1.jpeg",
                "img2" => "images/lahan3.jpeg",
                "img3" => "images/lahan4.jpeg",
                "img-rumah" => "images/rm2.jpg",
                "img-rumah1" => "images/rm1.jpg",
                "img-rumah2" => "images/rm3.jpg",
                "img-rumah3" => "images/rm4.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 3,
                'owner' => "Ophelia Suartini",
                'objek' => "Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-001",
                "luas" => "3.2 Ha",
                'lokasi' => "Medan, Sumatra Utara",
                'dana' => "Rp.200.000.000",
                "imbal_hasil" => "Bagi Hasil 60/40*",
                "jaminan" => "Sertifikat Tanah",
                "jumlah_bid" => 6,
                "link_yt" => 'https://www.youtube.com/embed/1I4iEKK1qbQ',
                "img" => 'images/lahan3.jpeg',
                "img1" => "images/lahan1.jpeg",
                "img2" => "images/lahan2.jpeg",
                "img3" => "images/lahan4.jpeg",
                "img-rumah" => "images/rm3.jpg",
                "img-rumah1" => "images/rm1.jpg",
                "img-rumah2" => "images/rm2.jpg",
                "img-rumah3" => "images/rm4.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 4,
                'owner' => "Kemal Pradana",
                'objek' => "Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-002",
                "luas" => "2.3 Ha",
                'lokasi' => "Bandung, Jawa Barat",
                'dana' => "Rp.300.000.000",
                "imbal_hasil" => "Bagi Hasil 50/50*",
                "jaminan" => "Sertifikat Rumah",
                "jumlah_bid" => 1,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan1.jpeg',
                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
                "img-rumah" => "images/rm1.jpg",
                "img-rumah1" => "images/rm2.jpg",
                "img-rumah2" => "images/rm4.jpg",
                "img-rumah3" => "images/rm3.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 5,
                'owner' => "Tugiman Tampubolon",
                'objek' => "Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-002",
                "luas" => "4.6 Ha",
                'lokasi' => "Solo, Jawa Tengah",
                'dana' => "Rp.700.000.000",
                "imbal_hasil" => "Fee 75% Dari Pinjaman",
                "jaminan" => "Sertifikat Tanah",
                "jumlah_bid" => 12,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan3.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img3" => "images/lahan1.jpeg",
                "img-rumah" => "images/rm3.jpg",
                "img-rumah1" => "images/rm4.jpg",
                "img-rumah2" => "images/rm2.jpg",
                "img-rumah3" => "images/rm1.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 6,
                'owner' => "Galak Dongoran",
                'objek' => "Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-002",
                "luas" => "6 Ha",
                'lokasi' => "Depok, Jawa Barat",
                'dana' => "Rp.760.000.000",
                "imbal_hasil" => "Fee 100% Dari Pinjaman",
                "jaminan" => "Sertifikat Rumah",
                "jumlah_bid" => 10,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan2.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
                "img1" => "images/lahan1.jpeg",
                "img-rumah" => "images/rm2.jpg",
                "img-rumah1" => "images/rm4.jpg",
                "img-rumah2" => "images/rm3.jpg",
                "img-rumah3" => "images/rm1.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 7,
                'owner' => "Tugiman Tampubolon",
                'objek' => "Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-003",
                "luas" => "8 Ha",
                'lokasi' => "Batu, Malang",
                'dana' => "Rp.340.000.000",
                "imbal_hasil" => "Bagi Hasil 60/40*",
                "jaminan" => "Sertifikat Tanah",
                "jumlah_bid" => 9,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan3.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img3" => "images/lahan1.jpeg",
                "img-rumah" => "images/rm3.jpg",
                "img-rumah1" => "images/rm4.jpg",
                "img-rumah2" => "images/rm2.jpg",
                "img-rumah3" => "images/rm1.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 8,
                'owner' => "Jais Sinaga",
                'objek' => "Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-003",
                "luas" => "5 Ha",
                'lokasi' => "Banyuwangi, Jawa timur",
                'dana' => "Rp.280.000.000",
                "imbal_hasil" => "Bagi Hasil 70/30*",
                "jaminan" => "Sertifikat Rumah",
                "jumlah_bid" => 7,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan1.jpeg',
                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
                "img-rumah" => "images/rm1.jpg",
                "img-rumah1" => "images/rm2.jpg",
                "img-rumah2" => "images/rm4.jpg",
                "img-rumah3" => "images/rm3.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            [
                'id' => 9,
                'owner' => "Bakidin Hutagalung",
                'objek' => "Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-003",
                "luas" => "3 Ha",
                'lokasi' => "Sentul,Bogor",
                'dana' => "Rp.710.000.000",
                "imbal_hasil" => "Bagi Hasil 50/50*",
                "jaminan" => "Sertifikat Tanah",
                "jumlah_bid" => 8,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => 'images/lahan2.jpeg',
                "img3" => "images/lahan3.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan1.jpeg",
                "img-rumah" => "images/rm2.jpg",
                "img-rumah1" => "images/rm3.jpg",
                "img-rumah2" => "images/rm4.jpg",
                "img-rumah3" => "images/rm1.jpg",
                "peruntukan" => "permukiman",
                "jenis_lahan" => "Tanah Darat"
            ],
            // [
            //     'id'=>10,
            //     'owner'=>"Kasusra Tampubolon",
            //     'objek'=>"Sengketa Pertanahan",
            //     "kode_objek"=>"sp",
            //     "kode"=>"SP-004",
            //     "luas"=>"2.9 Ha",
            //     'lokasi'=>"Garut, Jawa Barat",
            //     'dana'=>"Rp.710.000.000",
            //     "imbal_hasil"=>"Fee 75% Dari Pinjaman",
            //     "jaminan"=>"Sertifikat Rumah",
            //     "jumlah_bid"=>6,
            //     "link_yt"=>'',
            //     "img"=>'images/lahan3.jpeg',
            //     "img3"=>"images/lahan1.jpeg",
            //     "img2"=>"images/lahan4.jpeg",
            //     "img1"=>"images/lahan2.jpeg",
            //      "peruntukan"=>"permukiman",
            //     "jenis_lahan"=>"Tanah Darat"
            // ],
        ];
    }
}
