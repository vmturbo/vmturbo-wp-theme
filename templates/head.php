<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <?php if(is_page_template('template-landingpage.php') || is_singular('partners')) {?><script src="//app-sjp.marketo.com/js/forms2/js/forms2.min.js"></script><?php } ?>
</head>
