<?php include VIEW . '/back/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= PUBLIC_PATH; ?>admin/index">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <!-- /.card-header -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Insert New Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="edit" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <input name="name" value="<?= $name; ?>" type="text" class="form-control" placeholder="Enter Category Name">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

    </div>


</div>
<!-- /.content-wrapper -->

<?php include VIEW . '/back/footer.php'; ?>
