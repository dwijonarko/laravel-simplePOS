<table class="table table-responsive" id="kategoris-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($kategoris as $kategori)
        <tr>
            <td>{!! $kategori->nama !!}</td>
            <td>{!! $kategori->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['kategoris.destroy', $kategori->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kategoris.show', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('kategoris.edit', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>