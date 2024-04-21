<div class="container mt-5">
    <h2>Add User</h2>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Enter Name" name="name" required />
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email" required />
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
</div>

<!-- set page title -->
<script>
    $(document).prop('title', 'Add User - RCTS');
</script>