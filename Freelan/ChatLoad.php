
<?php
include("../Asset/Connection/Connection.php");
session_start();




$selQry = "select * from tbl_chat dc inner join tbl_freelan u on (u.freelan_id=dc.chat_tofreelan) or (u.freelan_id=dc.chat_fromfreelan) where (dc.chat_fromclient=".$_GET['id']." or dc.chat_toclient=".$_GET['id'].") and u.freelan_id='".$_SESSION["fid"]."' order by chat_id";
    $rowdis=$con->query($selQry);
     while($datadis=$rowdis->fetch_assoc())
  
    {
        if ($datadis["chat_fromclient"]==$_GET["id"]) {

            $selQry1= "select * from tbl_client where client_id='".$_GET["id"]."'";
    $rowdis1=$con->query($selQry1);
     if($datadis1=$rowdis1->fetch_assoc())
  
{
            
?>

<div class="chat-message is-received teal">
    <img src="../Asset/Files/Client/Photo/<?php echo $datadis1["client_photo"] ?>" alt="">
    <div class="message-block" >
        <span><?php echo $datadis1["client_name"] ?></span>
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
    <img src="../Asset/Files/Freelan/Photo/<?php echo $datadis["freelan_photo"] ?>" alt="">
    <div class="message-block">
        <span><?php echo $datadis["freelan_name"] ?></span>
        <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
    </div>
</div>
        <div class="chat-message" style="margin: 0px; padding: 0px" >

</div>
<?php
    }

        }
    


?>