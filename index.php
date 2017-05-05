<?php
require('header.php');
require('nav.php');
require('pooks_pick.php');
require('center_panel.php');
require('twitfeed.php');
?>
<!-- short review tabs-->
<div class="container-fluid shorts" id="shorts">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <img src=""  alt="">
                            <!--Reviewer avi PICTURE LINE ABOVE-->
                            <!--MOVIE TITLE GOES HERE -->
                            <!--Rating img lin below-->
                            <img src="" width="3%">

                    </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <!--movie poster line  below-->
                    <img src="" alt="POSTER" width="15%">
                    <p class="collapsetext"><!--SHORT REVIEWS HERE!!!!!!!!!!!!!!!!!!!!!-->
                        <a href=""><!--====++link to full review++===-->
                            <h4>Full Review</h4>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php');?>
</body>

</html>
