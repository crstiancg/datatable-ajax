<td width="140px">
<a href="{{ route('customer.edit', $id) }}" class="edit btn btn-primary btn-sm">Editar</a>
<a href="#" class="edit btn btn-success btn-sm">Ver</a>
<form action="{{ route('customer.destroy', $id) }}" method="post" style="display: inline">
    @csrf @method('delete')
    <button class="btn btn-sm btn-danger btn-sm">Eliminar</button>
</form>
</td>