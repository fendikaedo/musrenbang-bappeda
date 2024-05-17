@extends('layouts.usulan')
@section('judul', 'Bidang Infrastruktur')
@section('list')
    @foreach ($usulan as $u)
        {{-- <div class="card p-2 m-3 text-wrap"> --}}
        <div class="card p-2 mb-3">
            <div class="row p-2 m-2 align-items-center">
                <div class="col-10">
                    <p>{{ $u->usulan }}</p>
                </div>
                <div class="col-auto">
                    <a href="{{ route('bidanginfrastruktur.create', ['id' => $u->id]) }}">
                        <button type="submit" class="btn btn-sm btn-primary">Skor</button>
                    </a>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    @endforeach

    {{-- <div class="row">
        <div class="col">
            @foreach ($usulan as $u)
                <p>{{ $u->id }}. {{ $u->usulan }}</p>
                <a href="{{ route('bidanginfrastruktur.create', ['id' => $u->id]) }}">
                    <button type="submit" class="btn btn-sm btn-primary">Skor</button>
                </a>
                <input type="text">
            @endforeach
        </div>
    </div> --}}
@endsection
