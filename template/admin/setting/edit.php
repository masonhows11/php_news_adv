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
                <h1>ویرایش تنظیمات</h1>
            </div>
            <div class="row">
                <form action="<?= url('admin/setting/update') ?>"  method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $setting['title'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="keywords" class="form-label">کلمات کلیدی</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" value="<?= $setting['keywords'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">توضیحات</label>
                        <textarea name="description" id="description" rows="5" cols="5" class="form-control"><?= $setting['description'] ?></textarea>
                    </div>



                    <div class="input-group mb-3 mt-3">
                        <input type="file" name="logo" class="form-control" id="image" >
                        <label class="input-group-text" for="image">آپلود لوگو</label>
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <?php if (!empty($setting['logo']) && file_exists(BASE_PATH.'/'.$setting['logo']) ): ?>
                            <img class="img-size-64 img-thumbnail" src="<?=  assets($setting['logo']) ?>" alt="setting-image">
                        <?php else: ?>
                            <img class="img-size-64 img-thumbnail" src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>" alt="no image exists">
                        <?php endif; ?>
                    </div>


                    <div class="input-group mb-3 mt-3">
                        <input type="file" name="icon" class="form-control" id="image" >
                        <label class="input-group-text" for="image">آپلود آیکن</label>
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <?php if (!empty($setting['icon']) && file_exists(BASE_PATH.'/'.$setting['icon']) ): ?>
                            <img class="img-size-64 img-thumbnail" src="<?=  assets($setting['icon']) ?>" alt="setting-image">
                        <?php else: ?>
                            <img class="img-size-64 img-thumbnail" src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>" alt="no image exists">
                        <?php endif; ?>
                    </div>



                    <div class="mb-3 mt-3">
                        <button type="submit"  class="btn btn-primary">ذخیره</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>




