<html>
<?php require_once("../includes/head.php"); ?>
<body>

<?php
require_once("../includes/braintree_init.php");
require_once("../includes/header.php");
if (isset($_GET["nonce"])) {
    $nonce = $_GET["nonce"];

    $header = "Sweet Success!";
    $icon = "success";
    $message = "Your nonce is below. Please note that every nonce is use once.";
}
?>

<div class="">
    <div class="nonce container">
        <div class="content">
            <div class="icon">
                <img src="/images/<?php echo($icon)?>.svg" alt="">
            </div>

            <h1><?php echo($header)?></h1>
            <section>
                <p><?php echo($message)?></p>
            </section>
            <section>
                <h3><?php echo($nonce)?></h3>
            </section>
            <section>
                <a class="button primary back" href="/index.php">
                    <span>Test Another Transaction</span>
                </a>
            </section>
        </div>
    </div>
</div>


</body>
</html>
