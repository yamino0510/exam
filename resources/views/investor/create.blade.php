<h2>Create New Investor</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('investors.store') }}">
    @csrf
    <label>Investor ID:</label><br>
    <input type="text" name="investor_id" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Create Investor</button>
</form>
