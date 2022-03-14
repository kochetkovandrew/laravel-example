<html>
<body>
<h1>New airport</h1>
<form action="/airports" method="post">
    @csrf
    Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
</body>
</html>
