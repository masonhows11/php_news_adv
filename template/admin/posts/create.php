<?php include(BASE_PATH.'/template/admin/layouts/header.php') ?>

<?php include(BASE_PATH.'/template/admin/layouts/subheader.php') ?>


<!--begin::Sidebar-->
<?php include(BASE_PATH.'/template/admin/layouts/sidebar.php') ?>

<!--end::Sidebar-->

<!--end::App Main-->

<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
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
                <h1>صفحه پست ها</h1>
            </div>
            <div class="row">
                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-text text-danger">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">توضیحات</label>
                        <textarea name="body" rows="5" cols="5" class="form-control"></textarea>
                    </div>
                    <div class="form-text text-danger">
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">نویسنده</label>
                        <input type="text" name="author" class="form-control" id="author">
                    </div>
                    <div class="form-text text-danger">
                    </div>

                    <label for="category_id" class="form-label">دسته بندی</label>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option value="">یک دسته بندی انتخاب کنید</option>
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->id ?>"> <?= $category->title ?> </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <div class="form-text text-danger">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">آپلود</label>
                    </div>
                    <div class="form-text text-danger">
                    </div>


                    <div class="mb-3 mt-3">
                        <button type="submit" name="create" class="btn btn-primary">ذخیره</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>



