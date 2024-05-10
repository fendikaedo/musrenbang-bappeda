@extends('layouts.formusulan')
@section('judul', 'Bidang Infrastruktur')
@section('form')
    <form action="{{ route('admin.penilaian.store') }}" method="POST"
        class="needs-validation animate__animated animate__fadeIn" novalidate="" autocomplete="off">
        <div class="mb-3">
            <label class="mb-2 text-muted" for="usulan_id">Usulan</label>
            <input id="" type="text" class="form-control" name="usulaan_id" value="" required autofocus>
        </div>

        {{-- KRITERIA --}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <input id="kriteria_id" type="text" class="form-control" name="kriteria_id" value="" required
                autofocus>
        </div>

        {{-- SKOR --}}
        <div class="row">
            <div class="form-check-label mb-2">
                <label class="form-check-label mb-2" for="skor">Skor</label>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">1</label>
                    <input id="skor1" type="radio" class="form-check-input" name="skor" value="1" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">2</label>
                    <input id="skor2" type="radio" class="form-check-input" name="skor" value="2" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">3</label>
                    <input id="skor3" type="radio" class="form-check-input" name="skor" value="3" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">4</label>
                    <input id="skor4" type="radio" class="form-check-input" name="skor" value="4" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">5</label>
                    <input id="skor5" type="radio" class="form-check-input" name="skor" value="5" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">6</label>
                    <input id="skor6" type="radio" class="form-check-input" name="skor" value="6" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">7</label>
                    <input id="skor7" type="radio" class="form-check-input" name="skor" value="7" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">8</label>
                    <input id="skor8" type="radio" class="form-check-input" name="skor" value="8" required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">9</label>
                    <input id="skor9" type="radio" class="form-check-input" name="skor" value="9"
                        required>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-1">
                    <label class="form-check-label mb-2" for="skor">10</label>
                    <input id="skor10" type="radio" class="form-check-input" name="skor" value="10"
                        required>
                </div>
            </div>
        </div>

        {{-- PENILAI --}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="penilaiaan_id">Penilai </label>
            <input id="Penilaian_id" type="Penilaian_id" class="form-control" name="Penilaian_id" value=""
                required autofocus>
        </div>

        {{-- BAWAH --}}

        <div class="d-flex align-items-center">
            <a href="/menubidang">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Kembali</button>
            </a>
            <button type="submit" class="btn btn-lg btn-success ms-auto">
                Selanjutnya
            </button>
        </div>
    </form>
@endsection
