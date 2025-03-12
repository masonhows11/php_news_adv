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
                <h1>ویرایش منو</h1>
            </div>
            <div class="row">
                <form method="post" action="<?= url('admin/menu/update/' . $menu['id']) ?>">

                    <div class="mb-3">
                        <label for="name" class="form-label">عنوان</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $menu['name'] ?>">
                    </div>
                    <div class="form-text text-danger">
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">آدرس</label>
                        <input name="url" id="url" class="form-control" value="<?= $menu['url'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">منو والد</label>
                        <select id="parent_id" class="form-control" name="parent_id">
                         <!--   <?php /*if (!empty($menus)): */?>
                                <?php /*foreach ($menus as $menu): */?>
                                    <option value="<?php /*= $menu['id'] */?>" <?php /*= $menu['parent_id'] == $menu['id'] ? 'selected' : '' */?>><?php /*= $menu['name'] */?></option>
                                <?php /*endforeach; */?>
                            --><?php /*endif; */?>

                            <option value="<?php if($menu['parent_id'] == '') echo 'selected' ?>">منو اصلی</option>

                            <?php if (!empty($menus)): ?>
                                <?php foreach ($menus as $selectedMenu): ?>
                                    <?php if($menu['id'] != $selectedMenu['id']) ?>
                                    <option value="<?= $selectedMenu['id'] ?>" <?= $menu['parent_id'] == $selectedMenu['id'] ? 'selected' : ''?> >

                                    <?= $selectedMenu['name'] ?>

                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>


                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>



