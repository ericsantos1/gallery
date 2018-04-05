<?php error_reporting(0); /* Atualizado dia 24/01/2018 as 16:45 */

//ultima modificação dia 24/01/2018 as 16:45: adicionar mais um filtro de otimização: Linha 34 $filtro0

//verificando string get
if(isset($_GET['urls']) && $_GET['urls']!="" && isset($_GET['name']) && $_GET['name']!=""){
  
    $protocol = "";
    $image = "";
    
    //pegando o nome da galeria
    $nome_atribuido_pelo_usuario = $_GET['name'];
    //filtrando caracteres do nome para não entrar em conflito no livro de registros
    $filtro_nome = array("@","&","=");        
    $nome_atribuido = str_replace($filtro_nome, "", $nome_atribuido_pelo_usuario);
    
    //Verificando se as URLs devem ser trazidas do arquivo urls.txt
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
        $filtro2 = array(".".$arr_chave[0]);                 //RESULTADO: "._"  ou "e." ou "qwe." qualquer coisa que sirva como chave para a Extensão da imagem.
        //substituindo o caractere "|" por ".__." para depois substituir _. pelo prefixo das URLs e ._ pela extensão das imagens 
        //NOTA: estou usando a colocação padrão definida por mim: _. para prefixo de URLs e ._ para extensão das imagens.
        $_GET["urls"] = str_replace($filtro0, ".".$arr_chave[0].$arr_chave[0].".", $_GET["urls"]);
        //adicioando de volta o prefixo das URLs
        $_GET["urls"] = str_replace($filtro1, $part_default, $_GET["urls"]);
        //adicionando de volta a extensão da imagem
        $_GET["urls"] = str_replace($filtro2, ".jpg", $_GET["urls"]);
        //as URLs foram completadas com a parte default que faltava e salvas de volta no GET
        //separando novamente o caractere chave e seu valor, das URLs, agora já completas
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
    
    //Adicionado virgula ao final das URLs
    $vowels0 = array(",","\n"); //Padroniza as virgulas, evita conflitos. Remove todas e depois adiciona de novo. Para não ocorrer erro se por acaso algum animal colocar virgulas de mais ou de menos 
    $vowels1 = array(".jpghttp",".jpg http");
    $vowels2 = array(".pnghttp",".png http");
    $vowels3 = array(".gifhttp",".gif http");
    $vowels4 = array(".jpeghttp",".jpeg http");        
    $_GET["urls"] = str_replace($vowels0, "", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels1, ".jpg,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels2, ".png,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels3, ".gif,http", $_GET["urls"]);
    $_GET["urls"] = str_replace($vowels4, ".jpeg,http", $_GET["urls"]);        
    
    //FUNÇÃO PARA CRIAR NOME DA GALLERY
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
    
    //CRIANDO A GALLERY ---------------------------------------------------------------------------------------------------------------------------
        
    if ($protocol == "http:" || $protocol == "https:" && $image == "jpg" || $image == "png" || $image == "gif" || $image == "jpeg"){

        //pegando o marcador de IDs ou criando um novo arquivo, caso não exista
        if(file_exists("docs/marcador_id.txt")){
            $marcador_ID = file_get_contents("docs/marcador_id.txt");
            $marcador_ID = (int)$marcador_ID;
        }else{//se o arquivo marcador não existir
            $criar_marcador_ID = fopen("docs/marcador_id.txt","w");
            fwrite($criar_marcador_ID,"1");fclose($criar_marcador_ID);
            $marcador_ID = 0;
        }
        
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
            //separando conteudo em array  // retorno = $array_livro[0] = "nome - data = jpg,jpg,jpg / ID", 
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
                    
                }else{//O LIVRO NÃO ESTÁ VAZIO, MAS NÃO EXISTEM GALERIAS COM NOMES IGUAIS
                    
                    //CRIANDO UM ID: inicio ---------------------------------------------------------------------------------------------------------------------
                    
                    $marcador_ID++;//Soma o número ID com +1, e salva no arquivo marcador
                    $m = fopen("docs/marcador_id.txt","w");
                    fwrite($m,$marcador_ID);fclose($m);//Atualiza o arquivo marcador de ID

                    //se o livro de galerias NÃO está vazio, entende-se que o livro de IDs tbm não.
                    //pegando o conteudo do livro de IDs
                    $livro_ID = file_get_contents("docs/book3.txt");
                    //criando nova linha para JUNTAR com o conteudo atual do livro de IDs
                    $linha_ID = "@".$marcador_ID."|".$nome_galeria."|".$nome_atribuido;
                    //escrevendo a linha criada no livro marcador
                    $abrir_livro_ID = fopen("docs/book3.txt","w");
                    fwrite($abrir_livro_ID,$livro_ID.$linha_ID);fclose($abrir_livro_ID);

                    //CRIANDO UM ID: fim ---------------------------------------------------------------------------------------------------------------------
                    
                    $while = 1; // iforma que esta é a ultima volta do loop
                    $linha = "|ERICSN|".$nome_galeria."-".date("F j, Y, g:i a")."=".$_GET['urls'];
                    //juntando conteudo anterior com o novo                               
                    $a = fopen("docs/book.txt","w");
                    if(fwrite($a,$livro.$linha)){// se escrever com sucesso
                        echo $nome_galeria;//retornando o nome da galeria para o ajax do index
                        fclose($a);//fecha o livro de galerias

                        //verifica se o livro de views não existe ou se existe, verifica se está vazio e insere os dados da primeira galeria ainda não vizualizada
                        if(!file_exists("docs/book2.txt") || file_exists("docs/book2.txt") && file_get_contents("docs/book2.txt")==="" || file_get_contents("docs/book2.txt")===null){                    
                            $primeira_view = $nome_galeria."|0|No View";
                            $escreve_view = fopen("docs/book2.txt","w");
                            fwrite($escreve_view, $primeira_view);
                            fclose($escreve_view);
                        }else{// se o livro de views não estiver vazio
                            /*NOTA: por enquanto, este codigo não é necessario, pois já está sendo executado pelo function2.php, o importante é que, se
                                    por  acaso o livro de  views não existir ou estiver vazio insere um registro como sendo o primeiro e o function2.php
                                    se encarrega das outras opções se o livro existir e já estiver com conteudo.php */                              
                            }
                    } else { echo "erro";} //se não conseguir escrever
                }
            }            
        }else{//se o livro estiver vazio 
            
            //CRIANDO UM ID: inicio ---------------------------------------------------------------------------------------------------------------------
            
            $marcador_ID++;//Soma o número ID com +1, e salva no arquivo marcador
            $m = fopen("docs/marcador_id.txt","w");
            fwrite($m,$marcador_ID);fclose($m);//Atualiza o arquivo marcador de ID
            
            //se o livro de galerias está vazio, entende-se que o livro de IDs está vazio tbm
            //criando a primeira linha do livro de IDs
            $linha_ID = $marcador_ID."|".$nome_galeria."|".$nome_atribuido;
            //escrevendo a primeira linha criada no livro marcador
            $abrir_livro_ID = fopen("docs/book3.txt","w"); // Abre o livro ou cria um novo caso não exista
            fwrite($abrir_livro_ID,$linha_ID);fclose($abrir_livro_ID);
            
            //CRIANDO UM ID: fim ---------------------------------------------------------------------------------------------------------------------
            
            $linha = $nome_galeria."-".date("F j, Y, g:i a")."=".$_GET['urls'];
            $b = fopen("docs/book.txt","w");
            if(fwrite($b,$linha)){// se escrever com sucesso
                echo $nome_galeria;//retornando o nome da galeria para o ajax do index
                fclose($b);//fecha o livro de galerias
                
                //verifica se o livro de views não existe ou se existe, verifica se está vazio e insere os dados da primeira galeria ainda não vizualizada
                if(!file_exists("docs/book2.txt") || file_exists("docs/book2.txt") && file_get_contents("docs/book2.txt")==="" || file_get_contents("docs/book2.txt")===null){                    
                    $primeira_view = $nome_galeria."|0|No View";
                    $escreve_view = fopen("docs/book2.txt","w");
                    fwrite($escreve_view, $primeira_view);
                    fclose($escreve_view);
                }else{// se o livro de views não estiver vazio
                            /*NOTA: por enquanto, este codigo não é necessario, pois já está sendo executado pelo function2.php, o importante é que, se
                                    por  acaso o livro de  views não existir ou estiver vazio insere um registro como sendo o primeiro e o function2.php
                                    se encarrega das outras opções se o livro existir e já estiver com conteudo.php */                              
                    }
            } else { echo "erro";} //se não conseguir escrever    
        }                        
    } else { echo "erro";}     
} else { echo "erro";}    
    

    
?>