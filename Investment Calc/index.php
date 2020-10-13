<?php
require_once 'Values.php';

?>

<html lang="en">
<body>
<h1>This is a Investment Calculator</h1>
<form action="/" method="post">
    <label for="amount">Amount</label>
    <input type="text" name="amount" id="amount"/>

    <label for="duration">Duration in years</label>
    <input type="text" name="duration" id="duration"/>

    <label for="percentage">Percentage per year</label>
    <input type="text" name="percentage" id="percentage"/>

    <button type="submit">Submit</button>

</form>
</body>
</html>
<?php
$value = new Values($_POST['amount'], $_POST['duration'], $_POST['percentage']);
?>
<h2><?php  return $value->interest() . PHP_EOL ?></h2>
