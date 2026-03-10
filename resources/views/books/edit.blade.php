<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h4>Edit Book</h4>
        </div>

        <div class="card-body">

            {{-- Validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.update',$book->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text"
                           name="title"
                           value="{{ $book->title }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Author</label>
                    <input type="text"
                           name="author"
                           value="{{ $book->author }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                              class="form-control"
                              rows="3">{{ $book->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Published Year</label>
                    <input type="text"
                           name="published_year"
                           value="{{ $book->published_year }}"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Book
                </button>

                <a href="{{ route('books.index') }}"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
