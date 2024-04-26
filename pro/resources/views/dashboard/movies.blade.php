<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
</head>
<body>

<div class="container">
    <h1>Add a New Movie</h1>
    <form action="{{ url('/movies/create') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- CSRF token for security -->

        <div class="form-group">
            <label for="title">Movie Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>

        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
        </div>

        <div class="form-group">
            <label for="short_des">Short Description:</label>
            <input type="text" class="form-control" id="short_des" name="short_des" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Movie Image (multiple files):</label>
            <input type="file" class="form-control" id="image" name="image[]" multiple>
        </div>

        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="text" class="form-control" id="rating" name="rating" required>
        </div>

        <div class="form-group">
            <label for="show_times">Show Times:</label>
            <div>
                <input type="checkbox" name="show_times[0][]" value="morning"> Morning
                <input type="checkbox" name="show_times[0][]" value="afternoon"> Afternoon
                <input type="checkbox" name="show_times[0][]" value="evening"> Evening


            </div>
        </div>


        <div class="form-group">
            <label for="language">Language:</label>
            <input type="text" class="form-control" id="language" name="language" required>
        </div>



        <div class="form-group" id="date-time-wrapper">
            <label>Dates and Show Times:</label>
            <div class="date-time-entry">
                <input type="date" class="form-control" name="show_dates[]" required>
                <input type="checkbox" name="show_times[0][]" value="morning"> Morning
                <input type="checkbox" name="show_times[0][]" value="afternoon"> Afternoon
                <input type="checkbox" name="show_times[0][]" value="evening"> Evening
            </div>
        </div>
        <button type="button" id="add-date">Add Another Date</button>

        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>

<script>
    document.getElementById('add-date').addEventListener('click', function() {
        var wrapper = document.getElementById('date-time-wrapper');
        var newEntry = document.createElement('div');
        newEntry.className = 'date-time-entry';
        var currentIndex = wrapper.getElementsByClassName('date-time-entry').length;

        newEntry.innerHTML = `
        <input type="date" class="form-control" name="show_dates[]" required>
        <input type="checkbox" name="show_times[${currentIndex}][]" value="1"> Morning
        <input type="checkbox" name="show_times[${currentIndex}][]" value="2"> Afternoon
        <input type="checkbox" name="show_times[${currentIndex}][]" value="3"> Evening
    `;

        wrapper.appendChild(newEntry);
    });
</script>
</body>
</html>
