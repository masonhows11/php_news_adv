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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="h5 mt-2"><strong>مقالات اخیر</strong></p>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="<?= url('admin/post/create') ?>" class="btn btn-outline-primary">مقاله جدید</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if (!empty($posts)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">توضیحات</th>
<!--                                <th scope="col">دسته بندی</th>-->
<!--                                <th scope="col">تصویر</th>-->
                                <th scope="col">نویسنده</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($posts as $post): ?>
                                <tr>
                                    <td><?= $post['id'] ?></td>
                                    <td><?= $post['title'] ?></td>
                                    <td><?= substr($post['body'],0,21).'...' ?></td>
                                    <!--                                    <td>--><?php //= $post['category_name'] ?><!--</td>-->
                                    <!-- <td>
                                        <?php /*if (!empty($post->image)): */?>
                                            <?php /*if (file_exists(BASE_PATH . "uploads/posts/" . $post->image)): */?>
                                                <img class="img-size-64 img-thumbnail" src="<?php /*= url("uploads/posts/" . $post->image) */?>" alt="">
                                            <?php /*endif; */?>
                                        <?php /*else: */?>
                                            <img src="<?php /*= url('admin/assets/no-picture-available.jpg') */?>" alt="no image exists">
                                        <?php /*endif; */?>
                                    </td>-->
                                    <td><?= $post['author'] ?></td>
                                    <td>
                                        <a href="<?= url("admin/post/changeStatus/".$post['id']) ?>"
                                           class="btn <?= $post['status'] == 0 ? 'btn-outline-danger' : ' btn-outline-success' ?>">
                                            <?= $post['status'] == 0 ? 'منتشر نشده' : 'منتشر شده' ?>
                                        </a>
                                        <a href="<?= url("admin/posts/edit/".$post['id']) ?>" class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url("admin/posts/delete/".$post['id']) ?>" class="btn btn-outline-danger">
                                            حذف
                                        </a>
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


