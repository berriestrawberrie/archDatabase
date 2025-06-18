<div class="d-none" id="newUserForm">
    <button class="btn btn-danger" id="cancelUser">Cancel</button>
<form class="row g-3 needs-validation border rounded p-2 bg-white mb-4"
    method="POST" action="/newUser" novalidate >
        @csrf
        @method('POST')
        <h2>Register A User</h2>
        <div class="col-md-4">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
                <div class="invalid-feedback">
                    Required Field. You may only use the characters A to Z.
                </div>
                <div class="form-text">You may only use the characters A to Z</div>
        </div>
        <div class="col-md-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control"  id="lastname" name="lastname" onchange="newPassword()"  required>
                <div class="invalid-feedback">
                    Required Field. You may only use the characters A to Z.
                </div>
                <div class="form-text" id="basic-addon">You may only use the characters A to Z</div>
        </div>
        <div class="col-md-4">
                <label for="user_type" class="form-label">User Type</label>
                <select class="form-select" id="user_type" name="user_type" onchange="userDetails()"  required>
                    <option disabled selected>--Select User Type--</option>
                    <option >user</option>
                    <option >admin</option>
                </select>
                <div class="invalid-feedback">
                    Required Field.
                </div>
        </div>

        <div class="d-none" id="user">
            <h3>User Privileges</h3>
            <ul>
                <li><i class="fa-solid fa-caret-right"></i> Saving Artifacts</li>
                <li><i class="fa-solid fa-caret-right"></i> Submitting Artifacts for Validation</li>
            </ul>
        </div>
        <div class="d-none" id="admin">
            <h3>Administrative Privileges</h3>
            <ul>
                <li><i class="fa-solid fa-caret-right"></i> Saving Artifacts</li>
                <li><i class="fa-solid fa-caret-right"></i> Submitting Artifacts for Validation</li>
                <li><i class="fa-solid fa-caret-right"></i> Validate Artifacts for Publishing</li>
            </ul>
        </div>
        <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <div class="invalid-feedback">
                Required Field.
            </div>
        </div>
        <div class="col">
            <label for="passowrd" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password">
            <div class="invalid-feedback">
                Required Field.
            </div>
        </div>
        <button class="btn btn-outline-success" type="submit">Create A User</button>

    </form>

</div>