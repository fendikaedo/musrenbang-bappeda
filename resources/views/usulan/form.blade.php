@extends('layouts.formusulan')
@section('judul', 'Bidang Infrastruktur')
@section('form')
    <form action="{{ route('usulan.store') }}" method="POST"
        class="needs-validation p-2 animate_animated animate_fadeIn" novalidate autocomplete="off">
        @csrf

        {{-- USULAN --}}
        <div class="card p-2 mb-3 border-0 bg-warning">
            <input class="border-0" type="hidden" name="usulan_id" id="usulan_id" value="{{ $usulanId->id }}" readonly>
            <p><b>{{ $usulanId->usulan }}</b></p>
        </div>


        {{-- KRITERIA --}}
        @foreach ($kriteria as $index => $k)
            <div class="mb-2 mt-4">
                <input type="hidden" name="kriteria[{{ $index }}][id]" value="{{ $k->id }}">
                <input type="text" class="border-0" style="width: 100%" value="{{ $k->id }}. {{ $k->nama }}" readonly>
            </div>

            {{-- SKOR --}}
            <div class="row">
                @for ($j = 1; $j <= 10; $j++)
                    <div class="col">
                        <div class="form-check mb-1">
                            <label class="form-check-label mb-2" for="skor{{ $index }}_{{ $j }}">{{ $j }}</label>
                            <input id="skor{{ $index }}_{{ $j }}" type="radio" class="form-check-input"
                                name="kriteria[{{ $index }}][skor]" value="{{ $j }}" required>
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach

        {{-- PENILAI --}}
        <div class="mb-3">
            <label class="mb-2 text-muted" for="penilaian_id">Penilai </label>
            <select class="form-select" name="penilaian_id" id="penilaian_id" required>
                <option value="" disabled selected>Pilih Nama</option>
                @foreach ($penilaian as $penilai)
                    <option value="{{ $penilai->id }}">{{ $penilai->nama_penilai }}</option>
                @endforeach
            </select>
        </div>

        {{-- BAWAH --}}
        <div class="d-flex align-items-center">
            {{-- <a href="{{ route('usulan.index', ['bidang' => $bidang->nama]) }}">
                <button type="button" id="btnKembali" class="btn btn-primary btn-lg px-4 gap-3">Kembali</button>
            </a> --}}
            <button type="submit" class="btn btn-lg btn-success ms-auto next-step">Submit</button>
        </div>
    </form>
@endsection
