<div class="container mt-5">
    <h2>Show Users</h2>
    <div class="mt-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Date Added</th>
                    <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("../../Connection/db.php");
                $sql = "SELECT * FROM user_tbl ut INNER JOIN user_role_tbl urt ON (ut.user_role_id = urt.user_role_id) WHERE NOT urt.user_role_id=1 AND ut.status=1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $i . "</th>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['user_role'] . "</td>";
                    echo "<td>" . $row['date_added'] . "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-sm-square btn-success mx-1' href='user-profile.php?id=" . $row['user_id'] . "'>Profile</a>";
                    echo "<a class='btn btn-sm-square btn-primary mx-1' href='edit-user.php?id=" . $row['user_id'] . "'>Edit</a>";
                    echo "<a class='btn btn-sm-square btn-danger mx-1' href='delete-user.php?id=" . $row['user_id'] . "'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                    $i++;
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).prop('title', 'Show Users - RCTS');
</script>