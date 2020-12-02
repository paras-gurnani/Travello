<?php require_once("init.php"); ?>
<?php require_once ("session.php"); ?>



<?php
$message = '';
if (isset($_POST['reg_submit'])) {
    $register = new Register();
    $adminName = $register->username = $_POST['username'];
    $email = $register->email = $_POST['email'];
    $password = $register->password = $_POST['password'];
    $hash = $register->hash = md5(rand(0, 10));
    $active = $register->active = 0;
    //print_r($register);
    $register->save();
    $registered = 1;
} else {
    $registered = 0;
}

?>

    <div id="myReg" class="modal fade">
        <div class="modal-dialog modal-sm  ">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="stopmodal_2()" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration Page</h4>
                </div>
                <div class="modal-body">

                    <form id="signupform" method="post" action="">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" id="confirm_password" name="confirmPassword"
                                   placeholder="Confirm Password" class="form-control">
                        </div>
                        <!--<p id="warning"></p>-->
                        <div class="form-group">
                            <input type="submit" name="reg_submit" value="Registration"
                                   class="form-control btn btn-primary">
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>

<script>
$(document).ready(function() {

// process the form
$('#signupform').submit(function(event) {

    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
if($('input[name=password]').val()==$('input[name=confirmPassword]').val())
{
    var formData = {
        'name'              : $('input[name=username]').val(),
        'email':$('input[name=email]').val(),
        'password'    : $('input[name=password]').val()
    };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'action.php?action=signup', // the url where we want to POST
        data        : formData, // our data object
        success     :function(result){
            console.log(result);
        }
    });

  }
  else
  {
      console.log("Password doesnt match");
  }  // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
});

});
</script>

