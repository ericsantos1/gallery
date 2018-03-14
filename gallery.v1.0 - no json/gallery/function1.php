<?php error_reporting(0);

//apagando o link admin
if(isset($_GET['aviso2'])){
    if(file_exists("docs/links/link_admin.txt")){
        unlink("docs/links/link_admin.txt");
        header("location:./");
    }else{echo "erro";}
}else{echo "erro";}

//mantendo o link admin
if(isset($_GET['manter_admin'])){
    if(file_exists("docs/info.txt")){
        $a=fopen("docs/info.txt","w");
        fwrite($a,"3");
        fclose($a);
        header("location:./");
    }else{echo "erro";}
}else{echo "erro";}
?>