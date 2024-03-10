<!-- resources/views/devices/show.blade.php -->

<h1>Device Details</h1>
<p>ID: {{ $device->id }}</p>
<p>Device ID: {{ $device->device_id }}</p>
<p>Location Name: {{ $device->location_name }}</p>
<!-- Add more details as needed -->
<a href="{{ route('devices.edit', $device) }}">Edit Device</a>
<form action="{{ route('devices.destroy', $device) }}" method="post" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('devices.index') }}">Back to Devices</a>
