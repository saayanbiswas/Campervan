<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Payments</title>
        <link rel="stylesheet" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body id="aboutUs">
        <?php require('partials/_nav.php');?>
        <h1 style="text-align:center">Billing and Payment</h1>
        <?php 
        if (!(isset($_SESSION["login"]) && $_SESSION["login"] ==True))
        {
            echo "<h1>Please Log in and then try again</h1>";
        }
        else{
                $Hub=$_POST['Hub'];
                $Rent_Date=$_POST['Rent_Date'];
                $Rent_Type=$_POST['Rent_Type'];
                $Renting_Hours=$_POST['Renting_Hours'];
                $Van=$_POST['Van'];
                $costMultiplier=0;
                if($Rent_Type=="Night Stay")
                    $costMultiplier=600;
                else
                    $costMultiplier=1000;

                $cost=$costMultiplier*$Renting_Hours;
        ?>

            <div id="BillingBox">
                <p class="BillStatement" >Renting Hub:<?php echo $Hub?></p>
                <p class="BillStatement">Rent date:<?php echo $Rent_Date?></p>
                <p class="BillStatement">Rent Type:<?php echo $Rent_Type?></p>
                <p class="BillStatement">Renting Hours:<?php echo $Renting_Hours?></p>
                <p class="BillStatement">Van Type:<?php echo $Van?></p>
                <p class="BillStatement">Amount to Pay:<?php echo $cost?></p>
            
                <form method="POST" id="bookform" >
                    <input type="hidden" name="Hub" value="<?php echo $Hub?>"/>
                    <input type="hidden" name="Rent_Date" value="<?php echo $Rent_Date?>"/>
                    <input type="hidden" name="Rent_Type" value="<?php echo $Rent_Type?>"/>
                    <input type="hidden" name="Renting_Hours" value="<?php echo $Renting_Hours?>"/>
                    <input type="hidden" name="Van" value="<?php echo $Van?>"/>
                    <input type="hidden" name="Cost" value="<?php echo $cost?>"/>
                    <center><button type="submit"  >Confirm and Pay</button></center>
                </form>


            </div>

<?php }?>

<script type="text/javascript">
    var frm = $('#bookform');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: 'http://localhost/Campervan/BookConfirm.php',
            data: frm.serialize(),
            success: function (data) {

                txt = $("<h3></h3>").text(data);
                $("body").append(txt); 
                                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    });
</script>
    </body>
</html>