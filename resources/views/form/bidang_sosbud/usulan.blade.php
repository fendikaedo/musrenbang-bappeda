@extends('layouts.usulan')
@section('judul', 'Bidang Sosial Budaya')
@section('list')
    @foreach ($usulan as $u)
        <div class="card p-2 mb-3">
            <div class="row p-2 m-2 align-items-center">
                <div class="col-10">
                    <p>{{ $u->usulan }}</p>
                </div>
                <div class="col-auto">
                    <a href="{{ route('bidangsosbud.create', ['id' => $u->id]) }}">
                        <button type="submit" class="btn btn-sm btn-primary">Skor</button>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
