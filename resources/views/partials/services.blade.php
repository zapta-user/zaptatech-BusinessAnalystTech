    <option value="type" disabled selected>
        Select Services...
    </option>
    @foreach ($services as $item)
        <option value="{{ $item->id }}">
            {{ $item->name }}
        </option>
    @endforeach
