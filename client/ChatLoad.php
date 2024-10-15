
<?php
include("../Asset/Connection/Connection.php");
session_start();




 $selQry = "select * from tbl_chat dc inner join tbl_client u on (u.client_id=dc.chat_toclient) or (u.client_id=dc.chat_fromclient) where (dc.chat_fromfreelan=".$_GET['id']." or dc.chat_tofreelan=".$_GET['id'].") and u.client_id='".$_SESSION["cid"]."' order by chat_id";

    $rowdis=$con->query($selQry);
     while($datadis=$rowdis->fetch_assoc())
    {
        if ($datadis["chat_fromfreelan"]==$_GET["id"]) {
            $selQry1= "select * from tbl_freelan where freelan_id='".$_GET["id"]."'";
    $rowdis1=$con->query($selQry1);
     if($datadis1=$rowdis1->fetch_assoc())
  
{
            
?>

<div class="chat-message is-received">
    <img src="../Asset/Files/Freelan/Photo/<?php echo $datadis1["freelan_photo"] ?>" alt="">
    <div class="message-block">
        <span><?php echo $datadis1["freelan_name"] ?></span>
        <div class="message-text" style="background-color:teal;"><?php echo $datadis["chat_content"] ?></div>
    </div>
</div>
    <div class="chat-message" style="margin: 0px; padding: 0px" >

</div>

<?php
        }

} else {
    
?>
<div class="chat-message is-sent">
    <img src="../Asset/Files/Client/Photo/<?php echo $datadis["client_photo"] ?>" alt="">
    <div class="message-block">
        <span><?php echo $datadis["client_name"] ?></span>
        <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
    </div>
</div>
        <div class="chat-message" style="margin: 0px; padding: 0px" >

</div>
<?php
    }

        }
    


?>