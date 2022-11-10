<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <h5>
                        Employee Data
                        <a href="<?= base_url('employee/add') ?>" class="btn btn-primary btn-sm float-right">Add Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($employee)) {
                                echo '<tr><td colspan="6" class="text-center">No Data</td></tr>';
                            } else {
                                $no = 1;
                                foreach ($employee as $row) { ?>
                                    <tr>
                                        <td><?= $no;
                                            $no++; ?></td>
                                        <td><?= $row->first_name; ?></td>
                                        <td><?= $row->last_name; ?></td>
                                        <td><?= $row->phone; ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td>
                                            <a href="<?= base_url('employee/edit/' . $row->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <button value="<?= $row->id; ?>" class="btn btn-danger btn-sm confirm-delete">Delete</button>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    &copy; La Ode Muhamad Aslan
                </div>
            </div>
        </div>
    </div>
</div>