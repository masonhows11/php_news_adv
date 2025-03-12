<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="#" class="brand-link">
            <img src="<?= assets('public/admin_assets/assets/img/AdminLTELogo.png') ?>"
                 alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">خبر نامه</span>  </a>  </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                           داشبورد
                        </p>
                    </a>
                   <!-- <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                <p>داشبورد v1</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>داشبورد v2</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>داشبورد v3</p>
                            </a> </li>
                    </ul>-->
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                           منو تست
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>منو تست یک</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>منو تست دو</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>منو تست سه</p>
                            </a> </li>
                    </ul>
                </li>


                <li class="nav-header">منو</li>
                <li class="nav-item"> <a href="<?= url('admin/users') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>کاربران</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="<?= url('admin/category') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>دسته بندی ها</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="<?= url('admin/posts') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>پست ها</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="<?= url('admin/comments') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>دیدگاه ها</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="<?= url('admin/banners') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>بنرها</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="<?= url('admin/menus') ?>" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>منوها</p>
                    </a>
                </li>


            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
