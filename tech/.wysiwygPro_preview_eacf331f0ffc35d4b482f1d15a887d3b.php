<?php
if ($_GET['randomId'] != "GxvWLev9bCZceK2neHIxZGcdNy1MH1beFDQEEykD1sxNekp4YjDB94PMCJ3BFzwJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
