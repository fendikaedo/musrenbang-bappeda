@extends('layouts.formusulan')
@section('judul', 'Bidang ' . ucfirst($bidang))
@section('form')
    <form action="{{ route('usulan.store', ['penilai_id' => $penilai->id]) }}" method="POST"
        class="needs-validation p-2 animate_animated animate_fadeInUp" novalidate autocomplete="off">
        @csrf

        {{-- USULAN --}}
        <div class="card p-2 mb-3 border-0 bg-warning bg-gradient text-center">
            @if ($id_usulan)
                <input class="border-0" type="hidden" name="usulan_id" id="usulan_id" value="{{ $id_usulan->id }}" readonly>
                <b>{{ $id_usulan->usulan }}</b>
            @else
                <span>Data usulan tidak tersedia</span>
            @endif
        </div>

        <div class="mb-3 mt-3">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('uploads/' . $gambarUsulan1) }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('uploads/' . $gambarUsulan2) }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('uploads/' . $gambarUsulan3) }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            {{-- @if ($gambarUsulan)
                <img src="{{ asset('uploads/' . $gambarUsulan) }}" class="image-usulan" width="100%" height="420px">
            @else
                <p class="text-center">Gambar tempat tidak tersedia</p>
            @endif --}}
        </div>
        <div class="mb-3 mt-3 text-center">
            @if ($latitude && $longitude)
                <a href="https://www.google.com/maps/dir//{{ $latitude }},{{ $longitude }}"
                    class="btn btn-md btn-primary" target="_blank">
                    <i class="fa-solid fa-map-location-dot" style="color: #ffffff;"></i>
                    Titik Koordinat Google Maps</a>
            @else
                <div class="btn btn-md btn-secondary">
                    Titik Koordinat tidak tersedia
                </div>
            @endif
        </div>


        {{-- Catatan --}}
        <div class="m-2 fst-italic text-muted">
            <p>Catatan : <br> 1. Setiap kriteria memiliki skor 1-10. <br>2. Nilai skor 1 merupakan kondisi skor paling
                rendah.<br>3. Nilai skor 10 merupakan kondisi skor paling tinggi</p>
        </div>

        {{-- KRITERIA --}}
        @foreach ($kriteria as $index => $k)
            <div class="mb-2 mt-4">
                <input type="hidden" name="kriteria[{{ $index }}][id]" value="{{ $k->id }}">
                <p class="fw-bold fs-6">{{ $k->id }}. {{ $k->nama }}</p>
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
        <div class="mb-4 mt-4">
            <input type="hidden" name="penilaian_id" id="penilaian_id" value="{{ $penilai->id }}">
            <p class="text-bold text-center fst-italic fw-bold">Terima kasih kepada Bpk/Ibu {{ $penilai->nama_penilai }}
                yang sudah
                mengisi skor usulan kegiatan musrenbang.</p>
        </div>

        {{-- BAWAH --}}
        <div class="d-flex align-items-center">
            <a href="{{ route('usulan.index', ['penilai_id' => $penilai->id, 'bidang' => $bidang]) }}">
                <button type="button" id="btnKembali" class="btn btn-primary btn-md px-4 gap-3 fw-bold">
                    <i class="fa-solid fa-circle-left"></i>
                    Kembali</button>
            </a>
            <button type="submit" class="btn btn-md btn-success ms-auto next-step fw-bold">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan</button>
        </div>
    </form>
@endsection
