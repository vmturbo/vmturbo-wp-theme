<?php
/**
 * Template Name: Temporary: Public Cloud Guide
 */
?>
<style>
body {
  background: #222 url('http://cdn.vmturbo.com/wp-content/uploads/2016/05/plex-dark.jpg') no-repeat center center;
  background-size:cover;
  }
#home-multi {
  padding:3em 1.5em;
}
@media all and (max-width: 480px) {
  #home-multi {
    padding:1em 1.5em;
  }
}
@media all and (max-width: 750px) {
  .public-cloud-content {
    margin-top: -3.2em !important;
  }
}
#home-multi p {
  color:#eee;
  line-height:1.6em;
}
#home-multi img {
  margin: 0 auto;
}
#home-multi .btn-vmt {
  margin-top:1em;
}
.mktoInline .modal-dialog {
  margin-top:100px !important;
}
.public-cloud-content h4 {
  font-weight: 600;
  color:white;
  font-size: 1.3em;
}
.overall-content{
  padding-top: 5em;
}
.list{
  margin-top:2.5em;
}
ol{
  color: #fff;
  text-align: left;
  margin-left: -2em;
  line-height: 1.8em;
}
li {
  padding-left:0.3em;
}
.sub-bullets{
  list-style-type: disc;
  margin-left: -1.5em;
}
</style>

<div id="home-multi" class="container">
  <div class="row">
    <div class="col-sm-12">
      <img src="http://cdn.vmturbo.com/wp-content/uploads/2016/05/pcf-guide.png" class="img-responsive" alt="Public Cloud Guide" title="Public Cloud Guide" style="margin: 0 auto;" />
    </div>
  </div>
  <div class="row overall-content">
    <div class="col-sm-6">
      <img src="http://cdn.vmturbo.com/wp-content/uploads/2016/05/public-cloud-guide-ipad.png" class="img-responsive hidden-xs" />
    </div>
    <div class="col-sm-6">
	    <div class="public-cloud-content">
	    	<?php the_content(); ?>
	    </div>
    </div>
  </div>
</div>
