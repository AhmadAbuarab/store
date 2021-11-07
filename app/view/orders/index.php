<?php include_once APPROOT . '/view/layout/header.php'; ?>


<div class="container" style="width: 80%; margin-top: 10px">


    <form method="get" action="/store/orders/getOrders">
    <div class="row">
    <div class="form-group col-4">
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date_from" name="date_from" placeholder="MM/DD/YYY" type="text"/>
    </div>
        <div class="form-group col-4">
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date_to" name="date_to" placeholder="MM/DD/YYY" type="text"/>
        </div>
    <div class="form-group" style="margin-top: 10px;">
        <button class="btn btn-primary " type="submit">Submit</button>
    </div>
    </div>
    </form>


    <div class="row" style="margin-top: 20px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Order item</th>
                    <th scope="col">Purchase date</th>
                    <th scope="col">Country</th>
                    <th scope="col">Device</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($data as $value) { ?>

                    <tr>
                        <td><?php echo $value['customer']; ?></td>
                        <td><?php echo $value['ean']; ?></td>
                        <td><?php echo $value['purchase_date']; ?></td>
                        <td><?php echo $value['country']; ?></td>
                        <td><?php echo $value['device']; ?></td>
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

