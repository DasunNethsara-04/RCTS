<div class="container mt-5">
    <h2>Add User</h2>
    <?php if (isset($_GET['success'])) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: "<?= $_GET['success'] ?>"
            })
        </script>
    <?php } ?>
    <?php if (isset($_GET['error'])) { ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: "<?= $_GET['error'] ?>"
            })
        </script>
    <?php } ?>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <form method="post" action="../../Data/add-user-data.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="text" name="new_pwd" class="form-control" id="passInput" required
                        placeholder="Enter Password">
                    <button class="btn btn-secondary" id="gBTN">Random</button>
                </div>
            </div>
            <div class="mb-3">
                <label for="user_role" class="form-label">Register as:</label>
                <select name="user_role_id" id="user_role" class="form-select">
                    <?php
                    include ("../../Connection/db.php");
                    $sql = "SELECT * FROM user_role_tbl WHERE status=1 AND NOT user_role='Super User'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value=" . $row['user_role_id'] . ">" . $row['user_role'] . "</option>";
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
</div>
<script>
    // set page title
    $(document).prop('title', 'Add User - RCTS');

    // generate random password
    var gBTN = document.getElementById('gBTN');
    gBTN.addEventListener('click', function (e) {
        e.preventDefault();
        makePass(5)
    });

    function makePass(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        let counter = 0;
        while (counter < length) { result += characters.charAt(Math.floor(Math.random() * charactersLength)); counter += 1; }
        passInput.value = result;
    } </script>