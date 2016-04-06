<?php
require_once 'PHP\include.php';
$channel=$_GET['id'];
$sql = "select Pid, DueTime  from programs WHERE Channel = '$channel'";
$result = mysqli_query($link,$sql);
$myarray = array();
while($row = mysqli_fetch_assoc($result)){
    $myarray[] = $row;
}
$result_json = json_encode($myarray);
$curr_result = json_decode($result_json, true);
?>
<?php include 'header.php';?>
    <link rel="stylesheet" href="css/detail-list.css">
    <div class="row row-content return-bar">
            <div class="col-sm-3 return" style="background-color:#03093E;height:100px;">
                <a onclick="javascript:history.back(-1);"><h1>return</h1></a>
            </div>
            <div class="col-sm-6" style="background-color:#03093E;height:100px;">
                <h1><?php echo $channel;?></h1>
            </div>
            <div class="col-sm-3" style="background-color:#03093E;height:100px;"></div>
    </div>
    <div class="container">
        <?php
        foreach($curr_result as $row):
        ?>
        <a href="watch.php">
        <div class="row row-content list-element">
            <div class="col-sm-2">
                <img src="/test/img/kmtv.png" alt="">
            </div>
            <div class="col-sm-8">
                <div class="row row-content list-detail">
                    <div class="col-sm-12">
                        <h2><?php echo $channel;?></h2>
                        <h3>Weekly dance chart 222</h3>
                    </div>
                </div>
                 <div class="row row-content list-validation">
                    <div class="col-sm-12">
                        <h3>><?php echo $row['DueTime'];?></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <img src="/test/img/arrow.png" alt="">
            </div>
        </div>
        </a>
        <hr>
            <?php
        endforeach;
        ?>
    </div>
<?php include 'footer.php';?>

