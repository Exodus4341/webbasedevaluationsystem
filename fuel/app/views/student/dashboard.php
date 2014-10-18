<?php Asset::css('css/css/docs.min.css'); ?>
<?php Asset::css('css/bootstrap.min.css'); ?>
<?php Asset::js('js/bootstrap.min.js'); ?>
<?php Asset::js('js/docs.min.js'); ?>
<style type="text/css">
	.half-rule{
		width: 450px;
	}
	.txt-align{
		text-align: center;
	}
</style>

<ol class="breadcrumb">
  <li class="active">Dashboard</li>
</ol>

<!-- slider -->
<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        <li data-target="#carousel-example-captions" data-slide-to="3"></li>
        <li data-target="#carousel-example-captions" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php echo Asset::img('anniversary.jpg');?>
          <div class="carousel-caption">
            <h3>Jose Maria College</h3>
        	<p>Anniversary</p>
          </div>
        </div>
        <div class="item">
          <?php echo Asset::img('buwan_1.jpg');?>
          <div class="carousel-caption">
            <h3>Jose Maria College</h3>
       		<p>Buwan ng wika</p>
          </div>
        </div>
        <div class="item">
          <?php echo Asset::img('fire-drill-2014-41.jpg');?>
          <div class="carousel-caption">
            <h3>Jose Maria College </h3>
        	<p>Fire Drill 2014</p>
          </div>
        </div>
        <div class="item">
          <?php echo Asset::img('silverlion.jpg');?>
          <div class="carousel-caption">
            <h3>Jose Maria College</h3>
       		<p>Team Jaguars</p>
          </div>
        </div>
        <div class="item">
          <?php echo Asset::img('smart-jump-in.jpg');?>
          <div class="carousel-caption">
            <h3>Jose Maria College</h3>
        	<p>Smart Jump In</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
<!-- end slider -->

<br /><br />
<!-- teaser -->
  <div class="row">
    <h2 class="bs-docs-featurette-title txt-align">JMC Web-E-SMS-Notification-System</h2>
    <p class="lead txt-align">A Fast Robust Faculty College Evaluation with SMS Technology System.</p>

    <hr class="half-rule">

    <div class="row">
      <div class="col-sm-4">
        <img src="../assets/img/anniversary.jpg" alt="Sass and Less support" class="img-responsive img-thumbnail">
        <h3 class="txt-align">JMC Cheerdance Compition Team Silvirlions</h3>
        <p class="txt-align">2014 Jose Maria College August 4-8, during the cheerdance compition.</p>
      </div>
      <div class="col-sm-4">
        <img src="../assets/img/buwan_1.jpg" alt="Responsive across devices" class="img-responsive img-thumbnail">
        <h3 class="txt-align">Buwan nang Weka 2014</h3>
        <p class="txt-align">2014 Jose Maria College Buwan nang Weka at sky gym.</p>
      </div>
      <div class="col-sm-4">
        <img src="../assets/img/smart-jump-in.jpg" alt="Components" class="img-responsive img-thumbnail">
        <h3 class="txt-align">Smart Jump In 2014</h3>
        <p class="txt-align">Grade School Department entry for smart jump-in dance off 2 qualified for the regional finals on September 6, 2014 @ SM-ANNEX ECOLAND DAVAO CITY.</p>
      </div>
    </div>
    <hr class="half-rule">
  </div>

<!-- end teaser -->