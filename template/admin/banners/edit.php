<?php include(BASE_PATH.'/template/admin/layouts/header.php') ?>
<?php include(BASE_PATH.'/template/admin/layouts/subheader.php') ?>
<?php include(BASE_PATH.'/template/admin/layouts/sidebar.php') ?>
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">

            <div class="row">
                <h1>ویرایش بنر</h1>
            </div>
            <div class="row">
                <form action="<?= url('admin/banner/updated/'.$banner['id']) ?>"  method="post" enctype="multipart/form-data">



                    <div class="mb-3">
                        <label for="url" class="form-label">آدرس (url)</label>
                        <input name="url" id="url"  class="form-control" required>
                    </div>


                    <div class="input-group mb-3 mt-3">
                        <input type="file" name="image" class="form-control" id="image" required>
                        <label class="input-group-text" for="image">آپلود</label>
                    </div>
                    <div class="form-text text-danger">
                    </div>


                    <div class="mb-3 mt-3">
                        <button type="submit"  class="btn btn-primary">ذخیره</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</main>
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>

