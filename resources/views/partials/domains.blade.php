@foreach ($domains as $item)
    <tr>
        <td>
            <div class="d-flex gap-2 align-items-center">
                <input type="checkbox" name="domains[]" value="{{ $item->id }}" />
                <p>{{ $item?->name }}</p>
            </div>
        </td>
    </tr>
@endforeach
