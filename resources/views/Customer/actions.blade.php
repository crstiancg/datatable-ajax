
<td width="140px">
<a href="{{ route('customer.edit', $id) }}" class="edit btn btn-primary btn-sm">Editar</a>
<a href="#" class="edit btn btn-success btn-sm">Ver</a>
<form action="{{ route('customer.destroy', $id) }}" method="post" style="display: inline" class="eliminar">
    @csrf @method('delete')
    <button class="btn btn-sm btn-danger btn-sm">Eliminar</button>
</form>
</td>


<script>
    $('.eliminar').submit(function(e){
    e.preventDefault();

    Swal.fire({
      title: '¿Estas seguro?',
      text: "No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Si, eliminarlo!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {

        this.submit();
      }
    })

  });
</script>