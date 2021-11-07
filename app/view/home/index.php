<?php include_once APPROOT . '/view/layout/header.php'; ?>


    <div class="container" style="width: 80%">
        <div class="row">
            <div class="col py-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total number of orders</h5>
                        <p class="card-text"><?php echo $data['order'][0]['order_count'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col py-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total number of revenue</h5>
                        <p class="card-text"><?php echo $data['order_item'][0]['revenue'] ?></p>
                    </div>
                </div>
            </div>


            <div class="col py-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total number of customers</h5>
                        <p class="card-text"><?php echo $data['customer'][0]['total_customers'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="curve_chart" style="width: 1000px;"></div>

            </div>
        </div>

    </div>
    </div>
    </div>


<?php include_once APPROOT . '/view/layout/footer.php'; ?>