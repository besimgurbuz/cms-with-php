<?php require admin_view('static/header');?>
<div class="box-">
    <h1>
        All Members
        <a href="<?=admin_url('add-member')?>">Add New</a>
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Description</th>
            <th>Social Media Links</th>
            <th class="hide">Creating date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row):?>
            <tr>
                <td>
                    <?=$row['name']?>
                </td>
                <td>
                    <?=$row['mail']?>
                </td>
                <td style="width: 300px">
                    <?=$row['description']?>
                </td>
                <td>
                    <?php if(!empty(social_url($row))):?>
                        <?php foreach (social_url($row) as $media_url): ?>
                            <?=$media_url?>
                        <?php endforeach;?>
                    <?php endif;?>
                </td>
                <td>
                    <?=$row['date']?>
                </td>
                <td>
                    <a href="<?=admin_url('edit-member?id='.$row['id'])?>" class="btn">Edit</a>
                    <a href="<?=admin_url('delete?target=member&id='.$row['id'])?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<?php require admin_view('static/footer');?>
