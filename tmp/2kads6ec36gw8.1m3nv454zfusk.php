<form action="<?php echo $BASE.'/admin/login'; ?>" method="post" class="center-x form-login" id="loginForm">

    <h1 class="f-header"><?php echo $page_head; ?></h1>
    <div class="f-row">
        <span class="f-label"><i class="fa fa-user"></i> Name</span>
        <input type="text" id="name" name="name" placeholder=" User name" class="f-input" autofocus/>
    </div>
    <div class="f-row">
        <span class="f-label"><i class="fa fa-key"></i> Password</span>
        <input type="password" id="email" name="password" placeholder=" Password" class="f-input" />
    </div>

    <div class="f-row f-control">
        <button type="submit" class="f-btn "><i class="icon-edit icon-black"></i> Login</button>
    </div>
</form>
<script>

/*
* login form handler
*/
window.onload = function () {
    $('#loginForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type:'post', url: 'admin/login',
            data: $(this).serialize(),
            success: function (r) {
                if (r.isSuccess) {
                    window.location.assign('admin/dashboard');
                }
            }
        });
    });
};
</script>
