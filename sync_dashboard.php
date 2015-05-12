<?php
/**
 * Our custom dashboard page
 */

/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>
<?php global $current_user;
      get_currentuserinfo();
?>
<div class="wrap about-wrap">

	<h1><?php _e( 'Welcome to GoldFash Billing-board' ); ?></h1>
	
	<div class="about-text">
		<?php _e('Here you may easily communicate with GoldFash Guru&#39;s, reload account credits, order new services & more!' ); ?>
	</div>
	
	<h2 class="nav-tab-wrapper">
		<form action="https://www.goldfash.com/.golddata/support.php" target="_blank" method="post">
			<select name="tJPeEsbbbGthab87tuCNWpLgdheSUv2WpVRwAwfr2SFdzc5Up6494d85NATDvTAcjrp6uNwAyuybHFwZXe4cmFMqgDxH3UJgsfY8k5YBdtPJ3Fxgm8mwazVYb8KtG9HPWBXu6Bmj9nvGzaLZ5mAApYMxeCHNQTHZNYhJ92HPE4KeRqeLwsJmGzKNXNgvfp2WjWjVPDYn9LyAbqbRS8UwYwAdmTtEZ7uqPLWBA9KxcNxLedGSPRyWWRUGYJRyNbR92rztgpTXmN6QDJAUNyTPSKJ7zpETuJ5YjvCVuxp5zzhG3jCCXNJ7EyYGQv7zzQKLSjXYVLV8k2fQ4b8wZT6zaSfMDxLukBtFB43MYep9zbDY3dBxZUeqNTHxbVRmqaUEJ9u7VYtbMLUs4c7wHZmrg7YeYk4ZeKTe49hTy3ueTtyGG3jhXVUaLVbHZJm8Gm3jQVgaS4vvaSuSDexucbVNWWJjfUYNkq4KNNaygQWtRPS4MD6hrxsRjE38Y6t6McFUbKXUFQRcSA4GjmDnTZZEeYHcPjSgu84ZKgMNhDkfhYvXsEfbNFu6EWWevNRF7brL2hLk7wXDWSPRGQkemCzyMu9bK5wmMF5YzpYBg8cZPPFgmRFnV6WnQMxfcudP8csVpS6RuV7JMmu3DRBhBaGQBgu2eBtHYS3PBjrVkesYu67DCknsev6aDMaHwqsG8dCvbGag7fgLpwTuAgkj6Z6e8Xyawagq6hTpaCEANSvCZ9jNmKkWh6jZyqKK2pQaSrXThJ9GjpAqfsk96k4Uu99YjSMvDQScp7VCkpLG4H3Pznmq5peuYAP6SAMUFvyXePyx7EkXVwesdeAntAWg9gL5FSaMtW2tZZeaVM7GuNHvj4F3BEBzeN79GXukamrjXfSkxrNyaEQEWqJyJYsxrQpeMNG2RUR6Lcm5QDxCYFh8fFv6xwA3fyM4gfqfzhXwp8ByNbNhEB7ZveYFcjyLrCT3CMw45kLgUPb27GaKX3zZEnKDHuJ8Q78cnjbGLx3z9Mhp">
  <option value="clientarea.php?action=addfunds">Reload Funds</option>
  <option value="cart.php">Order New Services</option>
  <option value="submitticket.php">Support</option>
  <option value="clientarea.php?action=details">Account Details</option>
  <option value="affiliates.php">Check Your Earnings</option>
  <option value="logout.php">Logout</option>
</select>
  <input type="hidden" name="bvQdgcgkXyPRAC29SYMzjQT5xSzTWVyU9EXj7rn77AEqwbyCnB2NT7LPEJqzaENvTH2fwwkDfGvZKq8SFhhd6AK8GEqxzWnYGDXZuC93HurfWPSndTcpsLQcGN5RteaFn9axgR7UhetQ2CB753hFjWzSsHJXqmaSM2K7CSpxsXhnrDsBeANgupKaKSuKWaRQb28VPeJn84DsVfxcJayS47fHv6zbHWfRcE6wUCS3fmt8UtmEWcpaMrFk9NMXdUwt4RssBDpe9qtVsUSbXTvc6d9bDcwfJGtymaFTc3puhuqQYDSRXC3Guk28SsJD5MXjaTnAHGQg4RQK4Yj7ZpRGbQDDTX4Wq7suxAL9bL25LqKtvXChTNFE74V22guaPZHDTAVU94E7WuLv4sESQK4rw454p4unrhxtkpjCedk63bm4G9D4Y8KQ76HVjjyPDCkVsEgJDVPGrLVgMJZxMUyZssKxrkn47T8K7BS2ZYWktbgdzJHCZTQgapq2p7BWqycUkPzNtRA3dr6nzSDQjXcksp5vccrUPv2Ua4kSaU8PP7K9WwF3z5GHTWrJn7HzbDZ33SKGgNYmcF9LTzuuSzVEPVZVy63U9n7EFCwEwfTz3cQbVS3Cj27kk8Tm97wCDauCDvv3SjXkEhywpPUtjgKXbFdJqZQks7Zq2vXDnMA5B4CEX2gAd5gAcvZ2Czag6z4LjpqHxEbfKPGcxQpX5h53YSHP7AqXsZ2J8wdxncq4Z9RaMphz9FfTRM32Dr2vyWQZ2WUqfk83TpLpsydTjgdn6m8uYEKJJGcKh9jnvKNkyUvBdUzEdPxj4jj9VVuH5JrPjBJz2hLG8jzR8NqsnrhW7R9jqNfRHwAqmEW8rxCLhNpWWz2vatJ6a6nDYp4Sq95RWSYcUJ3hzmuJwMfRJZjjcDVAbQhhFkbN2F5JrtDzZYBB5RGW6N4ayXZyz8r8TytcCRA2rRfrAPsmNrapB6xbFzxRZjZNcW4S2C7VmQ2Zru46qWmdLepcqeYqNx34nKhg" value="<?php echo $current_user->user_email;?>">
  <input type="submit" value="Go!" class="nav-tab">
</form>
	</h2>
	
	<div class="changelog">
		<center><h3>GoldFash Instant Mail</h3></center>
	<iframe src="https://www.goldfash.com/r/?sdk=go&gp=imail&gbad=0" width="100%" height="800" />
		
	</div>

</div>
