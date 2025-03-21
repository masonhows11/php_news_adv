<?php $title = 'مدیریت دسته بندی ها' ?>
<?php include(BASE_PATH.'/template/admin/layouts/header.php') ?>
<?php include(BASE_PATH.'/template/admin/layouts/subheader.php') ?>
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
                <h1>صفحه دسته بندی ها</h1>
            </div>
            <div class="row">
                <?php if (!empty($categories)): ?>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="h5 mt-2"><strong>  دسته بندی ها</strong></p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="<?= url('admin/category/create') ?>" class="btn btn-outline-primary">دسته بندی جدید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr>
                                    <td><?= $category['id'] ?></td>
                                    <td><?= $category['title'] ?></td>
                                    <td>
                                        <a href="<?= url('admin/category/changeStatus/'.$category['id']) ?>" class="btn
                                            <?= $category['status'] == 0 ? 'btn-outline-danger' : ' btn-outline-success' ?>">
                                            <?= $category['status'] == 0 ? 'غیر فعال' : 'فعال' ?>
                                        </a>
                                        <a href="<?= url('admin/category/edit/'.$category['id']) ?>" class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url('admin/category/delete/'.$category['id']) ?>" class="btn btn-outline-danger">حذف</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger">
                        اطلاعاتی ای برای نمایش وجود ندارد
                    </div>
                <?php endif ?>
            </div>


        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>

