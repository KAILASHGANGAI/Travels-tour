<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 20) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-orange');
        } else {
            navbar.classList.remove('bg-orange');
            navbar.classList.add('bg-transparent');
        }
    };
</script>
