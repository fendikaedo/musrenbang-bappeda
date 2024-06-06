@extends('layouts.usulan')
@section('judul', 'Bidang ' . ucfirst($bidang))
@section('content')
    <div class="table-responsive-md table-bordered table-striped animate__animated animate__fadeInUp">
        <table class="table table-striped table-border border-2 border-dark table-sm w-100">
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
                    <tr class="align-middle">
                        <td class="text-center">{{ $loop->iteration }}.</td>
                        <td>{{ $u->usulan }}</td>
                        <td class="text-center">
                            @if ($u->total_skor)
                                <b class="text-success">{{ $u->total_skor }}</b>
                            @else
                                <b>0</b>
                            @endif
                        </td>
                        @if (!$u->total_skor)
                            <td class="text-center"><a
                                    href="{{ route('usulan.create', [
                                        'penilai_id' => $penilai->id,
                                        'id_usulan' => $u->id,
                                    ]) }}"
                                    class="btn btn-sm btn-primary">Skor
                                </a>
                            </td>
                        @else
                            <td class="text-center">
                                <i class="fa-solid fa-check btn btn-sm btn-success"></i>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

