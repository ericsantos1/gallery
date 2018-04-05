<?php error_reporting(0); /* Atualizado dia 24/01/2018 as 16:45 */

//ultima modificaчуo dia 24/01/2018 as 16:45: adicionar mais um filtro de otimizaчуo: Linha 31 $filtro0

//verificando string get
if(isset($_GET['urls']) && $_GET['urls']!="" && isset($_GET['name']) && $_GET['name']!=""){
  
    $protocol = "";
    $image = "";
    
    //pegando o nome da galeria
    $nome_randomico = $_GET['name'];
    
    //Verificando se as URLs devem devem ser trazidas do arquivo urls.txt
    if($_GET['urls']=="file" && file_exists("docs/urls.txt")){
        //substitui o valor do get pelo conteudo do arquivo txt
        $_GET["urls"] = file_get_contents("docs/urls.txt");
        //assim que pegar o conteudo de urls.txt, deleta o arquivo
        //unlink("docs/urls.txt");
    }
    
    //Otimizando a entrada de URLs
    if(strpos($_GET['urls'],"=") && strpos($_GET['urls'],"_.") && strpos($_GET['urls'],"._")){
        
        //separando o caractere chave e seu valor, das partes das URLs
        $arr_chave_parts_urls = explode(";",$_GET['urls']); //RESULTADO: $arr_chave_parts_urls[0] = d=http://site/fdsgdfg/xgsdgfd/  (parte padrao da URL)        
        //separando apenas o valor do caractere chave             
        $arr_chave = explode("=",$arr_chave_parts_urls[0]);                          //RESULTADO: $arr_chave[1] = http://site/fdsgdfg/xgsdgfd/  
        $part_default = $arr_chave[1];
        //juntando a parte default com as partes das URLs
        $filtro0 = array("|");
        $filtro1 = array($arr_chave[0].".");                 //RESULTADO: "_."  ou "e." ou "qwe." qualquer coisa que sirva como chave para o Prefixo da imagem.
        $filtro2 = array(".".$arr_chave[0]);                 //RESULTADO: "._"  ou "e." ou "qwe." qualquer coisa que sirva como chave para a Extensуo da imagem.
        //substituindo o caractere "|" por ".__." para depois substituir _. pelo prefixo das URLs e ._ pela extensуo das imagens 
        //NOTA: estou usando a colocaчуo padrуo definida por mim: _. para prefixo de URLs e ._ para extensуo das imagens.
        $_GET["urls"] = str_replace($filtro0, ".".$arr_chave[0].$arr_chave[0].".", $_GET["urls"]);
        //adicioando de volta o prefixo das URLs
        $_GET["urls"] = str_replace($filtro1, $part_default, $_GET["urls"]);
        //adicionando de volta a extensуo da imagem
        $_GET["urls"] = str_replace($filtro2, ".jpg", $_GET["urls"]);
        //as URLs foram completadas com a parte default que faltava e salvas de volta no GET
        //separando novamente o caractere chave e seu valor, das URLs, agora jс completas
        $arr_chave_urls = explode(";",$_GET['urls']); //RESULTADO: $arr_chave_urls[1] = http://site/fdsgdfg/xgsdgfd/http://site/fdsgdfg/xgsdgfd/
        //salvando de volta no GET apenas as URLs
        $_GET["urls"] = $arr_chave_urls[1];        
    }
    
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
    $vowels0 = array(",","\n"); //Padroniza as virgulas, evita conflitos. Remove todas e depois adiciona de novo. Para nуo ocorrer erro se por acaso algum animal colocar virgulas de mais ou de menos 
    $vowels1 = array(".jpghttp",".jpg http");
    $vowels2 = array(".pnghttp",".png http");
    $vowels3 = array(".gifhttp",".gif http");
    $vowels4 = array(".jpeghttp",".jpeg http");        
    $_GET["urls"] = str_replace($vowels0, "", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels1, ".jpg,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels2, ".png,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels3, ".gif,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels4, ".jpeg,http", $_GET["urls"]);        
            
    //EDITANDO A GALLERY ---------------------------------------------------------------------------------------------------------------------------
        
    if ($protocol == "http:" || $protocol == "https:" && $image == "jpg" || $image == "png" || $image == "gif" || $image == "jpeg"){
       
        //pegando conteњdo do livro
        $livro = file_get_contents("docs/book.txt");
        
        //se o livro nуo estiver vazio
        if($livro!=""){
            //separando conteudo em array  // retorno = $array_livro[0] = "nome - data = jpg,jpg,jpg / ID", 
            $array_livro = explode("|ERICSN|", $livro);

            //array para armazenar os nomes das galerias (veja dentro do "foreach") // retorno = $array_nomes[0] = "nome", $array_nomes[1] = "nome",
            $array_nomes = array();

            //percorendo o array do livro, pegando o de cada galeria e salvando no $array_nomes
            foreach ($array_livro as $galeria){
                //separando o nome da data e urls
                $array_galeria_nome_data = explode("-", $galeria);  //retorno = $array_galeria_nome_data[0] = "nome", $array_galeria_nome_data[1] = "data'='urls", 
                //salvando o nome da galeria seleciona no $array_nomes
                $array_nomes[]=$array_galeria_nome_data[0];            
            }
            
            //verificando se o nome identificador da galeria existe no registro
            if(in_array($nome_randomico, $array_nomes)){
                //percorendo o array do livro NOVAMENTE, pegando o nome de cada galeria e salvando no $array_nomes
                foreach ($array_livro as $galeria){
                    //separando o nome da data e urls
                    $array_galeria_nome_data = explode("-", $galeria);  //retorno = $array_galeria_nome_data[0] = "nome", $array_galeria_nome_data[1] = "data'='urls", 
                    //verificando se o nome da galeria atual no foreach щ igual ao nome recebido do GET
                    if($array_galeria_nome_data[0]===$nome_randomico){
                        //pegando a string de urls da galeria
                        $dados_galeria = explode("=",$galeria); // RESULTADO: $dados_galeria[0] = 'nome e data de criaчуo', $dados_galeria[1] = 'urls'
                        //realizando a ediчуo de fato, substituindo a string de urls por uma nova
                        $filtro_urls = array($dados_galeria[1]);
                        $novas_urls = $_GET['urls'];
                        $novo_livro = str_replace($filtro_urls, $novas_urls, $livro);
                        //substituindo a super string do livro por uma nova atualizada
                        $a = fopen("docs/book.txt","w");
                        if(fwrite($a,$novo_livro)){
                            fclose($a);
                            echo $nome_randomico;
                        } else { echo "erro";} 
                    }            
                }
            } else { echo "erro";}     
        }               
    } else { echo "erro";}     
} else { echo "erro";}    
    

    
?>