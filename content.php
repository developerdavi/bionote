<div class="ui container">
    <?php    
        switch(page) {
            case 'blog':
                include 'blog.html';
                break;
            case 'podcasts':
                include 'podcasts.html';
                break;
            default:
                break;
        }
    ?>
<script>
    // alert('lol')
</script>
</div>