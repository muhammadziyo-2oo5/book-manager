<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h4>Book Details</h4>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>Title:</strong>
                <p>{{ $book->title }}</p>
            </div>

            <div class="mb-3">
                <strong>Author:</strong>
                <p>{{ $book->author }}</p>
            </div>

            <div class="mb-3">
                <strong>Description:</strong>
                <p>{{ $book->description ?? 'No description' }}</p>
            </div>

            <div class="mb-3">
                <strong>Published Year:</strong>
                <p>{{ $book->published_year }}</p>
            </div>

            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                Back
            </a>

            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">
                Edit
            </a>

        </div>

    </div>

</div>

</body>
</html>
