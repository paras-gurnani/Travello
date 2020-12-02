<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js"></script>

</head>
<body style="background-color: #E1E1E1;">
<!--Navbar start-->
<?php require_once("includes/navigation.php"); ?>
<!-- /.navbar -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="container thumbnail" style=" background-color: white; height: 1500px">
        <!--  <div class="cover">-->
        <img src="images/usercov/<?php echo $user->cov_image; ?>" style=" height: 300px;width: 100% " alt="user_cover">
        <!-- <div style="padding-top: 60px; color: black;">-->
        <h3 style="color: darkslateblue;" class="text-center">Change Your Cover Photo</h3>
        <label class="custom-file-upload btn btn-primary text-center " style="margin:20px 530px; ">
            <input class="input-button" type="file" name="cover_image" id="files"><i
                    class="glyphicon glyphicon-picture"></i>
            Upload
        </label>
        <!-- </div>-->
        <!--  </div>-->  <!--cover div-->


        <br>
        <br>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="text-center">
                    <img src="images/users/<?php echo $user->user_image; ?>" class="avatar img-circle img-thumbnail"
                         alt="user_picture"
                         style="height:300px; width:400px; border-top-right-radius:10px; border-bottom-left-radius: 10px; ">
                    <h6>Change Your Profile Photo</h6>
                    <label class="custom-file-upload btn btn-primary  ">
                        <input class="input-button" type="file" name="image"><i
                                class="glyphicon glyphicon-picture"></i>
                        Upload
                    </label>
                </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-6 personal-info">

                <h3 style="padding-left: 90px">Edit Your Information</h3>
                <hr>
                <br>
                <div class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Full Name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="fullname" value="<?php echo $user->fullname; ?>"
                                   type="text"
                                   placeholder="Type your first name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Occupation:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="occupation" value="<?php echo $user->occupation; ?>"
                                   type="text" placeholder="Type your occupation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Gender:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select name="gender" class="form-control gender">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" value="<?php echo $user->email; ?>" type="text" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Phone number:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="contact" value="<?php echo $user->mobile_no; ?>"
                                   type="text"
                                   placeholder="Type phone number">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" value="<?php echo $user->username; ?>" type="text" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="password" id="password"
                                   value="<?php echo $user->password; ?>" type="password"
                                   placeholder="Type password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input class="form-control" id="confirm_password" value="<?php echo $user->password; ?>"
                                   type="password"
                                   placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nationality</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="nationality" value="<?php echo $user->nationality; ?>"
                                   type="text" placeholder="Type country name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Address:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="address" value="<?php echo $user->address; ?>" type="text"
                                   placeholder="Type your city name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Bio:</label>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="bio" rows="3"><?php echo $user->bio; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input class="btn btn-primary" name="save" value="Save Changes" type="submit">
                            <span></span>
                            <input class="btn btn-default" name="cancel" value="Cancel" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</div>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-col">
                    <div href="../index.php" class="logofooter">IIUC SQL INJECTORS</div>

                    <p><i class="fa fa-map-pin"></i> Chittagong, Bangladesh</p>
                    <p><i class="fa fa-phone"></i> Phone (Bd) : +880 1521487511</p>
                    <p><i class="fa fa-envelope"></i> E-mail : iiucbees@developer.com</p>

                </div>
                <div class="col-md-2 col-sm-6 footer-col">

                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h6 class="heading7">LATEST POST</h6>
                    <div class="post">
                        <?php foreach ($allBlogPost as $singlePost) {
                    $singleUserId = $singlePost->user_id;
                    //var_dump($singleUserId);
                    //$singleUserInfo = User::find_by_id($singleUserId);
                    //var_dump($singleUserInfo);

                    ?>
                        <p><a style="text-decoration: none; text-transform: capitalize;color: #539684;"
                                href="blog/viewSinglePost.php?user_id=<?php echo $singlePost->user_id; ?>&post_id=<?php echo $singlePost->id ?>">
                                <h4 style="margin:0;"><?php echo $singlePost->blog_title; } ?></h4>
                            </a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h6 class="heading7">Social Media</h6>
                    <ul class="footer-social">
                        <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!--Footer End-->
{% comment %} <?php require_once("updateProfile.php"); ?> {% endcomment %}
</body>