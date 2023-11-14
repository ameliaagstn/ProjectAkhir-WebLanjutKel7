<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin Profile</title>
</head>
<body>
    <h1>Create Admin Profile</h1>

    <form action="/admin/store" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>

        <button type="submit">Save</button>
    </form>
</body>
</html>