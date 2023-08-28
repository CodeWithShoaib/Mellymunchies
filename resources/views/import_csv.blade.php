<!DOCTYPE html>
<html>

<head>
    <title>CSV Import</title>
</head>

<body>
    <form action="{{ route('import.csv') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Import CSV</button>
    </form>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @elseif(session('error'))
        <div>{{ session('error') }}</div>
    @endif
</body>

</html>
