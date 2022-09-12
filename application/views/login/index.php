<div class="container">
    <?php
    if ($this->session->flashdata('success')) {
        ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
    <?php
    } elseif ($this->session->flashdata('error')) {
        ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
    <?php
        }
    ?>
    <h1>Login Page</h1>
    <form action="<?php echo base_url('login-user'); ?>" method="POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" placeholder="Email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
            <?php echo form_error('email'); ?>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" placeholder="Password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
            <?php echo form_error('password'); ?>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>
</div>