<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profiles</title>
</head>
<body>
    <h1>Admin Profiles</h1>

    <a href="/admin/create">Add Admin</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php foreach ($admins as $admin) : ?>
            <tr>
                <td><?= $admin['id']; ?></td>
                <td><?= $admin['name']; ?></td>
                <td><?= $admin['email']; ?></td>
                <td><?= $admin['address']; ?></td>
                <td><?= $admin['phone']; ?></td>
                <td>
                    <a href="/admin/edit/<?= $admin['id']; ?>">Edit</a>
                    <a href="/admin/delete/<?= $admin['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>