@extends('layouts.template-korban.main')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Upload Dokumen</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('korban.action_add_korban_file',Crypt::encrypt($korban['id']))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="imagektp" class="form-label">Foto KTP Elektronik</label>
                            <input class="file-input rounded-0" type="file" id="ktp" name="imagektp" required>
                        </div>
                        <div class="mb-2">
                            <label for="foto_lokasi" class="form-label">Foto Lokasi Tanah</label>
                            <input class="file-input rounded-0" type="file" id="foto_lokasi" name="imagelokasi"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="dokumenTanah" class="form-label">Dokumen Alas Hak
                                Tanah</label>
                            <input class="file-input rounded-0" type="file" id="dokumenTanah" name="image_dokumen_hak_tanah">
                            <select name="" class="form-control" id="">
                                <option selected>Pilih</option>
                                <option value="">Data Di Kirim Via Kurir</option>
                                <option value="">Data Di Unggah</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection