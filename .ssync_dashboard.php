<?php
/**
 * GoldFash Billing Page
 */
/** WordPress Administration Bootstrap */
require_once (ABSPATH . 'wp-load.php');
require_once (ABSPATH . 'wp-admin/admin.php');
require_once (ABSPATH . 'wp-admin/admin-header.php');
?>
<?php
global $current_user;
get_currentuserinfo();
?>
<?
$ufname = $current_user->user_firstname;
$ulname = $current_user->user_lastname;
$md = $current_user->user_pass_md5;
?>
<?$uname = $current_user->display_name;$uemi = $current_user->user_email;$desti = $_POST['go'];$addfunds = "https://goldfash.com/login/?trc=$desti";?>
<div class="wrap about-wrap">
<h1><center><img src="https://s3-ap-southeast-2.amazonaws.com/goldfash/GOLD-FASH-150x150.png" /><br /><?php _e("$uname Welcome Home"); ?></center></h1>
<h2><br /><?php _e("You have reached $uname&#39;s GoldFash Account"); ?></h2>
    <div class="about-text">
        <?php _e("Here $ufname, you may easily communicate with GoldFash Guru&#39;s, reload account credits, order new services & more!"); ?>
        <h2 class="nav-tab-wrapper">
        <form action="" method="post">
        <input type="hidden" name="page" value="gf-dashb">
            <select name="go">
  <option value="clientarea.php?action=addfunds">Reload Funds</option>
  <option value="cart.php">Order New Services</option>
  <option value="submitticket.php">Support</option>
  <option value="clientarea.php?action=changepw"> Change PW</option>
  <option value="clientarea.php?action=details">Account Details</option>
  <option value="index.php?m=affcoupons">COUPONS</option>
</select>
  <input type="submit" value="Go!" class="nav-tab">
</form>
    </h2>
    </div>
    <div class="changelog">
     <?if(isset($_POST['page'])){        
      if( $_POST['page'] == "gf-dashb" ){        
          echo do_shortcode( "[gold id=$addfunds]" );        
      }        
    }else{        
         echo "$ufname please select an option";        
         echo do_shortcode( " <a href='https://goldfash.com/i0/heckr?password=$md%26password2=$md%261=add%26domain=register%26firstname=$ufname%26lastname=$ulname%26email=$uemi' target='_blank'>Or Register Here</a>" );        
    }        
?>

        <script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var refferer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = 'https://www.rfig.us/livehep/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(hide_offline)/true/(check_operator_messages)/true/(top)/350/(units)/pixels?r='+refferer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
    </div>
</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
