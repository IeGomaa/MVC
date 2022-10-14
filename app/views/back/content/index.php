<?php include VIEW . '/back/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Content</h1>
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
        <div class="card-header">
            <h3 style="margin-right: 15px;padding-top: 7px;" class="card-title">Content Table</h3>
            <a href="insert">
                <button class="btn btn-light">add new content</button>
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Cover</th>
                    <th>Main-Content</th>
                    <th>Description</th>
                    <th>Category Name</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($content as $data): ?>
                    <tr>
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['name']; ?></td>
                        <td>
                            <img width="100" height="100" src="<?= PUBLIC_PATH . 'upload/' . $data['cover']; ?>" alt="">
                        </td>
                        <td><?= $data['main_content']; ?></td>
                        <td><?= $data['description']; ?></td>
                        <td><?= $data['category_name']; ?></td>
                        <td>
                            <form action="delete" method="post">
                                <input type="hidden" name="id" value="<?= $data['id'];?>">
                                <input type="submit" value="Delete" class="btn btn-outline-danger">
                            </form>
                        </td>
                        <td>
                            <form action="update" method="post">
                                <input type="hidden" name="id" value="<?= $data['id'];?>">
                                <input type="submit" value="Update" class="btn btn-outline-primary">
                            </form>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>


</div>
<!-- /.content-wrapper -->

<?php include VIEW . '/back/footer.php'; ?>
