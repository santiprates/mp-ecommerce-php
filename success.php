<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce | Pago Completado</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/success.css">

    <link rel="stylesheet" href="./assets/css/aplixer.css" media="screen, print">
</head>
<body style="margin:0;">
<div style="height:100%; width:100%">
<span class="trigger scale"></span>
<div class="successPayment">

  <a href="#" class="button"><span class="checkmark"></span>
  </a>
  <h1 class="text__success">¡Pago completado!</h1>
<div class="aplixer-order-data">
  <?php if(isset($_GET['payment_method_id']) && isset($_GET['external_reference']) && isset($_GET['payment_id'])){ ?>
    <p><?php echo 'Método de pago: '.$_GET['payment_method_id']; ?></p>
    <p><?php echo 'Referencia externa: '.$_GET['external_reference']; ?></p>
    <p><?php echo 'Referencia de pago: '.$_GET['payment_id']; ?></p>
  <?php } ?>
</div>

  <a href="#" id="link_ref" class="btnInicio">Volver al sitio</a>
  </div>
</div>
<script type="text/javascript" src="./assets/js/aplixer.js"></script>
</body>
</html>