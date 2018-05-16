<table class="table table-responsive" id="pegawais-table">
    <thead>
        <tr>
            <th>Nik</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Telp</th>
        <th>Foto</th>
        <th>Agama</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pegawais as $pegawai)
        <tr>
            <td>{!! $pegawai->nik !!}</td>
            <td>{!! $pegawai->nama !!}</td>
            <td>{!! $pegawai->tempat_lahir !!}</td>
            <td>{!! $pegawai->tanggal_lahir !!}</td>
            <td>{!! $pegawai->alamat !!}</td>
            <td>{!! $pegawai->email !!}</td>
            <td>{!! $pegawai->telp !!}</td>
            <td>{!! $pegawai->foto !!}</td>
            <td>{!! $pegawai->agama->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['pegawais.destroy', $pegawai->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pegawais.show', [$pegawai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pegawais.edit', [$pegawai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>