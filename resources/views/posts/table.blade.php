<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
        <th>User</th>
        <th>Foto </th>
        <th>Estado </th>
        <th>Titulo</th>
        <th>Subtitulo</th>
        <th>Contenido</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
            <td>{{ $post->Autor->name }}</td>
            <td>{{ $post->FotoPost }}</td>
            <td>{{ $post->estado->nombre }}</td>
            <td>{{ $post->titulo }}</td>
            <td>{{ $post->subtitulo }}</td>
            <td>{{ $post->contenido }}</td>
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
