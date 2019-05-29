<?php require admin_view('static/header');?>
<div class="box-">
    <h1>
        All Partners
        <a href="<?=admin_url('add-partner')?>">Add New</a>
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Partner URL</th>
            <th class="hide">Creating date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row):?>
            <tr>
                <td>
                    <?=$row['partner_name']?>
                </td>
                <td>
                    <?=$row['partner_url']?>
                </td>
                <td style="width: 300px">
                    <?=$row['partner_date']?>
                </td>
                <td>
                    <a href="<?=admin_url('edit-partner?id='.$row['partner_id'])?>" class="btn">Edit</a>
                    <a href="<?=admin_url('delete?target=partner&id='.$row['partner_id'])?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<?php require admin_view('static/footer');?>
