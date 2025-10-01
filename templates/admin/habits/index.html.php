<?php $layout = 'admin/base.html.php'; ?>

<div class="container py-5">

    <div class="row align-items-center">
        <div class="col">
            <h1>Habitudes</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User_Id</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($habits as $habits): ?>
                        <tr>
                            <td><?php echo $habits->getId() ?></td>
                            <td><?php echo $habits->getUserId() ?></td>
                            <td><?php echo $habits->getName() ?></td>
                            <td><?= $habits->getDescription() ?></td>
                            <?php ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    
</div>