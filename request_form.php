<?php 
$pageTitle = "RFQ Form";
include_once('admin/include/conn.php');

@$section = $_GET['page']; 


$err ="";

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$org =  $_POST['org'];
$project =  $_POST['project'];
$detail = $_POST['detail'];
$attachment =  $_FILES ['attachment']['name'];

$date = date("y-m-d");

if (empty($name) || empty($email) || empty($phone) || empty($detail) || empty($project)) {
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

if(empty($attachment))
{

    $sql = " INSERT INTO rfq (`name`,`org`,`phone`, `email`, `project` , `detail`, `date`, `page_section` ) VALUES ('$name', '$org', '$phone', '$email', '$project', '$detail', '$date', '$section') ";
    if($result = mysqli_query($conn, $sql ))
    {
$err = "<div class='alert alert-primary alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Success!</strong> Submited without attachment*.
  </div>
";
}
else
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}
else
{


$attachment = time().'_'.mt_rand().basename($_FILES["attachment"]['name']);
$pfim = $attachment;
$documents_url="documents/".$attachment ;
move_uploaded_file($_FILES['attachment']['tmp_name'],$documents_url);


    $sql = " INSERT INTO rfq (`name`,`org`,`phone`, `email`, `project` , `attachment`, `detail`, `date`, `page_section` ) VALUES ('$name', '$org', '$phone', '$email', '$project', '$attachment' , '$detail', '$date', '$section') ";
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

}

include_once('includes/header.php');
?>
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">RFQ Form</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="services.php"> Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">RFQ Form</li>
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

            <div class="col-12 col-lg-12">
                <div class="uza-contact-form mb-80">
                    <div class="contact-heading mb-50">

                        <h4>Request for Quote (RFQ)</h4>
                        <p>
                            In order to provide the highest quality Web site design services, we ask that you provide a
                            detailed Request for Quote (RFQ). We use your response to the RFQ to analyze your goals,
                            requirements, and expectations. This allows us to develop a specific quote to be used as the
                            foundation of your development project. In the event you have not prepared an RFQ, we have
                            provided this Online RFQ form.
                        </p>

                    </div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <?php echo $err; ?>
                        <div class="row">

                            <div class="col-lg-5" style="margin: auto;">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Full Name</strong>
                                    </label>
                                    <input style="display: inline-table;" class="form-control col-lg-8" type="text"
                                        name="name" placeholder="Name"
                                        value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Phone</strong>
                                    </label>
                                    <input style="display: inline-table;" class="form-control col-lg-8" type="text"
                                        name="phone" placeholder="Phone"
                                        value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>">
                                </div>
                            </div>

                            <div class="col-lg-5" style="margin: auto;">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Company</strong>
                                    </label>
                                    <input style="display: inline-table;" class="form-control col-lg-8" type="text"
                                        name="org" placeholder="Company"
                                        value="<?php if(isset($_POST['org'])){ echo $_POST['org']; } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Email</strong>
                                    </label>
                                    <input style="display: inline-table;" class="form-control col-lg-8" type="text"
                                        name="email" placeholder="Email"
                                        value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                                </div>
                            </div>

                            <div class="container">
                                <div class="border-line"></div>
                            </div>
                        </div>

                        <h4>Project Details</h4>

                        <br><br>

                        <div class="row">
                            <div class="col-lg-5" style="margin: auto;">

                                <div class="form-group">
                                    <label for="sel1">Project Types</label>
                                    <select class="form-control" id="sel1" name="project">
                                        <option></option>
                                        <option value="Qiuckbook Learning">Qiuckbook Learning</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Website redesign">Website redesign</option>
                                        <option value="Database Development">Database Development</option>
                                        <option value="Mobile App Development">Mobile App Development</option>
                                        <option value="Quick Learning">Quick Learning</option>
                                        <option value="ICT Solution">ICT Solution</option>
                                        <option value="Security Camera">Security Camera</option>
                                        <option value="Online Marketing">Online Marketing</option>

                                    </select>
                                    <br>

                                </div>

                            </div>

                            <div class="col-lg-5" style="margin: auto;">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Attachment</strong>
                                    </label>
                                    <input style="display: inline-table; border: none;" class="form-control col-lg-8"
                                        type="file" name="attachment">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-10" style="margin: auto;">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"
                                        style="padding-right: 15px;">
                                        <strong>Description</strong>
                                    </label>
                                    <textarea class="form-control mb-30" name="detail" rows="8" cols="80"
                                        placeholder="Description"><?php if(isset($_POST['detail'])){ echo $_POST['detail']; } ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn uza-btn btn-3 mt-15" name="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

</section>

<div class="container">
    <div class="border-line"></div>
</div>

<?php
include_once('includes/footer.php');
?>