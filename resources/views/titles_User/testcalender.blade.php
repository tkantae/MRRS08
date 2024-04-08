<form method="POST" action="{{ route('submit.form') }}">
    @csrf

    <label for="date">Date:</label>
    <input type="date" id="date" name="date">

    <label for="roomSize">Room Size:</label>
    <input type="text" id="roomSize" name="roomSize">

    <button type="submit">Submit</button>
</form>