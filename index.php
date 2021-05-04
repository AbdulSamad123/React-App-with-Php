<?php

//Curl intro
// $ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com/");
// curl_exec($ch);
// curl_close($ch);

$url="https://rsac.pk/api/index.php?key=abhjssjkskldllioeiwo";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result = json_decode($result,true);
if(isset($result['status']))
{
    if($result['status']==true)
    {
        if(isset($result['result']))
        { 
            if($result['result']==true)
            { ?>

             <table border="1">
                <tr>
                   <td>ID</td>
                   <td>Name</td>
                   <td>Email</td>
                </tr>
                <?php
                foreach($result['data'] as $list)
                {
                    echo "<tr>
                         <td>".$list['id']."</td>
                         <td>".$list['name']."</td>
                         <td>".$list['email']."</td>
                         </tr>";
                }
                ?>
             </table>
               <?php
            }
            else
            {
                echo $result['data'];
            }
        }
        else
        {
            echo $result['data'];
        }
    }
    else{ 
        echo $result['data'];
    }
}
else{
    echo "Api not working";
}





?>