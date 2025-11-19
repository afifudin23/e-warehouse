<!-- jQuery -->
<script data-navigate-once src="{{ asset('adminlte3/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script data-navigate-once src="{{ asset('adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script data-navigate-once src="{{ asset('adminlte3/dist/js/adminlte.min.js') }}"></script>

<script>
    document.addEventListener("livewire:navigate", () => {
        // Reinitialize AdminLTE treeview
        $('[data-widget="treeview"]').Treeview('init');
    });
</script>
