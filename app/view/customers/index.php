<?php include_once APPROOT . '/view/layout/header.php'; ?>


<div class="container" style="width: 80%; margin-top: 10px">


    <form method="get" action="/store/customers/getCustomers">
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
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Registration date</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($data as $value) { ?>

                    <tr>
                        <td><?php echo $value['first_name']; ?></td>
                        <td><?php echo $value['last_name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['reg_date']; ?></td>
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

