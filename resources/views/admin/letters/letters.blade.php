@extends('layouts.admin')

@section('judul', 'SPT')

@section('isi')

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
        <div class="card-body">
            <a href="{{  route('letters.create') }}" class="btn btn-primary mb-3 float-right">
                + Tambah Data Anggaran
            </a>
            <div class="table-responsive">
            <table class="table table-bordered table-hover scroll-horizontal-vertical" id="crudTable" width="100%" cellspacing="0" id="crudtable">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No SPT</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Agenda</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        <tbody class="text-center">
            {{-- @foreach ($employe as $pgw)
            <tr>
                <th scope="row">{{ $loop -> iteration }}</th>
                <td>{{ $pgw -> nama }}</td>
                <td>{{ $pgw -> nip }}</td>
                <td>{{ $pgw -> pangkat }}</td>
                <td>{{ $pgw -> jabatan }}</td>
                <td>
                    <a href="/pegawai/{{$pgw->id_pegawai}}" class="badge badge-info">Detail</a>

                </td>
            </tr>
            @endforeach --}}
        </tbody>
        </table>
    </div>
    </div>
</div>
    
@endsection

@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                    {data: 'id', name : 'id'},
                    {data: 'no_spt', name : 'no_spt'},
                    {data: 'tujuan', name : 'tujuan'},
                    {data: 'budgets_id', name : 'budgets_id'},
                    {data: 'keterangan', name : 'keterangan'},
                    {data: 'agenda', name : 'agenda'},
                    {data: 'tanggal', name : 'tanggal'},
                    {data: 'durasi', name : 'durasi'},
                    {
                        data: 'aksi',
                        name : 'aksi',
                        orderable : false,
                        searchable : false,
                        width : '15%'
                    },
            ]
        });
    </script>
@endpush