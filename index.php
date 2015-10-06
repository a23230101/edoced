<h1>base64_encode</h1>
<br/>
<?php echo $_POST["encode"]; ?>
<form action="index.php" method="post">
<textarea type="text" name="encode"rows="5" style="min-width: 100%"></textarea>
<input type="submit">
</form>

<textarea rows="5" style="min-width: 100%">
<?php echo base64_encode($_POST["encode"]); ?>
</textarea>
<br/>
<h1>base64_decode</h1>
<br/>
<?php echo $_POST["decode"]; ?>
<form action="index.php" method="post">
<textarea type="text" name="decode"rows="5" style="min-width: 100%"></textarea>
<input type="submit">
</form>

<textarea rows="5" style="min-width: 100%">
<?php echo base64_encode($_POST["decode"]); ?>
</textarea>
