<form class="inline" method="POST" action="{{ str_replace(':id', $row->{$id_field}, $delete_route) }}">
    @csrf
    @method('DELETE')
    <button type="submit" data-id="{{ $row->{$id_field} }}" data-name="{{ $row->name ?? 'Item' }}"
        class="text-red-600 hover:underline">Delete</button>
</form>
