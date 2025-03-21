<?php $title = 'مدیریت بنرها' ?>
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
                <h1>صفحه بنرها</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="h5 mt-2"><strong>بنرهای اخیر</strong></p>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="<?= url('admin/banner/create') ?>" class="btn btn-outline-primary">بنر جدید</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if (!empty($banners)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">آدرس (url)</th>
                                <th scope="col">تصویر</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($banners as $banner): ?>
                                <tr>
                                    <td><?= $banner['id'] ?></td>
                                    <td><?= $banner['url'] ?></td>
                                    <td>
                                        <?php if (!empty($banner['image']) && file_exists(BASE_PATH . '/' . $banner['image'])): ?>
                                            <img class="img-size-64 img-thumbnail" src="<?= assets($banner['image']) ?>"
                                                 alt="post-image">
                                        <?php else: ?>
                                            <img class="img-size-64 img-thumbnail"
                                                 src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>"
                                                 alt="no image exists">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= url("admin/banner/changeStatus/" . $banner['id']) ?>"
                                           class="btn <?= $banner['status'] == 1 ? 'btn-outline-danger' : ' btn-outline-success' ?>">
                                            <?= $banner['status'] == 1 ? 'منتشر نشده' : 'منتشر شده' ?>
                                        </a>
                                        <a href="<?= url("admin/banner/edit/" . $banner['id']) ?>"
                                           class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url("admin/banner/delete/" . $banner['id']) ?>"
                                           class="btn btn-outline-danger">
                                            حذف
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-danger mt-4">
                            بنر برای نمایش وجود ندارد
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>


