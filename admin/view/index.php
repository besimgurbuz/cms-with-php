<?php require admin_view('static/header');?>
    <!--<div class="box-container">
        <div class="box" id="div-0">
            <h3>Resume submits</h3>
            <div class="box-content">
                <p>
                    need database
                </p>
            </div>
        </div>
    </div>-->

    <div class="box-container container-25">
        <div class="box" id="div-1">
            <h3>
                Available Roles
            </h3>
            <div class="box-content">
                <ul style="font-size: 16px;margin-bottom: 40px">
                <?php foreach ($roles as $role):?>
                    <li style="margin-bottom: 10px"><?=$role['role_name']?><a href="<?=admin_url('delete?target=role&id='.$role['role_id'])?>" style="float: right;font-size: 15px">Delete</a></li>
                <?endforeach;?>
                </ul>
                <form action="" class="form" method="post">
                    <ul>
                        <li>
                            <input type="text" id="input" placeholder="Role Name" name="role_name">
                        </li>
                        <li>
                            <button type="submit" name="submit" value="1">Add Role</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="box-container container-75">
        <div class="table">
            <h2 style="font-size: 16px; font-weight: 500">
                Newsletter Subscribe Requests
            </h2>
        <table>
            <thead>
            <tr>
                <th width="100">E-Mail</th>
                <th>Phone</th>
                <th>Creating Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($newsletters as $newsletter):?>
                <tr>
                    <td>
                        <?=$newsletter['newsletter_email']?>
                    </td>
                    <td>
                        <?=$newsletter['newsletter_email']?>
                    </td>
                    <td style="width: 300px">
                        <?=$newsletter['newsletter_date']?>
                    </td>
                    <td>
                        <a href="<?=admin_url('delete?target=newsletter&id='.$newsletter['newsletter_id'])?>" class="btn">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>

<?php require admin_view('static/footer');?>