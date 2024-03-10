<!-- resources/views/devices/create.blade.php -->

<h1>Create New Device</h1>
<form action="{{ route('devices.store') }}" method="post">
    @csrf
    <label for="device_id">Device ID:</label>
    <input type="text" name="device_id" required>
    <label for="location_name">Location Name:</label>
    <input type="text" name="location_name" required>
    <!-- Add more fields as needed -->
    <button type="submit">Create Device</button>
</form>
<a href="{{ route('devices.index') }}">Back to Devices</a>
