<?php error_reporting(0); /* Atualizado dia 20/10/2017 as 10:01  session_start();*/

include_once './Mobile-Detect-2.8.26/Mobile_Detect.php'; $detect = new Mobile_Detect; 

//verificando se o admin quer uma pausa nos ads do seu acesso
if(isset($_GET['123'])){$var123='&123';}else{$var123='';} 

if(isset($_GET['refresh'])){header("location:http://ericsn.me/gallery/");}

?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 

    <title>Gallery - Data Table</title>
    <!-- Bootstrap Core CSS -->
    <link href="table/docs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="table/docs/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="table/cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="table/docs/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="table/docs/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="table/docs/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="table/docs/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
        <!--script src="docs/plugins/bower_components/jquery/dist/jquery.min.js"></script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
        <!--link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css"-->     
        <link rel="stylesheet" type="text/css" href="docs/sweetalert2.min.css">
        <style>
            #protocolo{color: #26a69a;}
        </style>
        <script>
            //if(window.location.href === "http://ericsn.me/gallery/"){
            //    window.location.href="http://ericsn.me/gallery/";
            //}
        </script>
         
</head>

<body>
    <div class="div">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <!--div id="wrapper" div para menu fixo-->
    <div> <!-- mesma div acima -->
        <!-- Top Navigation -->        
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->        
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box"><style>#refresh:hover{color:lightseagreen}</style>
                            <span id="refresh" style="cursor: pointer"><b>Refresh</b></span>
                            <center><h3 class="box-title m-b-0">Gallery</h3>
                            <p class="text-muted m-b-30">Data Table</p></center>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover"><!-- para tabela listrada, remova a class "table-hover" e add a "table-striped" -->
                                    <thead>
                                        <tr>
                                            <th id="IDs">IDs</th>
                                            <th>URLs</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                
<?php
                                        
    //verificando se o arquivo book.txt existe
    if(file_exists("./docs/book.txt")){
        //pegando conteúdo do livro
        $livro = file_get_contents("./docs/book.txt");
    }else{
        //cria o arquivo book.txt
        $livro_txt = fopen("./docs/book.txt","w");
        fclose($livro_txt);
        //pegando conteúdo do livro
        $livro = file_get_contents("./docs/book.txt");
    }
    
    //se o livro não estiver vazio
    if($livro!=""){
            
            //separando conteudo em array  // RESULTADO: $array_livro[0] = "nome - data = jpg,jpg,jpg", 
            $array_livro = explode("|ERICSN|", $livro);            
            
            //pegando as views
            $livro_views = file_get_contents("./docs/book2.txt");
            $array_views = explode("-",$livro_views); // RESULTADO: nome da galeria|numero de views|data da ultima view - nome da galeria|numero de views|data da ultima view
            
            //pegando os IDs
            $livro_IDs = file_get_contents("./docs/book3.txt");
            $array_livro_IDs = explode("@",$livro_IDs); // RESULTADO: $array_livro_IDs[0] = numero id | nome da galeria | nome atribuido
            
            //percorendo o array do livro, pegando o nome de cada uma e salvando no $array_nomes
            foreach ($array_livro as $galeria){//loop 1
                //separando o nome da data
                $array_galeria_nome_data = explode("-", $galeria);  //retorno = $array_galeria_nome_data[0] = "nome", $array_galeria_nome_data[1] = "data = jpg,jpg", 
                //separando em array a data das URLs
                $array_data_URLs = explode("=",$array_galeria_nome_data[1]);  //resultado $array_data_URLs[0] = "data", $array_data_URLs[1] = "jpg,jpg,jpg"
                
                $achou = false;
                
                foreach ($array_views as $views){//loop 2
                    //separando os dados de cada view para comparação
                    $arr_dados_views = explode("|",$views);  // RESULTADO: $arr_dados_views[0] = nome, $arr_dados_views[1] = numero de views, $arr_dados_views[2] = data da ultima view 
                    //verificando se o nome da galeria visualisada é igual ao nome da galeria
                    if($array_galeria_nome_data[0]==$arr_dados_views[0]){
                        
                        foreach ($array_livro_IDs as $ID){// loop 3
                            $array_dados_ID = explode("|",$ID); //RESULTADO: $array_dados_ID[0] = numero id, $array_dados_ID[1] = nome da galeria
                            //verificando se o nome da galeria é igual ao nome da galeria contida no array e IDs
                            if($array_galeria_nome_data[0]==$array_dados_ID[1]){
                        
                                    $achou = true;

                                    //indice[0] pega o nome da galeria atual e indice[1] a data de criação junto com todas as URLs, por isso o $array_data_URLs
                                    $array_galeria_nome_data[0];
                                    //$url_gallery = file_get_contents("./my_site.txt");
                                    $protocolo = "http";
                                    $url_gallery = "://ericsn.me/gallery/";
                                    if($detect->isMobile()){
                                        echo "<tr name='".$array_galeria_nome_data[0]."'>"
                                        .       "<td><span class='btn btn-default btn-outline btn-sm'>".$array_dados_ID[0]."</span></b></td>"
                                        .       "<td><b><a href='".$protocolo.$url_gallery."?i=".$array_galeria_nome_data[0].$var123."'><span id='protocolo'>".$protocolo."</span> Gallery: ".$array_galeria_nome_data[0]."</a></b></td>"
                                        .       "<td><b>".$array_dados_ID[2]."</b></td>"                                   
                                        .    "</tr>";
                                    }else{
                                        echo "<tr name='".$array_galeria_nome_data[0]."'>"
                                        .       "<td><span class='btn btn-default btn-outline btn-sm'>".$array_dados_ID[0]."</span></b></td>"
                                        .       "<td><a href='".$protocolo.$url_gallery."?i=".$array_galeria_nome_data[0].$var123."' target='_blank'>"."<b><span id='protocolo'>".$protocolo."</span></b>".$url_gallery."?i=".$array_galeria_nome_data[0]."</a></td>"
                                        .       "<td><b>".$array_dados_ID[2]."</b></td>"                                   
                                        .    "</tr>";
                                    }
                   
                            }// comparação dos nomes do array de galerias com o array de IDs        
                        }//fim do loop 3             
                    }// comparação dos nomes do array de galerias com o array de views
                }// fim do loop 2     
                
                // se chegamos até aqui e a variavel $achou´ainda não encontrou nada, imprima uma tabela sem dados do array de views 
                if($achou==false){
                    
                    foreach ($array_livro_IDs as $ID){// loop 3
                            $array_dados_ID = explode("|",$ID); //RESULTADO: $array_dados_ID[0] = numero id, $array_dados_ID[1] = nome da galeria
                            //verificando se o nome da galeria é igual ao nome da galeria contida no array e IDs
                            if($array_galeria_nome_data[0]==$array_dados_ID[1]){
                                
                                    //indice[0] pega o nome da galeria atual e indice[1] a data de criação junto com todas as URLs, por isso o $array_data_URLs
                                    $array_galeria_nome_data[0];
                                    //$url_gallery = file_get_contents("./my_site.txt");
                                    $protocolo = "http";
                                    $url_gallery = "://ericsn.me/gallery/";
                                    if($detect->isMobile()){
                                        echo "<tr name='".$array_galeria_nome_data[0]."'>"
                                        .       "<td><span class='btn btn-default btn-outline btn-sm'>".$array_dados_ID[0]."</span></b></td>"
                                        .       "<td><b><a href='".$protocolo.$url_gallery."?i=".$array_galeria_nome_data[0].$var123."'><span id='protocolo'>".$protocolo."</span> Gallery: ".$array_galeria_nome_data[0]."</a></b></td>"
                                        .       "<td><b>".$array_dados_ID[2]."</b></td>"                                   
                                        .    "</tr>";
                                    }else{
                                        echo "<tr name='".$array_galeria_nome_data[0]."'>"
                                        .       "<td><span class='btn btn-default btn-outline btn-sm'>".$array_dados_ID[0]."</span></b></td>"
                                        .       "<td><a href='".$protocolo.$url_gallery."?i=".$array_galeria_nome_data[0].$var123."' target='_blank'>"."<b><span id='protocolo'>".$protocolo."</span></b>".$url_gallery."?i=".$array_galeria_nome_data[0]."</a></td>"
                                        .       "<td><b>".$array_dados_ID[2]."</b></td>"                                   
                                        .    "</tr>";
                                    }
                            }// comparação dos nomes do array de galerias com o array de IDs     
                    }// fim do loop 2, por ocasião de $achou==false                        
                } // $achou==false                    
            }// fim do loop 1       
        }                               
?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"></footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="table/docs/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="table/docs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="table/docs/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="table/docs/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="table/docs/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="table/docs/js/custom.min.js"></script>
    <script src="table/docs/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="table/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="table/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="table/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="table/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="table/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="table/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="table/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        
        //refresh 
        $("#refresh").on("click",function(){
            window.location="./?refresh"; 
        });
        // função para desabilitar a tecla F5.
        window.onkeydown = function (e) {
                if (e.keyCode === 116) {
                    e.keyCode = 0;      
                    $("#refresh").trigger("click");
                    e.returnValue = false;
                    return false;
            }
        }
        
        $('#myTable').DataTable();
        $("#IDs").trigger("click");
        /*$("table tr").hover(function() { // toda vez o mause estiver sobre a class div
                $('table tr').each(function(i){ // percorre todas as linhas da tabela
                    $(".btn").on("click", function(){ // procura o btn que recebeu um click
                        var gallery = $(this).closest('tr').attr("name");
                        var tr = $(this).closest('tr');
                    });
                });
        });*/  
    });
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-86926180-1', 'auto');
ga('send', 'pageview');
    </script>
    <!--Style Switcher -->
    <script src="table/docs/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </div>
</body>
</html>