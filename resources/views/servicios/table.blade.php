<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
            <tr>
                <th>Estado Id</th>
        <th>Categoria Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Costo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->estado_id }}</td>
            <td>{{ $servicio->categoria_id }}</td>
            <td>{{ $servicio->nombre }}</td>
            <td>{{ $servicio->descripcion }}</td>
            <td>{{ $servicio->costo }}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servicios.edit', [$servicio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
