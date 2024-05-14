@extends('layouts.formusulan')
@section('judul', 'Bidang Infrastruktur')
@section('form')
    <form action="{{ route('admin.penilaian.store') }}" method="POST"
        class="needs-validation p-2 animate__animated animate__fadeIn" novalidate="" autocomplete="off">

        <!-- Step 1: Usulan 1 -->
        <div class="step step-1">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 1</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
        </div>

        <!-- Step 2: Usulan 2 -->
        <div class="step step-2" style="display: none;">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 2</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required
                    autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary prev-step mr-3">Previous</button>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
        </div>

        <!-- Step 3: Usulan 3 -->
        <div class="step step-3" style="display: none;">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 3</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required
                    autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary prev-step mr-3">Previous</button>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
        </div>

        <!-- Step 4: Usulan 4 -->
        <div class="step step-4" style="display: none;">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 4</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required
                    autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary prev-step mr-3">Previous</button>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
        </div>

        <!-- Step 5: Usulan 5 -->
        <div class="step step-5" style="display: none;">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 5</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required
                    autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary prev-step mr-3">Previous</button>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
        </div>

        <!-- Step 6: Usulan 6 -->
        <div class="step step-6" style="display: none;">
            {{-- USULAN --}}
            <div class="mb-3">
                <label class="mb-2 text-muted" for="usulan_id">Usulan 6</label>
                <input id="usulan_id" type="text" class="form-control" name="usulan_id" value="" required
                    autofocus>
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
                        <input id="skor1" type="radio" class="form-check-input" name="skor" value="1"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">2</label>
                        <input id="skor2" type="radio" class="form-check-input" name="skor" value="2"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">3</label>
                        <input id="skor3" type="radio" class="form-check-input" name="skor" value="3"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">4</label>
                        <input id="skor4" type="radio" class="form-check-input" name="skor" value="4"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">5</label>
                        <input id="skor5" type="radio" class="form-check-input" name="skor" value="5"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">6</label>
                        <input id="skor6" type="radio" class="form-check-input" name="skor" value="6"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">7</label>
                        <input id="skor7" type="radio" class="form-check-input" name="skor" value="7"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-1">
                        <label class="form-check-label mb-2" for="skor">8</label>
                        <input id="skor8" type="radio" class="form-check-input" name="skor" value="8"
                            required>
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
                <input id="penilaiaan_id" type="text" class="form-control" name="penilaiaan_id" value=""
                    required autofocus>
            </div>
            <button type="button" class="btn btn-lg btn-primary prev-step mr-3">Previous</button>
            <button type="button" class="btn btn-lg btn-primary next-step">Next</button>
            <button type="submit" class="btn btn-lg btn-success">Submit</button>
        </div>



        <!-- Navigation buttons -->
        {{-- <div class="d-flex align-items-center mt-3">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3 previous-step"
                style="display: none;">Kembali</button>
            <button type="button" class="btn btn-lg btn-success ms-auto next-step">Selanjutnya</button>
        </div> --}}
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll('.step');
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');

            let currentStep = 0;

            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (currentStep < steps.length - 1) {
                        steps[currentStep].style.display = 'none';
                        steps[currentStep + 1].style.display = 'block';
                        currentStep++;
                        updateNavigationButtons();
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (currentStep > 0) {
                        steps[currentStep].style.display = 'none';
                        steps[currentStep - 1].style.display = 'block';
                        currentStep--;
                        updateNavigationButtons();
                    }
                });
            });

            function updateNavigationButtons() {
                if (currentStep === 0) {
                    document.querySelector('.previous-step').style.display = 'none';
                } else {
                    document.querySelector('.previous-step').style.display = 'block';
                }

                if (currentStep === steps.length - 1) {
                    document.querySelector('.next-step').style.display = 'none';
                } else {
                    document.querySelector('.next-step').style.display = 'block';
                }
            }
        });
    </script>

@endsection
