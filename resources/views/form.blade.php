<!DOCTYPE html>
<html>

<head>
    <title>Speech generator</title>
</head>

<body>
    <h1>Speech generator</h1>
    <p>Add more details about the speech:</a></p>
    <form action="/submit" method="POST">
        @csrf
        <label for="husband">Husband:</label><br>
        <input type="text" id="husband" name="husband"><br>
        <label for="wife">Wife:</label><br>
        <input type="text" id="wife" name="wife"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>