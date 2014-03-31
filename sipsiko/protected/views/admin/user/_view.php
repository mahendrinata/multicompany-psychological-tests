<div class="block">
    <div class="block-title">
        <h2>About <strong><?php echo $data->username; ?></strong></h2>
    </div>
    <table class="table table-borderless table-striped">
        <tbody>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></strong></td>
                <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('username')); ?></strong></td>
                <td><?php echo CHtml::encode($data->username); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('email')); ?></strong></td>
                <td><?php echo CHtml::encode($data->email); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('password')); ?></strong></td>
                <td><?php echo CHtml::encode($data->password); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('status')); ?></strong></td>
                <td><?php echo CHtml::encode($data->status); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?></strong></td>
                <td><?php echo CHtml::encode($data->last_login); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('last_login_ip')); ?></strong></td>
                <td><?php echo CHtml::encode($data->last_login_ip); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('token')); ?></strong></td>
                <td><?php echo CHtml::encode($data->token); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?></strong></td>
                <td><?php echo CHtml::encode($data->parent_id); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?></strong></td>
                <td><?php echo CHtml::encode($data->created_at); ?></td>
            </tr>
            <tr>
                <td style="width: 20%;"><strong><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?></strong></td>
                <td><?php echo CHtml::encode($data->updated_at); ?></td>
            </tr>
        </tbody>
    </table>
</div>