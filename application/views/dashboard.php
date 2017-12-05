<?php $url = base_url()."public/"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo $url; ?>assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Responsive Bootstrap HTML Mobile Application Template - Free Download">
  <title>Qurban</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo $url; ?>assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<div id="menu-0" custom-code="true">

<!-- 1 PAGES -->
<section class="mbr-section mbr-section__container article" id="daftarpequrban" style="background-color: rgb(244, 244, 244); padding-top: 60px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <center><h3 class="mbr-section-title display-2">DAFTAR PEQURBAN</h3></center>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(244, 244, 244); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th >No</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th><center>Kambing</center></th>
                    <th><center>Sapi</center></th>
                    <th><center>Status</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach ($pequrban as $row) { $no++; ?>
                    <tr>
                      <td align="left"><?php echo $no; ?></td>
                      <td align="left"><?php echo $row->user_nama; ?></td>
                      <td align="left"><?php echo $row->alamat; ?></td>
                      <?php
                      if ($row->hewan_id != 1 ){ ?>
                        <td><?php echo $row->jumlah ?></td>
                        <td>0</td>
                      <?php } else { ?>
                        <td>0</td>
                        <td><?php echo $row->jumlah ?></td>
                      <?php } ?>
                      <?php if ($row->status == "unverified"): ?>
                          <td><a href="<?php echo base_url().'verifikasi/'.$row->pembayaran_id; ?>" class="btn btn-danger"><?php echo $row->status; ?></a></td>
                      <?php else: ?>
                          <td><a href="<?php echo base_url().'verifikasi/'.$row->pembayaran_id; ?>" class="btn btn-success"><?php echo $row->status; ?></a></td>
                      <?php endif; ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>

<!-- END OF -->

<section class="mbr-section article" id="msg-box22-g" style="padding-top: 40px; padding-bottom: 20px;">
    <div class="mbr-overlay" style="background-color: #f4f4f4;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <a href="<?php echo base_url() ?>login/logout" class="btn btn-warning">Logout</a>
                <!-- <p>(c) 2017 Qurban Template by <a  href="https://mobirise.com" style="color:#333;text-decoration:underline;"> Mobirise</a></p> -->
            </div>
        </div>
    </div>
</section>
  <script src="<?php echo $url; ?>assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo $url; ?>assets/tether/tether.min.js"></script>
  <script src="<?php echo $url; ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $url; ?>assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="<?php echo $url; ?>assets/dropdown/js/script.min.js"></script>
  <script src="<?php echo $url; ?>assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="<?php echo $url; ?>assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="<?php echo $url; ?>assets/jarallax/jarallax.js"></script>
  <script src="<?php echo $url; ?>assets/theme/js/script.js"></script>
  <input name="animation" type="hidden">
  </body>
</html>
