<h2>SHA-512 Generator</h2>
<?php
$text = "";
$SHA512 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["text"])) {
    $textErr = "You must enter text";
  } else {
    $text = test_input($_POST["text"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><b>Enter text :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<textarea name="text" class="field-style"><?php echo $text;?></textarea>
</li>
<li>
<input type="submit" name="submit" value="Encryption" />
</li>
</ul>
</form>
<?php
if ( isset($textErr) ) {
echo '<div id="result">';
echo '<span class="error">* '.$textErr.'</span><br>';
echo '</div>';
}
echo "<p><b>Computed SHA-512 digest :</b></p>";

if ($text <> ""){
  $SHA512 = hash('sha512', $text); 
 }

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$SHA512.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>


