<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
</head>
<body>
<h1>Add New Movie</h1>
<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Title:</label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label>Genre:</label>
        <input type="text" name="genre" required>
    </div>
    <div>
        <label>Duration (in minutes):</label>
        <input type="number" name="duration" required>
    </div>
    <div>
        <label>Short Description:</label>
        <textarea name="short_description" required></textarea>
    </div>
    <div>
        <label>Description:</label>
        <textarea name="description" required></textarea>
    </div>
    <div>
        <label>Starring:</label>
        <input type="text" name="starring" required>
    </div>
    <div>
        <label>Director:</label>
        <input type="text" name="director" required>
    </div>
    <div>
        <label>Producer:</label>
        <input type="text" name="producer" required>
    </div>
    <div>
        <label>Image:</label>
        <input type="file" name="image">
    </div>








    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $('.datepicker').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0, // Restrict past dates
                beforeShowDay: $.datepicker.noWeekends // Disable weekends
            });
        });
    </script>

<!--    <label>Show Dates:</label>-->
<!--    <input type="text" name="show_dates[]" class="datepicker">-->
<!--    <button type="button" onclick="addDate()">Add Another Date</button>-->
<!---->
<!--    <script>-->
<!--        function addDate() {-->
<!--            var newPicker = $('<input type="text" name="show_dates[]" class="datepicker">');-->
<!--            $('body').append(newPicker);-->
<!--            newPicker.datepicker({-->
<!--                dateFormat: 'yy-mm-dd',-->
<!--                minDate: 0,-->
<!--                beforeShowDay: $.datepicker.noWeekends-->
<!--            });-->
<!--        }-->
<!--    </script>-->







    <label>Show Dates and Times:</label>
    <div id="date-time-picker">
        <input type="text" name="show_dates[]" class="datepicker">
        <label><input type="checkbox" class="time-slot" value="1"> Morning</label>
        <label><input type="checkbox" class="time-slot" value="2"> Afternoon</label>
        <label><input type="checkbox" class="time-slot" value="3"> Evening</label>
        <button type="button" onclick="addDateTime()">Add Another Date</button>
    </div>

    <script>
        function addDateTime() {
            var newPicker = $('<div><input type="text" name="show_dates[]" class="datepicker">' +
                '<label><input type="checkbox" class="time-slot" value="1"> Morning</label>' +
                '<label><input type="checkbox" class="time-slot" value="2"> Afternoon</label>' +
                '<label><input type="checkbox" class="time-slot" value="3"> Evening</label></div>');
            $('#date-time-picker').append(newPicker);
            newPicker.find('.datepicker').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0,
            });
        }
    </script>













    <button type="submit">Add Movie</button>
</form>
</body>
</html>
