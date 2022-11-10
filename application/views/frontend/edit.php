<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Edit Employee Form
                        <a href="<?= base_url('employee') ?>" class="btn btn-primary btn-sm float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/update/' . $employee->id); ?>" method="POST">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="<?= $employee->first_name; ?>" class="form-control">
                            <small><?= form_error('first_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="<?= $employee->last_name; ?>" class="form-control">
                            <small><?= form_error('last_name') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="phone" value="<?= $employee->phone; ?>" class="form-control">
                            <small><?= form_error('phone') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="Email" name="email" id="email" value="<?= $employee->email; ?>" class="form-control">
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