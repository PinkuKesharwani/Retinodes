<!DOCTYPE html>
<html lang="en">
<head>
    <title>ECG HR SOLUTION | SERVICES</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">

    </style>
</head>
<body>
<?php include_once("master/header.php") ?>
<section class="contact_banner about_banner">
    <div class="about_caption">
        <h1>Jobs Available</h1>
        <h5>We Are Team Of Professionals</h5>
    </div>
</section>
<section class="main_service_block">
    <div class="container">
        <div class="row">
            <div class="center_heading margin_bottom30">
                <h2 class="small-title">Jobs</h2>
                <div class="main_heading_design center_heading"></div>
                <p class="center_big_txtp">We are worked into every industry for every position in pan India. If you are candidate and looking
                    for the placement as per your skills, this is the right place where you can share your profile with
                    your skills and expected industry choices. We can share your profile with our clients and make you
                    place in your expected industries in reputed company.</p>
            </div>
            <div class="col-sm-12 res_padding0">
                <iframe id="iframe-container-1" width="100%" frameborder="0" height="300"
                        src="https://widget.recooty.com/openings.php?key=5ba0ee4f43b0bc940f2307644198bbb4a63320834874c"></iframe>
                <script>
                    window.addEventListener('message', function (e) {
                        var data = e.data.split('-'),
                            scroll_height = data[0],
                            iframe_id = data[1];
                        if (iframe_id == 'iframe1')
                            document.getElementById('iframe-container-1').style.height = scroll_height + 'px';
                    }, false);
                </script>
            </div>
        </div>
</section>

<?php include_once("master/footer.php") ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.top_menu_ul li').removeClass('active');
        $('#nav_jobs').addClass('active');
    });
</script>
</body>
</html>
