<?php require admin_view('static/header');?>
    <div class="box-">
        <h1>
            Admins
            <a href="<?=admin_url('add-user')?>">Add New</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Admin username</th>
                <th>Register Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($admins as $admin):?>
                <tr>
                    <td>
                        <a href="<?=admin_url('edit-user').'?id='.$admin['admin_id']?>" class="title">
                            <?=$admin['admin_username']?>
                        </a>
                    </td>
                    <td>
                       <?=$admin['admin_reg_date']?>
                    </td>
                    <td>
                        <a href="<?=admin_url('edit-user').'?id='.$admin['admin_id']?>" class="btn">Edit</a>
                        <? if (count($admins)!=1):?>
                        <a href="<?=admin_url('delete?target=user&').'id='.$admin['admin_id']?>" class="btn">Delete</a>
                        <? endif;?>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>


<?php require admin_view('static/footer');?>