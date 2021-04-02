<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">password</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) : ?>
        <tr>
            <th scope="row">
                <?php echo $user['id'] ?>
            </th>
            <td>
                <?php echo $user['name'] ?>
            </td>
            <td>
                <?php echo $user['email'] ?>
            </td>
            <td>
                <?php echo $user['gender'] ?>
            </td>
            <td>
                <?php echo $user['password'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>