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
                <h1>دسته بندی جدید</h1>
            </div>
            <div class="row">
                <form action="<?= url('admin/category/update/'.$category['id']) ?>" method="post" >

                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $category['title'] ?>">
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

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>
