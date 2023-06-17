<?php  
$pageTitle = "Contact";

$err ="";
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$org =  $_POST['org'];
$detail = $_POST['detail'];
$date = date("y-m-d");

if (empty($name) || empty($email) || empty($phone) || empty($detail)) {
$err = "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Warning!</strong>  Field is empty*.
  </div>
";
}
else
{
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$err = "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Warning!</strong>  Wrong email*.
  </div>
";
    }
else
{
    $sql = " INSERT INTO contact (`name`,`org`,`phone`, `email`, `detail`, `date` ) VALUES ('$name', '$org', '$phone', '$email', '$detail', '$date') ";
    if($result = mysqli_query($conn, $sql ))
    {
$err = "<div class='alert alert-primary alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Success!</strong> Submited*.
  </div>
";
}
else
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}

}

}

include_once('includes/header.php');
?>
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-bg-curve">
        <img src="./img/core-img/curve-5.png" alt="">
    </div>
</div>
<section class="uza-contact-area section-padding-80">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-8">
                <div class="uza-contact-form mb-80">

                    <?php 
echo "$err";
 ?>

                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="name" placeholder="Name"
                                        value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="Text" class="form-control mb-30" name="email" placeholder="Email"
                                        value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="phone" placeholder="Phone"
                                        value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="org" placeholder="Organization"
                                        value="<?php if(isset($_POST['org'])){ echo $_POST['org']; } ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control mb-30" name="detail" rows="8" cols="80"
                                        placeholder="Message">
    <?php if(isset($_POST['detail'])){ echo $_POST['detail']; } ?>
</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn uza-btn btn-3 mt-15" name="submit">Contact Us</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="contact-sidebar-area mb-80">
                    <div class="single-contact-card mb-50">
                        <h4>Email Us</h4>
                        <h6><a href="mailto:info@bbarez.com">info@bbarez.com</a><br></h6>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<section class="uza-newsletter-area">
    <div class="container">
        <div class="border-line"></div>
    </div>
</section>
<?php
include_once('includes/footer.php');
?>