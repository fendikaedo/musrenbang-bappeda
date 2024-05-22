@extends('layouts.formusulan')
@section('judul', 'Bidang Infrastruktur')
@section('form')
    <form action="{{ route('usulan.store', ['penilai_id' => $penilai->id]) }}" method="POST"
        class="needs-validation p-3 animate_animated animate_fadeInUp" novalidate autocomplete="off">
        @csrf

        {{-- USULAN --}}
        <div class="card p-2 mb-3 border-0 bg-warning bg-gradient text-center">
            @if ($id_usulan)
                <input class="border-0" type="hidden" name="usulan_id" id="usulan_id" value="{{ $id_usulan->id }}" readonly>
                <b>{{ $id_usulan->usulan }}</b>
            @else
                <!-- Jika $usulanId null, berikan pesan yang sesuai -->
                <span>Data usulan tidak tersedia</span>
            @endif
        </div>

        <div id="googleMap" style="width:100%;height:380px;"></div>
        <input type="hidden" id="lat" name="lat" value="">
        <input type="hidden" id="lng" name="lng" value="">

        {{-- KRITERIA --}}
        @foreach ($kriteria as $index => $k)
            <div class="mb-2 mt-4">
                <input type="hidden" name="kriteria[{{ $index }}][id]" value="{{ $k->id }}">
                <p class="fw-bold fs-6">{{$k->id}}. {{$k->nama}}</p>
                {{-- <input type="text" class="border-0 fw-bold" style="width: 100%" value="{{ $k->id }}. {{ $k->nama }}"
                    readonly> --}}
            </div>

            {{-- SKOR --}}
            <div class="row">
                @for ($j = 1; $j <= 10; $j++)
                    <div class="col">
                        <div class="form-check mb-1">
                            <label class="form-check-label mb-2"
                                for="skor{{ $index }}_{{ $j }}">{{ $j }}</label>
                            <input id="skor{{ $index }}_{{ $j }}" type="radio"
                                class="form-check-input" name="kriteria[{{ $index }}][skor]"
                                value="{{ $j }}" required>
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach

        {{-- PENILAI --}}
        <div class="mb-3">
            <label class="mb-2 text-muted" for="penilaian_id">Penilai</label>
            <input type="hidden" name="penilaian_id" id="penilaian_id" value="{{ $penilai->id }}">
            <input type="text" class="form-control" value="{{ $penilai->nama_penilai }}" readonly>
        </div>

        {{-- BAWAH --}}
        <div class="d-flex align-items-center">
            <a href="{{ route('usulan.index', ['penilai_id' => $penilai->id,'bidang' => $bidang]) }}">
                <button type="button" id="btnKembali" class="btn btn-primary btn-md px-4 gap-3">Kembali</button>
            </a>
            <button type="submit" class="btn btn-md btn-success ms-auto next-step">Submit</button>
        </div>
    </form>
@endsection
