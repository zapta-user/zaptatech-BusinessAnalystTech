@foreach ($domains as $item)
    <tr class="hidden-tr">
        <td>
            <div class="d-flex gap-2 align-items-center ">
                <input type="checkbox" name="domains[]" class="" value="{{ $item->id }}" />
                <p>{{ $item?->name }}</p>
            </div>
        </td>
    </tr>
@endforeach
