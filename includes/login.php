

<div class="modal fade" id="myLogin" class="myLogin" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Page</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="loginform" >
                    <div class="form-group">
                        <input type="text" id="email" name="username" placeholder="Username or Email" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="password" placeholder="Password" class="form-control" value="" required>
                    </div>
                    <div  class="form-group">
                        <input type="checkbox" name="remember" value="1"> Remember Me<br></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="modal-footer ">
                <button id="register_lost_btn" type="button" class="btn btn-link"  data-toggle="modal" data-target="#myLostPass">Lost Password?
                </button>
                <button id="register_login_btn" type="button" class="btn btn-link" data-toggle="modal" data-dismiss="modal" data-target="#myReg" data-target="#myLogin" >Register
                </button>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<?php require_once("registration.php"); ?>

<?php  require_once("lostpass.php"); ?>

<script>
$(document).ready(function() {

// process the form
$('#loginform').submit(function(event) {

    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
    var formData = {
        'name'              : $('input[name=username]').val(),
        'password'    : $('input[name=password]').val()
    };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'action.php?action=login', // the url where we want to POST
        data        : formData, // our data object
        success     :function(result){
            console.log(result);
        }
    });

    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
});

});
</script>