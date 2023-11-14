<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin Profile</title>
</head>
<body>
    <h1>Edit Admin Profile</h1>

    <form action="/admin/update/<?= $admin['id']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $admin['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $admin['email']; ?>" required>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= $admin['address']; ?>" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?= $admin['phone']; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>