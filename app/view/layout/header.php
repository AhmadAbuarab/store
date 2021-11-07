<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="./public/javascript/javascript.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title><?php echo SITENAME; ?></title>

</head>
<body>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">

            <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 220px;bottom: 0;float: none;left: 0;position: fixed;top: 0;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-4"><?php echo SITENAME; ?></span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a href="/store" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span
                                class="ms-2">Dashboard</span> </a></li>
                    <li><a href="/store/orders" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">Orders</span>
                        </a></li>
                    <li><a href="/store/orderitems" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Order Items</span> </a>
                    </li>
                    <li><a href="/store/customers" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Customers</span>
                        </a></li>
                </ul>
                <hr>
            </div>
        </div>