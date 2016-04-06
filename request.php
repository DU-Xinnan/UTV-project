<?php
require_once 'PHP\include.php';
$sql = "select DISTINCT Channel from programs";
$result = mysqli_query($link,$sql);
$myarray = array();
while($row =mysqli_fetch_assoc($result))
{
    $myarray[] = $row;
}
$result_json = json_encode($myarray);
$curr_result = json_decode($result_json, true);
?>
<div class="main">
    <!-- Wrapper for slides -->
    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" ng-controller="topslides" style="z-index:0;">
         <div class="carousel-inner" role="listbox">
             <div class="item" class="{{active: element.id === 0}}" ng-repeat="element in content">
                 <img ng-src={{element.img}} alt="">
                 <div class="carousel-caption">
                     <p>{{element.name}}</p>
                 </div>
                 <div class="topbanner"></div>
                 <div class="bottombanner"></div>
             </div>
         </div>
     </div>-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/test/img/01.jpg" alt="...">
                <div class="carousel-caption">

                </div>
                <div class="topbanner"></div>
                <div class="bottombanner"></div>
            </div>
            <div class="item">
                <img src="/test/img/02.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
                <div class="topbanner"></div>
                <div class="bottombanner"></div>
            </div>
            <div class="item">
                <img src="/test/img/03.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
                <div class="topbanner"></div>
                <div class="bottombanner"></div>
            </div>
        </div>
    </div>
    <!--
    <div class="row row-content channel-list" ng-controller="channelList" ng-repeat="list in channelList">
        <div class="col-sm-4" style="background-color:black;">
            <img ng-src={{list.img}} alt="">
        </div>
        <div class="col-sm-7" style="background-color:yellow;">
            <p>{{list.name}}</p>
        </div>
        <div class="col-sm-1" style="background-color:black;">
            <img scr="lock.jpg" alt="" ng-show="lock">
        </div>
    </div>
    -->
    <div class="container">
        <hr>
        <?php
        foreach($curr_result as $row):
        ?>
        <div class="row row-content channel-list">
            <div class="col-sm-3">
                <img src="/test/img/kmtv.png" class="icon" alt="">
            </div>
            <div class="col-sm-7">
                <h2><a href="detail-list.php?id=<?php echo $row['Channel'];?>"><?php echo $row['Channel'];?></a></h2>
            </div>
            <div class="col-sm-2">
                <img scr="test/img/kmtv.png" class="icon" alt="">
            </div>
        </div>
        <hr>
        <?php
            endforeach;
        ?>
    </div>  
</div>
