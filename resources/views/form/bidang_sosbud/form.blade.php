@extends('layouts.formusulan')
@section('judul', 'Bidang Sosial Budaya')
@section('form')
    <form action="{{ route('formsosbud.store') }}" method="POST"
        class="needs-validation p-2 animate_animated animate_fadeIn" novalidate="" autocomplete="off">
        @csrf

        {{-- Step Form 1 --}}
        <div class="mb-3">
            <label class="mb-2 text-muted" for="usulan_id">Usulan</label>
            <select class="form-select" name="usulan_id" id="usulan_id">
                <option value="" disabled selected>Pilih Usulan</option>
                @foreach ($usulan as $u)
                    <option value="{{ $u->id }}">{{ $u->usulan }}</option>
                @endforeach
            </select>
        </div>

        {{-- KRITERIA 1--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 1--}}
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

        {{-- KRITERIA 2--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 2--}}
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

        {{-- KRITERIA 3--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 3--}}
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

        {{-- KRITERIA 4--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 4--}}
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

        {{-- KRITERIA 5--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 5--}}
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

        {{-- KRITERIA 6--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 6--}}
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

        {{-- KRITERIA 7--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 7--}}
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

        {{-- KRITERIA 8--}}

        <div class="mb-3">
            <label class="mb-2 text-muted" for="kriteria_id">Kriteria</label>
            <select class="form-select" name="kriteria_id" id="kriteria_id">
                <option value="" disabled selected>Pilih Kriteria</option>
                @foreach ($kriteria as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- SKOR 8--}}
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
            <select class="form-select" name="penilaian_id" id="penilaian_id">
                <option value="" disabled selected>Pilih Nama</option>
                @foreach ($nama_penilai as $penilai)
                    <option value="{{ $penilai->id }}">{{ $penilai->nama_penilai }}</option>
                @endforeach
            </select>
        </div>


        {{-- BAWAH --}}

        <div class="d-flex align-items-center">
            <a href="/menubidang">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Kembali</button>
            </a>
            <button type="submit" class="btn btn-lg btn-primary ms-auto next-step">Submit</button>
        </div>
        </div>
    </form>

@endsection
