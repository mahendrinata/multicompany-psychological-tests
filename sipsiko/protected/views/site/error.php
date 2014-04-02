<div class="container-fluid" id="wrapper-header">
    <div id="content" class="container clearfix">
        <nav id="page-title" >
            <h1>Error <?php echo $code; ?></h1>
        </nav>
    </div>
</div>
<div id="content" class="container clearfix">
    <div class="shortcodes">
        <h1 class="fourofour"><?php echo $code; ?></h1>
        <h2 class="fourofour"><?php echo CHtml::encode($message); ?></h2>
        <br>
        <div id="fourofour">
            <a href="index.html" class="btn black">Back To Home</a>
            <a href="#" class="btn black">View SiteMap</a>
        </div>
    </div>
</div>