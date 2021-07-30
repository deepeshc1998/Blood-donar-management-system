<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blood Donor Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
    <div class="container">
        <h1 class="my-4"style="color: red">Welcome to Blood Donor Management System</h1>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Donating Blood is Good for the Donor</h4>

                        <p class="card-text" style="padding-left:2%">Blood donation is not only good for the receiver, but also for the donor. Donating blood from time to time avoids the development of medical conditions like hemochromatosis (a condition occurring due to excess absorption of iron by the body), has anti-cancer benefits, helps maintain a healthy heart and liver, aids in weight loss, and activates blood cell production. If you want to donate and store your blood for your own future medical emergency, it’s called autologous donation. Consult your doctor if you want to become an autologous donor. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Why donation matters.?</h4>

                        <p class="card-text" style="padding-left:2%">Just 1 donation can save up to 3 lives.According to the World Health Organisation (WHO), India runs short of two million units of blood every year, despite our huge population. An adult has ten units of blood in their body, and only one unit is given during a donation. One donation can save almost three lives. Blood donation is considered a global act of charity and every person capable of donating blood must do so </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Donation is A Safe Process</h4>

                        <p class="card-text" style="padding-left:2%">All donated blood is tested for HIV, hepatitis B and C, syphilis and other infectious diseases before it can be transfused to patients. A sterile needle is used only once for each donor and then discarded. Blood donation is a simple four-step process: registration, medical history and mini-physical, donation and refreshments. Every blood donor is given a mini-physical, checking the donor's temperature, blood pressure, pulse and haemoglobin to ensure it is safe for the donor to give blood </p>
                </div>
            </div>
        </div>

        <h2>Some of the Donar</h2>

        <div class="row">
                   <?php
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donors.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
            <hr>
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-primary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>

  <?php include('includes/footer.php');?>
</body>

</html>
