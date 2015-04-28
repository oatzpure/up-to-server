<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
Router::connect('/', array('controller' => 'users', 'action' => 'login'));
?>
<!DOCTYPE html>
<html>
<head>

    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initialscale=1,
maximum-scale=1, user-scalable=no">
    <title><?php echo $title_for_layout; ?></title>
    <?php
    echo $this->Html->css('bootstrap.min.css');
    echo $this->Html->css('style.css');
    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
    echo $this->Html->script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
</head>
<body>
<!-- layout in cake-->
<div class="container" style="margin-top:1em">

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
    <?php
    echo $this->Html->script('jquery.min.js');
    echo $this->fetch('script');
    ?>
</div>
<!--end layout in cake-->
<div class="terms">
    <center>© 2015 PABO Webtechnology Group . All rights reserved.</center>

</div>
</body>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    var canPass = false;

    function checkPass(){


        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        var message = document.getElementById('confirmMessage');
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        if(pass1.value == pass2.value && pass1.value.length > 1 && pass1.value.length < 9){
            canPass = true;
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            canPass = false;
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords do not match or wrong length !";
        }
    }
    function verifyPass(){
        if (canPass == false){
            alert("Please check your password");
            return false;
        } else {
            document.getElementById('add-account-form').submit();
            return true;
        }
    }

</script>
</html>
