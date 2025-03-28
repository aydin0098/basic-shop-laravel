<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="/admin/src/plugins/src/waves/waves.min.js"></script>
<script src="/admin/layouts/vertical-dark-menu/app.js"></script>
<script src="/admin/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
<script src="/admin/src/plugins/src/sweetalerts2/custom-sweetalert.js"></script>
<script>
   window.addEventListener('success', function($event) {
       const Toast = Swal.mixin({
           toast: true,
           position: 'bottom',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
       })

       Toast.fire({
           icon: 'success',
           title: $event.detail
       })
    })
</script>
@yield('scripts')
