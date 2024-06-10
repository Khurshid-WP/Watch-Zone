<?php
    session_start();
    include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
    background-color:#eee;    
}
.content{
    margin-top:40px;    
}
.plan-one {
    margin: 0 0 20px 0;
    width: 100%;
    position: relative;
}

.plan-card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.5);
}

.plan-one .pricing-header {
    padding: 0;
    margin-bottom: 0;
    text-align: center;
}

.plan-one .pricing-header .plan-title {
    -webkit-border-radius: 10px 10px 0px 0px;
    -moz-border-radius: 10px 10px 0px 0px;
    border-radius: 10px 10px 0px 0px;
    font-size: 1.2rem;
    color: #ffffff;
    padding: 10px 0;
    font-weight: 600;
    background: black;
    margin: 0;
}

.plan-one .pricing-header .plan-cost {
    color: #ffffff;
    background: black;
    padding: 15px 0;
    font-size: 2.5rem;
    font-weight: 700;
}

.plan-one .pricing-header .plan-save {
    color: #ffffff;
    background: black;
    padding: 10px 0;
    font-size: 1rem;
    font-weight: 700;
}

.plan-one .pricing-header.green .plan-title {
    background: black;
}

.plan-one .pricing-header.green .plan-cost {
    background: black;
}

.plan-one .pricing-header.green .plan-save {
    background: black;
}

.plan-one .pricing-header.orange .plan-title {
    background: black;
}

.plan-one .pricing-header.orange .plan-cost {
    background: black;
}

.plan-one .pricing-header.orange .plan-save {
    background: black;
}

.plan-one .plan-features {
    border: 1px solid #e6ecf3;
    border-top: 0;
    border-bottom: 0;
    padding: 0;
    margin: 0;
    text-align: left;
}

.plan-one .plan-features li {
    padding: 10px 15px 10px 40px;
    margin: 5px 0;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    position: relative;
    border-bottom: 1px solid #e6ecf3;
    line-height: 100%;
}

.plan-one .plan-footer {
    border: 1px solid #e6ecf3;
    border-top: 0;
    background: #ffffff;
    -webkit-border-radius: 0 0 10px 10px;
    -moz-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
    text-align: center;
    padding: 10px 0 30px 0;
}

@media (max-width: 767px) {
    .plan-one .pricing-header {
        text-align: center;
    }
    .plan-one .pricing-header i {
        display: block;
        float: none;
        margin-bottom: 20px;
    }
}
.btn{
    background: black;
    color:white;
}
    </style>
</head>

<body>
 
    <h1 class="display-4 text-center">Select Subscription</h1>
<div class="container content">
<div class="row gutters">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="plan-card plan-one">
			<div class="pricing-header">
				<h4 class="plan-title">Free</h4>
				<div class="plan-cost">$0</div>
			</div>
			<ul class="plan-features">
				<li>Only 10 Products to Sale</li>
				<li>7 Days Trial</li>
				<li class="text-muted"><del>Unlimited Sales</del></li>
				<li class="text-muted"><del>Discount</del></li>
			</ul>
			<div class="plan-footer">
            <a href="checkout.php" class="btn  btn-lg btn-rounded">Select Plan</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="plan-card plan-one">
			<div class="pricing-header orange">
				<h4 class="plan-title">Standard</h4>
				<div class="plan-cost">$10.00</div>
			</div>
			<ul class="plan-features">
				<li>Unlimited Products to Sale</li>
				<li>For 30 Days </li>
				<li class="">Unlimited Sales</li>
				<li class="text-muted"><del>Discount</del></li>
			</ul>
			<div class="plan-footer">
            <a href="checkout.php" class="btn  btn-lg btn-rounded">Select Plan</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="plan-card plan-one">
			<div class="pricing-header green">
				<h4 class="plan-title">Premium</h4>
				<div class="plan-cost">$100.00</div>
			</div>
			<ul class="plan-features">
				<li>Unlimited Products to Sale</li>
				<li>For 1 Year</li>
				<li class="">Unlimited Sales</li>
				<li class="">Discount</li>
			</ul>
			<div class="plan-footer">
				<a href="checkout.php" class="btn  btn-lg btn-rounded">Select Plan</a>
			</div>
		</div>
	</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>