<?php require admin_view('static/header');?>
    <div class="content">

        <div class="box-">
            <h1>
                Edit Admin
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="box-">
            <form action="" class="form label" method="post">
                <ul>
                    <li>
                        <label for="admin_username">Admin username</label>
                        <div class="form-content">
                            <input type="text" id="admin_username" name="admin_username" value="<?=post('admin_username') ? post('admin_username') :$admin['admin_username'] ? $admin['admin_username']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="admin_pass">Admin Password</label>
                        <div class="form-content">
                            <input type="password" id="admin_pass" name="admin_pass" value="<?=post('admin_password') ? post('admin_password') :$admin['admin_password'] ? $admin['admin_password']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="admin_pass_verify">Admin Password Verify</label>
                        <div class="form-content">
                            <input type="password" id="admin_pass_verify" name="admin_pass_verify">
                        </div>
                    </li>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Edit</button>
                    </li>
                </ul>

            </form>
        </div>

    </div>

<?php require admin_view('static/footer');?>