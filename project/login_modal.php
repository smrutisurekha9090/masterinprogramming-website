<!-- Modal for login -->

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="login">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="myform" action="login.php" method="POST" target="_blank">
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" name="email" required class="form-control" id="email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="checkbox">Remember me</label>
                            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit" >Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>