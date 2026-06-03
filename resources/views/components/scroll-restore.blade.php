<script>
    window.addEventListener('load', function() {
        const scrollPos = localStorage.getItem('scrollPos');
        if (scrollPos) {
            window.scrollTo(0, parseInt(scrollPos));
            localStorage.removeItem('scrollPos');
        }
    });
</script>
