<table class="table table-responsive" id="agamas-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agamas as $agama)
        <tr>
            <td>{!! $agama->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['agamas.destroy', $agama->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agamas.show', [$agama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agamas.edit', [$agama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>