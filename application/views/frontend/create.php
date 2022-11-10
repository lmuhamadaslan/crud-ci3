<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Employee Form
                        <a href="<?= base_url('employee') ?>" class="btn btn-primary btn-sm float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/store') ?>" method="POST">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="" class="form-control">
                            <small><?= form_error('first_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="" class="form-control">
                            <small><?= form_error('last_name') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="phone" value="" class="form-control">
                            <small><?= form_error('phone') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" value="" class="form-control">
                            <small><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form> 
                </div>
                <div class="card-footer">
                    &copy; La Ode Muhamad Aslan
                </div>
            </div>
        </div>
    </div>
</div>