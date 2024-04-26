<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
</head>
<body>
<div class="container">
    <h1>Movies List</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Duration</th>
            <th>Show Dates and Times</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->genre }}</td>
            <td>{{ $movie->duration }} minutes</td>
            <td>
                @foreach ($movie->showtimes as $showtime)
                {{ $showtime->show_date }} ({{ $showtime->readableShowTime }})
                @if (!$loop->last)
                ,
                @endif
                @endforeach

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
