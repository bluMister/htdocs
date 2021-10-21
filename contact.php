<!DOCTYPE html>
<html>
<?php
	include('header.php');
?>
		<div class="contact">
			
				<h2>contact us!</h2>
			<div class="conTop">
			
				<label for="nick">Name:</label>
				<input class="nick" type="text" name="nick" value="" required="required">
				<label for="your message">Your message:</label>
				<textarea name="sprava" required="required"></textarea>
				<label id="check" for="your message">Send Anonymously:</label>
				<input id="checkboy"type="checkbox" name="anon" value="1" required="required">
				<span class="checkmark"></span>
				<input class="send" type="submit" name="send" value="send">
			</div>
		</div>	
	</body>
</html>