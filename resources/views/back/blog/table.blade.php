@foreach ($posts as $post)
    <tr {!! !$post->seen && session('statut') == 'admin'? 'class="warning"' : '' !!}>
        <td class="text-primary"><strong>{{ $post->title }}</strong></td>
        <td>{{ $post->created_at }}</td> 
        <td>{{ $post->created_at }}</td> 
        <td>{{ $post->created_at }}</td>
        <td>{!! link_to_route('blog.edit', "Ubah", [$post->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
        <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['blog.destroy', $post->id]]) !!}
                {!! Form::destroyBootstrap("Hapus", "Beneran pengen ngehapus?") !!}
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach