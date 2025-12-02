<h2>Edit Investor</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('investors.update', $investor->id) }}">
    @csrf
    @method('PUT')

    <label>Investor ID:</label><br>
    <input type="text" name="investor_id" value="{{ $investor->investor_id }}" readonly><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $investor->name }}" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $investor->email }}" required><br><br>

    <button type="submit">Update Investor</button>
</form>
