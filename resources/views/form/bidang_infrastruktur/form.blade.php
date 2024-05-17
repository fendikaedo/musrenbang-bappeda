@extends('layouts.formusulan')
@section('judul', 'Bidang Infrastruktur')
@section('form')
    <form action="{{ route('bidanginfrastruktur.store') }}" method="POST"
        class="needs-validation p-2 animate_animated animate_fadeIn" novalidate="" autocomplete="off">
        @csrf

        {{-- USULAN --}}
        <div class="card p-2 mb-3 border-0 bg-warning">
                <p><b>{{$usulanId->usulan}}</b></p>
        </div>

        {{-- KRITERIA --}}
        @for ($i = 0; $i < count($kriteria); $i++)
            <div class="mb-2 mt-4">
                {{-- <label class="mb-2" for="kriteria_id"><b>{{ $daftar_kriteria[$i]->id }}</b></label> --}}
                <input type="text" class="border-0" style="width: 100%" name="kriteria_id"
                    value="{{ $kriteria[$i]->id }}. {{ $kriteria[$i]->nama }}" readonly>
            </div>

            {{-- SKOR --}}
            <div class="row">
                @for ($j = 1; $j <= 10; $j++)
                    <div class="col">
                        <div class="form-check mb-1">
                            <label class="form-check-label mb-2" for="skor">{{ $j }}</label>
                            <input id="skor{{ $i }}_{{ $j }}" type="radio" class="form-check-input"
                                name="skor{{ $i }}" value="{{ $j }}" required>
                        </div>
                    </div>
                @endfor
            </div>
        @endfor


        {{-- PENILAI --}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="penilaiaan_id">Penilai </label>
            <select class="form-select" name="penilaian_id" id="penilaian_id">
                <option value="" disabled selected>Pilih Nama</option>
                @foreach ($penilaian as $penilai)
                    <option value="{{ $penilai->id }}">{{ $penilai->nama_penilai }}</option>
                @endforeach
            </select>
        </div>

        {{-- BAWAH --}}

        <div class="d-flex align-items-center">
            <a href="/bidanginfrastruktur">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Kembali</button>
            </a>
            <button type="submit" class="btn btn-lg btn-primary ms-auto next-step">Submit</button>
        </div>
        </div>
    </form>

@endsection
