<a href="{{ route('users.edit', $id) }}" class="edit btn btn-primary btn-sm">Editar</a>
<a href="{{ route('users.show', $id) }}" class="edit btn btn-success btn-sm">Ver</a>
<form action="{{ route('users.destroy', $id) }}" method="post" enctype="multipart/form">
    @csrf
    @method('DELETE')
    <input type="submit" class="edit btn btn-danger btn-sm" value="Eliminar">
</form>
{{-- <a href="{{ route('users.destroy', $id) }}" class="edit btn btn-danger btn-sm">Eliminar</a> --}}


