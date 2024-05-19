@extends('layouts.usulan')
@section('judul', 'Bidang ' . ucfirst($bidang))
@section('list')
    <div class="table-responsive-sm">
        <table>
            <thead class="bg-warning">
                <tr class="text-center">
                    <th>No</th>
                    <th>Usulan</th>
                    <th>Skor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usulan as $u)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $u->usulan }}</td>
                        <td class="text-center">0</td>
                        <td class="text-center"><a href="{{ route('usulan.create', ['id' => $u->id]) }}">
                                <button type="submit" class="btn btn-sm btn-primary">Skor</button>
                            </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div class="card p-2 mb-3">
            <div class="row p-2 m-2 align-items-center">
                <div class="col-10">
                    <p>{{ $u->usulan }}</p>
                </div>
                <div class="col-auto">
                    <a href="{{ route('usulan.create', ['id' => $u->id]) }}">
                        <button type="submit" class="btn btn-sm btn-primary">Skor</button>
                    </a>
                </div>
            </div>
        </div> --}}
@endsection
