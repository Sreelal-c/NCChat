<?php 
include "include/header.php"; 
if(isset($_GET['profileid'])) {
    list($id,$name,$email,$gender,$status,$photo) = $user->getuserinfo($_GET['profileid']);
  }
?>

<style type="text/css">
.header {
  background-color: #0075b9;
  color: white;
}
.title{
    color: white;
}
.card {
  border-radius: 6px;
  box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
  background-color: #FFFFFF;
  color: #252422;
  margin-bottom: 20px;
  position: relative;
  z-index: 1; }
  .card .image {
    width: 100%;
    overflow: hidden;
    height: 260px;
    border-radius: 6px 6px 0 0;
    position: relative;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d; }
    .card .image img {
      width: 100%; }
  .card .content {
    padding: 15px 15px 10px 15px; }
  .card .header {
    padding: 20px 20px 0; }
  .card .description {
    font-size: 16px;
    color: #66615b; }
  .card h6 {
    font-size: 12px;
    margin: 0; }
  .card .category,
  .card label {
    font-size: 14px;
    font-weight: 400;
    color: #9A9A9A;
    margin-bottom: 0px; }
    .card .category i,
    .card label i {
      font-size: 16px; }
  .card label {
    font-size: 15px;
    margin-bottom: 5px; }
  .card .title {
    margin: 0;
    color: #d5e0e0;
    font-weight: 300; }
  .card .avatar {
    width: 50px;
    height: 50px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px; }
  .card .footer {
    padding: 0;
    line-height: 30px; }
    .card .footer .legend {
      padding: 5px 0; }
    .card .footer hr {
      margin-top: 5px;
      margin-bottom: 5px; }
  .card .stats {
    color: #a9a9a9;
    font-weight: 300; }
    .card .stats i {
      margin-right: 2px;
      min-width: 15px;
      display: inline-block; }
  .card .footer div {
    display: inline-block; }
  .card .author {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase; }
  .card .author i {
    font-size: 14px; }
  .card.card-separator:after {
    height: 100%;
    right: -15px;
    top: 0;
    width: 1px;
    background-color: #DDDDDD;
    content: "";
    position: absolute; }
  .card .ct-chart {
    margin: 30px 0 30px;
    height: 245px; }
  .card .table tbody td:first-child,
  .card .table thead th:first-child {
    padding-left: 15px; }
  .card .table tbody td:last-child,
  .card .table thead th:last-child {
    padding-right: 15px; }
  .card .alert {
    border-radius: 4px;
    position: relative; }
    .card .alert.alert-with-icon {
      padding-left: 65px; }
  .card .icon-big {
    font-size: 3em;
    min-height: 64px; }
  .card .numbers {
    font-size: 2em;
    text-align: right; }
    .card .numbers p {
      margin: 0; }
  .card ul.team-members li {
    padding: 10px 0px; }
    .card ul.team-members li:not(:last-child) {
      border-bottom: 1px solid #F1EAE0; }


.card-user .image {
  border-radius: 8px 8px 0 0;
  height: 150px;
  position: relative;
  overflow: hidden; }
  .card-user .image img {
    width: 100%; }
.card-user .image-plain {
  height: 0;
  margin-top: 110px; }
.card-user .author {
  text-align: center;
  text-transform: none;
  margin-top: -65px; }
  .card-user .author .title {
    color: #403D39; }
    .card-user .author .title small {
      color: #ccc5b9; }
.card-user .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: relative;
  margin-bottom: 15px; }
  .card-user .avatar.border-white {
    border: 5px solid #FFFFFF; }
  .card-user .avatar.border-gray {
    border: 5px solid #ccc5b9; }
.card-user .title {
  font-weight: 600;
  line-height: 24px; }
.card-user .description {
  margin-top: 10px; }
.card-user .content {
  min-height: 200px; }
.card-user.card-plain .avatar {
  height: 190px;
  width: 190px; }

.card-map .map {
  height: 500px;
  padding-top: 20px; }
  .card-map .map > div {
    height: 100%; }

.card-user .footer,
.card-price .footer {
  padding: 5px 15px 10px; }
.card-user hr,
.card-price hr {
  margin: 5px 15px; }

.card-plain {
  background-color: transparent;
  box-shadow: none;
  border-radius: 0; }
  .card-plain .image {
    border-radius: 4px; }

.ct-label {
  fill: rgba(0, 0, 0, 0.4);
  color: rgba(0, 0, 0, 0.4);
  font-size: 0.9em;
  line-height: 1; }

.ct-chart-line .ct-label,
.ct-chart-bar .ct-label {
  display: block;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex; }

</style>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                <?php if($photo!="") echo "<img src='upload/".$photo."' class='avatar border-white '  alt=''>";
                      else echo "<img src='img/user.png'  class='avatar border-white' alt=''>" ;
                 ?>
                                  
                                  <h4 class="title"><?= strtoupper($name); ?><br />
                                     <a href="#"><small>@<?php echo strtolower(str_replace(' ', '', $name)); ?></small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up" 
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>12<br /><small>Friends</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2<br /><small>Mutual Friends</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>3.12 PM<br /><small>Last Online</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mutual Friends</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        DJ Khaled
                                                        <br />
                                                        <span class="text-muted"><small>Offline</small></span>
                                                    </div>

                                                    <div class="col-xs-3 pull-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Creative Tim
                                                        <br />
                                                        <span class="text-success"><small>Available</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Flume
                                                        <br />
                                                        <span class="text-danger"><small>Busy</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                           
                            <div class="header">
                                <h4 class="title"><?php echo "Timeline";?></h4>
                            </div>
                            <div class="content">
        <!-- ---------- posts --------------------------- -->              
                               
    <div class="panel panel-default post">
    <div class="panel-body">
       <div class="row">
         <div class="col-sm-2">
           <a href="profile.html" class="thumbnail">
           <?php if($photo!="") echo "<img src='upload/".$photo."' class='avatar border-white '  alt=''>";
                      else echo "<img src='img/user.png'  class='avatar border-white' alt=''>" ; ?>
                      <div><?php echo $name ?></div>
            </a>
           <div class="likes text-center">7 Likes</div>
         </div>
         <div class="col-sm-10">
           <div class="bubble">
             <div class="pointer">
               <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
             </div>
             <div class="pointer-border"></div>
           </div>
           <p class="post-actions"><a href="#" id="com">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
           <div class="comment-form" id="comform">
             <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your comments">
              </div>
              <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
           </div>
           <div class="clearfix"></div>

           <div class="comments">
             <div class="comment">
               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
               <div class="comment-text">
                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
               </div>
             </div>
             <div class="clearfix"></div>
             <div class="comment">
               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
               <div class="comment-text">
                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
               </div>
             </div>
             <div class="clearfix"></div>
           </div>

         </div>
       </div>
    </div>
  </div>

</div>
</div>
 <!-- ---------- posts --------------------------- -->

                            </div>
                        </div>
                    </div>
</div>

                </div>
            </div>
        </div>
<?php include "include/footer.php"; ?>