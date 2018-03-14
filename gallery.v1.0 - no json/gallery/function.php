<?php error_reporting(0); /* Atualizado dia 01/10/2017 as 13:14 */

//verificando string get
if(isset($_GET['urls']) && $_GET['urls']!=""){
    
    $protocol = "";
    $image = "";
    
    //verifica se as urls sao validas
    if (preg_match('/http:/', $_GET['urls'])) {
        $protocol = "http:";
    }
    if (preg_match('/https:/', $_GET['urls'])) {
        $protocol = "https:";
    }
    if (preg_match('/.jpg/', $_GET['urls'])) {
        $image = "jpg";
    }
    if (preg_match('/.png/', $_GET['urls'])) {
        $image = "png";
    }
    if (preg_match('/.gif/', $_GET['urls'])) {
        $image = "gif";
    }
    if (preg_match('/.jpeg/', $_GET['urls'])) {
        $image = "jpeg";
    }
    
    // adicionado virgula ao final das URLs
    $vowels0 = array(","); //Padroniza as virgulas, evita comflitos. Remove todas e depois adiciona de novo. Para não ocorrer erro se por acaso algum animal colocar virgulas de mais ou de menos 
    $vowels1 = array(".jpghttp");
    $vowels2 = array(".pnghttp");
    $vowels3 = array(".gifhttp");
    $vowels4 = array(".jpeghttp");        
    $_GET["urls"] = str_replace($vowels0, "", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels1, ".jpg,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels2, ".png,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels3, ".gif,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels4, ".jpeg,http", $_GET["urls"]);        
    
    //CRIANDO NOME DA GALLERY
        //function que gera string randomica 
        function generateRandomString($length) {
                    $characters = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ123456789';
                    //$characters = 'aAbBc'; testes
                    //$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
        }
     
    if ($protocol == "http:" || $protocol == "https:" && $image == "jpg" || $image == "png" || $image == "gif" || $image == "jpeg"){
        
        //verificando se o arquivo limite existe
        if(file_exists("docs/limite.txt")){
            //limite de caracteres
            (int)$limite = file_get_contents("docs/limite.txt");
        }else{
            $limite = 11;
        }
        
        //Criando um nome para Galeria
        $nome_galeria = generateRandomString($limite);
        
        //verificando se o arquivo book.txt existe
        if(file_exists("docs/book.txt")){
            //pegando conteúdo do livro
            $livro = file_get_contents("docs/book.txt");
        }else{
            //cria o arquivo book.txt
            $livro_txt = fopen("docs/book.txt","w");
            fclose($livro_txt);
            //pegando conteúdo do livro
            $livro = file_get_contents("docs/book.txt");
        }
        
        //se o livro não estiver vazio
        if($livro!=""){
            //separando conteudo em array  // retorno = $array_livro[0] = "nome - data = jpg,jpg,jpg", 
            $array_livro = explode("|ERICSN|", $livro);

            // array para armazenar os nomes das galerias // retorno = $array_nomes[0] = "nome", $array_nomes[1] = "nome",
            $array_nomes = array();

            //percorendo o array do livro, pegando o nome de cada uma e salvando no $array_nomes
            foreach ($array_livro as $galeria){
                //separando o nome da data
                $array_galeria_nome_data = explode("-", $galeria);  //retorno = $array_galeria_nome_data[0] = "nome", $array_galeria_nome_data[1] = "data", 
                //salvando o nome da galeria seleciona no $array_nomes
                $array_nomes[]=$array_galeria_nome_data[0];            
            } 
            $while=0; $tentativa=0;
            while($while==0){
                //verificando se o nome criado para o nova galeria já existe no $array_nomes        
                if(in_array($nome_galeria,$array_nomes)){
                    //se o nome já existe, anota a tentativa e o loop continua
                    $tentativa++;
                    if($tentativa==3){// verifica se tentou criar um nome 3 vezes, e mesmo assim já tem nomes iguais.
                        $limite = $limite+1; // aumenta a quantidade de caracteres.
                        $l = fopen("docs/limite.txt","w");
                        fwrite($l,$limite); //atualizando limite
                        fclose($l);
                    }                    
                    //Criando um NOVO NOME
                    $nome_galeria = generateRandomString($limite);
                }else{
                    $while = 1;
                    $linha = "|ERICSN|".$nome_galeria."-".date("F j, Y, g:i a")."=".$_GET['urls'];
                    $c = fopen("docs/book.txt","w");
                    //juntando conteudo anterior com o novo
                    fwrite($c,$livro.$linha);
                    fclose($c);            
                    echo $nome_galeria; //retornando o nome da galeria para o ajax do index 
                }
            }            
        }else{//se o livro estiver vazio            
            $linha = $nome_galeria."-".date("F j, Y, g:i a")."=".$_GET['urls'];
            $b = fopen("docs/book.txt","w");
            fwrite($b,$linha);
            fclose($b);            
            echo $nome_galeria; //retornando o nome da galeria para o ajax do index
        }
                        
    } else { echo "erro";}       
    
}else{echo "erro";}
    

    
?>