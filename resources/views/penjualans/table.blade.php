<table class="table table-responsive" id="penjualans-table">
    <thead>
        <tr>
            <th>Tanggal</th>
        <th>Pelanggan Id</th>
        <th>Pegawai Id</th>
        <th>Total</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penjualans as $penjualan)
        <tr>
            <td>{!! $penjualan->tanggal !!}</td>
            <td>{!! $penjualan->pelanggan->nama !!}</td>
            <td>{!! $penjualan->pegawai->nama !!}</td>
            <td>{!! $penjualan->total !!}</td>
            <td>
                {!! Form::open(['route' => ['penjualans.destroy', $penjualan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('penjualans.show', [$penjualan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('penjualans.edit', [$penjualan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>