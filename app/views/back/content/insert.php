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
        <!-- /.card-header -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Insert New Content</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="checkData" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Content Name">
                    </div>

                    <div class="form-group">
                        <label>Main-Content</label>
                        <input name="mainContent" type="text" class="form-control" placeholder="Enter Content Main Content">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Cover</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="cover" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6" data-select2-id="44">
                        <div class="form-group" data-select2-id="43">
                            <label>Category</label>
                            <select name="category" class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id']; ?>" data-select2-id="14">
                                    <?= $category['name']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>

    </div>


</div>
<!-- /.content-wrapper -->

<?php include VIEW . '/back/footer.php'; ?>
