<footer class="app-footer">
    <div class="float-end d-none d-sm-inline">پنل ادمین</div><strong>
        Copyright &copy; 1403 - <?= date('Y') ?>
        <a href="https://adminlte.io" class="text-decoration-none">خبرنامه</a>.
    </strong>
   تمام حقوق محفوظ است

</footer>
</div>
<script src="<?= assets('public/admin_assets/js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= assets('public/admin_assets/js/overlayscrollbars.browser.es6.min.js') ?>" crossorigin="anonymous"></script>
<script src="<?= assets('public/admin_assets/js/popper.min.js') ?>"  crossorigin="anonymous"></script>
<script src="<?= assets('public/admin_assets/js/bootstrap.bundle.min.js') ?>"  crossorigin="anonymous"></script>
<script src="<?= assets('public/admin_assets/js/adminlte.js') ?>"></script>
<script src="<?= assets('public/admin_assets/plugins/Persian_Date_Picker/persian-date.min.js') ?>"></script>
<script src="<?= assets('public/admin_assets/plugins/Persian_Date_Picker/persian-datepicker.min.js') ?>"></script>
<script src="<?= assets('public/admin_assets/plugins/Ckeditor/ckeditor.js') ?>"></script>
<script>
    $(document).ready(function (){
        CKEDITOR.replace('summary');
        CKEDITOR.replace('body');

        $("#published_at_view").persianDatepicker({
            toolbox:{
                calendarSwitch: {
                    enabled:true
                }
            },timePicker: { // enable time to set new time h/m/s
              enabled: true
            },
            observer: true,
            format: 'YYYY-MM-DD HH:mm:ss',
            altField: '#published_at'

        })
    })
</script>

<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
</body>
</html>
