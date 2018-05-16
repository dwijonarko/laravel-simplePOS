<table class="table table-responsive" id="pelanggans-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pelanggans as $pelanggan)
        <tr>
            <td>{!! $pelanggan->nama !!}</td>
            <td>{!! $pelanggan->alamat !!}</td>
            <td>{!! $pelanggan->telp !!}</td>
            <td>{!! $pelanggan->email !!}</td>
            <td>
                {!! Form::open(['route' => ['pelanggans.destroy', $pelanggan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pelanggans.show', [$pelanggan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pelanggans.edit', [$pelanggan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>