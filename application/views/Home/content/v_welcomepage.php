<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<a id="welcome" href="<?php echo site_url('login'); ?>" onmouseover="this.style='color:#3c8dbc;';" 
onmouseout="this.style='background-color:white';"
>XL WIBPUSH</a>

<script>
  $("#welcome").click(function () {
    $("#welcome").animate({
      opacity: 0.0
    }, 1000);
  });

  $("#welcome").click(function (e) {
    e.preventDefault();
    if (this.href) {
      var target = this.href;
      setTimeout(function () {
        window.location = target;
      }, 2000);
    }
  });
</script>