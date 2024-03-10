<h1>Devices</h1>
<ul>
    @foreach($devices as $device)
        <li>
            <a href="{{ route('devices.show', $device) }}">{{ $device->location_name }}</a>
            <form action="{{ route('devices.destroy', $device) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
<a href="{{ route('devices.create') }}">Create New Device</a>