<?php include_once APPROOT . '/view/layout/header.php'; ?>


<div class="container" style="width: 80%; margin-top: 10px">

    <div class="row" style="margin-top: 20px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">EAN</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($data as $value) { ?>

                    <tr>
                        <td><?php echo $value['ean']; ?></td>
                        <td><?php echo $value['quantity']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                    </tr>

                <?php } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


</div>
</div>

<?php include_once APPROOT . '/view/layout/footer.php'; ?>

