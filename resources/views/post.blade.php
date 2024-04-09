<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>

<body>
    <h1>All Posts</h1>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->status ? 'True' : 'False' }}</td>
                    <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d, l F Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
