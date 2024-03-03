<?php

namespace App\Http\Controllers;

use App\Models\SengketaTanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SengketaController extends Controller
{
    public function index()
    {
        $data['sengketa'] = SengketaTanah::get();
        // $data['bid_sengketa'] = $this->data_sengketa();
        // $data['bid_pengacara'] = $this->data_sengketa_pengacara();
        // $data['bid_pemerintah'] = $this->data_sengketa_pemerintah();
        $data['bid_sengketa'] = $this->data_sengketa();
        $data['bid_pengacara'] = $this->data_sengketa_pengacara();
        $data['bid_pemerintah'] = $this->data_sengketa_pemerintah();
        return view('sengketa.index', $data);
    }



    public function store(Request $req)
    {

        Validator::make($req->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'objek_sengketa' => 'required',
            'status_pelapor' => 'required',
            'luas' => 'required',
            'lokasi' => 'required',
            'kronologi' => 'required',
            'status_pelapor' => 'required',
            'foto_ktp' => 'required|mimes:png,jpg|max:3048',
            'dokumen_tanah' => 'required|mimes:png,jpg|max:3048',
            'foto_lokasi' => 'required|mimes:png,jpg|max:3048',

        ])->validate();

        if ($req->file('foto_ktp')) {
            $ktp = time() . $req->file('foto_ktp')->getClientOriginalName();
            $req->foto_ktp->move(public_path('uploads'), $ktp);
        }
        if ($req->file('dokumen_tanah')) {
            $dokumen = time() . $req->file('dokumen_tanah')->getClientOriginalName();
            $req->dokumen_tanah->move(public_path('uploads'), $dokumen);
        }
        if ($req->file('foto_lokasi')) {
            $foto_lokasi = time() . $req->file('foto_lokasi')->getClientOriginalName();
            $req->foto_lokasi->move(public_path('uploads'), $foto_lokasi);
        }


        $sengketaTanah = SengketaTanah::create([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_hp' => $req->alamat,
            'objek_sengketa' => $req->objek_sengketa,
            'status_pelapor' => $req->status_pelapor,
            'luas' => $req->luas,
            'lokasi' => $req->lokasi,
            'kronologi' => $req->kronologi,
            'status_laporan' => 1, // 1 = data masuk / mengunggu verifikasi, 2 = Terverfikasi , 3 = Sedang diproses ,4 = Selesai
            'foto_ktp' => $ktp,
            'dokumen_tanah' => $dokumen,
            'foto_lokasi' => $foto_lokasi,
        ]);
        return redirect()->back()->with('success', 'Berhasil Mengirim data sengketa');
    }
    public function dataSengketa()
    {
        $data['sengketa'] = SengketaTanah::get();
        $data['bid_sengketa'] = $this->data_sengketa();
        $data['bid_pengacara'] = $this->data_sengketa_pengacara();
        $data['bid_pemerintah'] = $this->data_sengketa_pemerintah();
        return view('sengketa.all-data', $data);
    }

    public function advokasiPemerintah()
    {
        $data['sengketa'] = SengketaTanah::get();
        $data['bid_sengketa'] = $this->data_sengketa();
        $data['bid_pengacara'] = $this->data_sengketa_pengacara();
        $data['bid_pemerintah'] = $this->data_sengketa_pemerintah();
        return view('sengketa.advo-pemerintah', $data);
    }

    public function formKorban()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-korban', $data);
    }
    public function formPenyelesai()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-penyelesai', $data);
    }
    public function formLawFirm()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-law-firm', $data);
    }
    public function podcastSengketa(Request $req)
    {
        $data['request'] = $req;
        return view('sengketa.podcast-sengketa', $data);
    }

    public function layanan(Request $req)
    {
        $data['sengketa'] = SengketaTanah::get();
        $data['bid_sengketa'] = $this->data_sengketa();
        $data['bid_pengacara'] = $this->data_sengketa_pengacara();
        $data['bid_pemerintah'] = $this->data_sengketa_pemerintah();
        return view('sengketa.layanan', $data);
    }

    public function tentang()
    {
        return view('sengketa.tentang');
    }

    public function role()
    {
        return view('sengketa.role');
    }

    public function pilihUserS()
    {
        return view('auth.bidder.pilih-sponsor');
    }

    public function pilihUserP()
    {
        return view('auth.bidder.pilih-pengacara');
    }

    public function pilihSponsor()
    {
        return view('auth.bidder.pilih-s');
    }

    public function pilihPengacara()
    {
        return view('auth.bidder.pilih-p');
    }

    public function pilihLahanLender()
    {
        return view('auth.bidder.pilih-lender');
    }

    public function pilihLahanBorrower()
    {
        return view('auth.bidder.pilih-borrower');
    }
    
    public function pilihLOB()
    {
        return view('auth.bidder.pilih-lob');
    }


    public function pilihRumahLender()
    {
        return view('auth.bidder.pilih-r-lender');
    }

    public function pilihRumahBorrower()
    {
        return view('auth.bidder.pilih-r-borrower');
    }

    public function pilihRumahLOB()
    {
        return view('auth.bidder.pilih-r-lob');
    }


    public function daftarBidF(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-korban.daftar', $data);
    }



    public function daftarBidS(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-sponsor.daftar', $data);
    }

    public function daftarBidSBU(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-sponsor.daftar_bu', $data);
    }



    public function daftarBidP(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-pengacara.daftar', $data);
    }

    public function daftarBidPBH(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-pengacara.daftar_bh', $data);
    }



    public function daftarBidLP(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-lahan.daftar', $data);
    }

    public function daftarBidLPR(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-lahan.daftar_lp', $data);
    }

    public function daftarBidLLP(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-lahan-lender.daftar', $data);
    }

    public function daftarBidLLPR(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-lahan-lender.daftar_lp', $data);
    }

    

    public function daftarBidRP(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-rumah.daftar', $data);
    }

    public function daftarBidRPR(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-rumah.daftar_lp', $data);
    }

    public function daftarBidLRP(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-rumah-lender.daftar', $data);
    }

    public function daftarBidLRPR(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-rumah-lender.daftar_lp', $data);
    }



    public function daftarBidJ(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-jasa.daftar', $data);
    }



    public function buatLaporan(Request $request)
    {
        $data['req'] = $request;
        return view('auth.bidder-korban.buat_laporan', $data);
    }

    private function data_sengketa()
    {
        return [
            [
                'id' => 1,
                'owner' => " Bahru",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-001",
                "luas" => " 1 Ha",
                'lokasi' => " Pancawati, Bogor",
                'dana' => " Rp.450.000.000",
                "imbal_hasil" => " Fee 50% Dari Pinjaman",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 3,
                "link_yt" => 'https://www.youtube.com/embed/-RkCcavzXq8',
                "img" => "images/lahan1.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan3.jpeg",
                "img3" => "images/lahan4.jpeg",

            ],
            [
                'id' => 2,
                'owner' => " Fatah",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-001",
                "luas" => " 5000 m",
                'lokasi' => " Pancawati, Bogor",
                'dana' => " Rp.500.000.000",
                "imbal_hasil" => " Bagi Hasil 70/30*",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 4,
                "link_yt" => 'https://www.youtube.com/embed/byby3HJ3OCI',
                "img" => 'images/lahan2.jpeg',
                "img1" => "images/lahan1.jpeg",
                "img2" => "images/lahan3.jpeg",
                "img3" => "images/lahan4.jpeg",
            ],
            [
                'id' => 3,
                'owner' => " Ophelia Suartini",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-001",
                "luas" => " 3.2 Ha",
                'lokasi' => " Medan, Sumatra Utara",
                'dana' => " Rp.200.000.000",
                "imbal_hasil" => " Bagi Hasil 60/40*",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 6,
                "link_yt" => 'https://www.youtube.com/embed/1I4iEKK1qbQ',
                "img" => 'images/lahan3.jpeg',
                "img1" => "images/lahan1.jpeg",
                "img2" => "images/lahan2.jpeg",
                "img3" => "images/lahan4.jpeg",
            ],
            [
                'id' => 4,
                'owner' => " Kemal Pradana",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-002",
                "luas" => " 2.3 Ha",
                'lokasi' => " Bandung, Jawa Barat",
                'dana' => " Rp.300.000.000",
                "imbal_hasil" => " Bagi Hasil 50/50*",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 1,
                "link_yt" => '',
                "img" => 'images/lahan1.jpeg',

                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
            ],
            [
                'id' => 5,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-002",
                "luas" => " 4.6 Ha",
                'lokasi' => " Solo, Jawa Tengah",
                'dana' => " Rp.700.000.000",
                "imbal_hasil" => " Fee 75% Dari Pinjaman",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 12,
                "link_yt" => '',
                "img" => 'images/lahan3.jpeg',

                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img3" => "images/lahan1.jpeg",
            ],
            [
                'id' => 6,
                'owner' => " Galak Dongoran",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-002",
                "luas" => " 6 Ha",
                'lokasi' => " Depok, Jawa Barat",
                'dana' => " Rp.760.000.000",
                "imbal_hasil" => " Fee 100% Dari Pinjaman",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 10,
                "link_yt" => '',
                "img" => 'images/lahan2.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
                "img1" => "images/lahan1.jpeg",
            ],
            [
                'id' => 7,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-003",
                "luas" => " 8 Ha",
                'lokasi' => " Batu, Malang",
                'dana' => " Rp.340.000.000",
                "imbal_hasil" => " Bagi Hasil 60/40*",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 9,
                "link_yt" => '',
                "img" => 'images/lahan3.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img3" => "images/lahan1.jpeg",
            ],
            [
                'id' => 8,
                'owner' => " Jais Sinaga",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-003",
                "luas" => " 5 Ha",
                'lokasi' => " Banyuwangi, Jawa timur",
                'dana' => " Rp.280.000.000",
                "imbal_hasil" => " Bagi Hasil 70/30*",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 7,
                "link_yt" => '',
                "img" => 'images/lahan1.jpeg',
                "img1" => "images/lahan2.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
            ],
            [
                'id' => 9,
                'owner' => " Bakidin Hutagalung",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-003",
                "luas" => " 3 Ha",
                'lokasi' => " Sentul,Bogor",
                'dana' => " Rp.710.000.000",
                "imbal_hasil" => " Bagi Hasil 50/50*",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 8,
                "link_yt" => '',
                "img" => 'images/lahan2.jpeg',
                "img3" => "images/lahan3.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan1.jpeg",
            ],
            [
                'id' => 10,
                'owner' => " Kasusra Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-004",
                "luas" => " 2.9 Ha",
                'lokasi' => " Garut, Jawa Barat",
                'dana' => " Rp.710.000.000",
                "imbal_hasil" => " Fee 75% Dari Pinjaman",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 6,
                "link_yt" => '',
                "img" => 'images/lahan3.jpeg',
                "img3" => "images/lahan1.jpeg",
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
            ],
            [
                'id' => 11,
                'owner' => " Galak Dongoran",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-002",
                "luas" => " 6 Ha",
                'lokasi' => " Depok, Jawa Barat",
                'dana' => " Rp.760.000.000",
                "imbal_hasil" => " Fee 100% Dari Pinjaman",
                "jaminan" => " Sertifikat Rumah",
                "jumlah_bid" => 10,
                "link_yt" => '',
                "img" => 'images/lahan2.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img3" => "images/lahan3.jpeg",
                "img1" => "images/lahan1.jpeg",
            ],
            [
                'id' => 12,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-003",
                "luas" => " 8 Ha",
                'lokasi' => " Batu, Malang",
                'dana' => " Rp.340.000.000",
                "imbal_hasil" => " Bagi Hasil 60/40*",
                "jaminan" => " Sertifikat Tanah",
                "jumlah_bid" => 9,
                "link_yt" => '',
                "img" => 'images/lahan3.jpeg',
                "img2" => "images/lahan4.jpeg",
                "img1" => "images/lahan2.jpeg",
                "img3" => "images/lahan1.jpeg",
            ],
        ];
    }

    private function data_sengketa_pengacara()
    {
        return [
            [
                'id' => 1,
                'owner' => " Ali Shadiqin",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-001",
                "luas" => " 2.4 Ha",
                'lokasi' => " Blitar, Jawa timur",
                "kebutuhan" => "Penindakan",
                'anggaran' => " Rp.8.000.000 - 16.000.000",
                "jumlah_bid" => 12
            ],
            [
                'id' => 2,
                'owner' => " Yessi Zulaika",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-001",
                "luas" => " 4.1 Ha",
                'lokasi' => " Semarang, Jawatengah",
                "kebutuhan" => "Cek Dokumen",
                'anggaran' => " Rp.700.000 - 3.000.000",
                "jumlah_bid" => 15
            ],
            [
                'id' => 3,
                'owner' => " Ophelia Suartini",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-001",
                "luas" => " 3.2 Ha",
                'lokasi' => " Medan, Sumatra Utara",
                "kebutuhan" => "Pendampingan",
                'anggaran' => " Rp.400.000 - 2.000.000",
                "jumlah_bid" => 5
            ],
            [
                'id' => 4,
                'owner' => " Kemal Pradana",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-002",
                "luas" => " 2.3 Ha",
                'lokasi' => " Bandung, Jawa Barat",
                "kebutuhan" => "Penindakan",
                'anggaran' => " Rp.4.000.000 - 8.000.000",
                "jumlah_bid" => 1
            ],
            [
                'id' => 5,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-002",
                "luas" => " 4.6 Ha",
                'lokasi' => " Solo, Jawa Tengah",
                "kebutuhan" => "Konsultasi",
                'anggaran' => " Rp.300.000 - 700.000",
                "jumlah_bid" => 8
            ],
            [
                'id' => 6,
                'owner' => " Galak Dongoran",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-002",
                "luas" => " 6 Ha",
                'lokasi' => " Makassar, Sulawesi Selatan",
                "kebutuhan" => "Pendampingan",
                'anggaran' => " Rp.2.000.000 - 3.000.000",
                "jumlah_bid" => 5
            ],
            [
                'id' => 7,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-003",
                "luas" => " 8 Ha",
                'lokasi' => " Batu, Malang",
                "kebutuhan" => "Penindakan",
                'anggaran' => " Rp.7.000.000 - 12.000.000",
                "jumlah_bid" => 6
            ],
            [
                'id' => 8,
                'owner' => " Jais Sinaga",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-003",
                "luas" => " 5 Ha",
                'lokasi' => " Banyuwangi, Jawa timur",
                "kebutuhan" => "Cek Dokumen",
                'anggaran' => " Rp.400.000 - 1.000.000",
                "jumlah_bid" => 7
            ],
            [
                'id' => 9,
                'owner' => " Bakidin Hutagalung",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-003",
                "luas" => " 3 Ha",
                'lokasi' => " Sentul,Bogor",
                "kebutuhan" => "Penindakan",
                'anggaran' => " Rp.6.000.000 - 12.000.000",
                "jumlah_bid" => 9
            ],
            [
                'id' => 10,
                'owner' => " Kasusra Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-004",
                "luas" => " 2.9 Ha",
                'lokasi' => " Garut, Jawa Barat",
                "kebutuhan" => "Konsultasi",
                'anggaran' => " Rp.500.000 - 1.500.000",
                "jumlah_bid" => 2
            ],
        ];
    }


    private function data_sengketa_pemerintah()
    {
        return [
            [
                'id' => 10,
                'owner' => " Kasusra Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-004",
                "luas" => " 2.9 Ha",
                'lokasi' => " Garut, Jawa Barat",

            ],


            [
                'id' => 3,
                'owner' => " Ophelia Suartini",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-001",
                "luas" => " 3.2 Ha",
                'lokasi' => " Medan, Sumatra Utara",

            ],
            [
                'id' => 2,
                'owner' => " Yessi Zulaika",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-001",
                "luas" => " 4.1 Ha",
                'lokasi' => " Semarang, Jawatengah",

            ],
            [
                'id' => 1,
                'owner' => " Ali Shadiqin",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-001",
                "luas" => " 2.4 Ha",
                'lokasi' => " Blitar, Jawa timur",

            ],
            [
                'id' => 5,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-002",
                "luas" => " 4.6 Ha",
                'lokasi' => " Solo, Jawa Tengah",

            ],
            [
                'id' => 4,
                'owner' => " Kemal Pradana",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-002",
                "luas" => " 2.3 Ha",
                'lokasi' => " Bandung, Jawa Barat",

            ],
            [
                'id' => 7,
                'owner' => " Tugiman Tampubolon",
                'objek' => " Sengketa Pertanahan",
                "kode_objek" => "sp",
                "kode" => "SP-003",
                "luas" => " 8 Ha",
                'lokasi' => " Batu, Malang",

            ],
            [
                'id' => 6,
                'owner' => " Galak Dongoran",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-002",
                "luas" => " 6 Ha",
                'lokasi' => " Makassar, Sulawesi Selatan",

            ],

            [
                'id' => 8,
                'owner' => " Jais Sinaga",
                'objek' => " Konflik Pertanahan",
                "kode_objek" => "kp",
                "kode" => "KP-003",
                "luas" => " 5 Ha",
                'lokasi' => " Banyuwangi, Jawa timur",

            ],
            [
                'id' => 9,
                'owner' => " Bakidin Hutagalung",
                'objek' => " Perkara Pertanahan",
                "kode_objek" => "pp",
                "kode" => "PP-003",
                "luas" => " 3 Ha",
                'lokasi' => " Sentul,Bogor",

            ],

        ];
    }
}
