<?php include(BASE_PATH . '/template/admin/layouts/header.php') ?>

<?php include(BASE_PATH . '/template/admin/layouts/subheader.php') ?>


<!--begin::Sidebar-->
<?php include(BASE_PATH . '/template/admin/layouts/sidebar.php') ?>

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="h5 mt-2"><strong>تنظیمات سایت</strong></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if (!empty($settings)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">توضیحات</th>
                                <th scope="col">کلمات کلیدی</th>
                                <th scope="col">لوگو</th>
                                <th scope="col">ایکن</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($settings as $setting): ?>
                                <tr>
                                    <td><?= $setting['id'] ?></td>
                                    <td><?= $setting['title'] ?></td>
                                    <td><?= substr($setting['description'], 0, 31) . '...' ?></td>
                                    <td><?= $setting['keywords'] ?></td>
                                    <td>
                                        <?php if (!empty($setting['logo']) && file_exists(BASE_PATH . '/' . $setting['logo'])): ?>
                                            <img class="img-size-64 img-thumbnail" src="<?= assets($setting['logo']) ?>"
                                                 alt="setting-image">
                                        <?php else: ?>
                                            <img class="img-size-64 img-thumbnail"
                                                 src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>"
                                                 alt="no image exists">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($setting['icon']) && file_exists(BASE_PATH . '/' . $setting['icon'])): ?>
                                            <img class="img-size-64 img-thumbnail" src="<?= assets($setting['icon']) ?>"
                                                 alt="setting-image">
                                        <?php else: ?>
                                            <img class="img-size-64 img-thumbnail"
                                                 src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>"
                                                 alt="no image exists">
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="<?= url("admin/setting/edit/" . $setting['id']) ?>" class="btn btn-outline-secondary">ویرایش</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-danger mt-4">
                            مقاله ای برای نمایش وجود ندارد
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>



