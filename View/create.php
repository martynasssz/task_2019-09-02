<?php
require'../Model/Model.php';

?>
<?php require 'header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create a message</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form method="post">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" name="phone" class="form-control">
                </div>


                <div class="form-group">
                    <label for="Jobtitle">Jobtitle</label>
                    <input type="text" name="jobtitle" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Resume</label>
                    <input type="file" name="resume" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit message</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
