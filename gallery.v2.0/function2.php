<?php error_reporting(0); /* Atualizado dia 02/10/2017 as 09:12 */

                    // Gallery Default
                    if(!isset($_GET['i']) && !file_exists("docs/book.txt") || !isset($_GET['i']) || $_GET['i']=="" || !file_exists("docs/book.txt")){
                        $urls = file_get_contents('docs/default.txt');
                        $arr = explode(',',$urls);
                        $armazem_URLs = array();
                        //Armazem de URLs, na verade armazena toda a tag <li> e <img>
                        foreach($arr as $valor) {
                            $armazem_URLs[] = "<li><img src='".$valor."' alt='' data-description=''></li>";
                        }
                        //retornando array json
                        echo json_encode($armazem_URLs);
                    }
                    
                    // Verificando se o livro existe, se não, cria um novo
                    if(!file_exists("docs/book.txt")){
                        //cria o arquivo book.txt
                        $livro_txt = fopen("docs/book.txt","w");
                        fclose($livro_txt);
                    }
                    
// GALERIA: inicio --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- GALERIA                                
                    
                    if(isset($_GET['i']) && $_GET['i']!=""){                        
                        
                        $gallery_matriz = array();                      // Array para gravar arrays ( MATRIZ )
                        
                        $book = file_get_contents('docs/book.txt');     // pegando super string do txt
                        $gallery_matriz = explode('|ERICSN|',$book);    // separa todas as gallerias em array
                        foreach($gallery_matriz as $gallery) {          // percorrendo todas as galerias e salvando em $gallery. Ex: $gallery = qwe - data = jpg,jpg,jpg                     
                            //separando dados da galeria atual
                            $gallery_dados = explode('-',$gallery);     // separando dados da galeria em array $gallery_dados[0]=qwe, $gallery_dados[1]= data = jpg,jpg,jpg
                            
                            if($gallery_dados[0]===$_GET['i']){         // verificando se o nome da galeria atual bate com o valor da variavel get
                               
// VIEWS: inicio --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- VIEWS                                
                               if(file_get_contents('docs/book2.txt')!=""){// se o livro de views não estiver vazio, o que provavelmente nunca vá acontecer, pq ao criar uma nova
                                                                           // uma nova galeria, já é inserirdo no livro de views como galeria não visualizada
                                   
                                            //variavel que irá julgar se um registro existe ou não, inicialmente segura logo um 'false', e verifica se irá mudar no decorrer do codigo 
                                            $registro_existe=false;
                                            
                                            //Ok, já existem registros no livro. Então...
                                            //separando o conteudo existente em array para saber se vamos add um novo registro ou se vamos atualizar um existente
                                            $book2 = file_get_contents('docs/book2.txt');
                                            $arr_book2 = explode("-",$book2);
                                            //percorrendo o array book2, e sanvando cada registro na variavel views. RESULTDO: $views = nome|quantidade|ultimaView
                                            foreach($arr_book2 as $views){                            
                                                //separando os dados de cada registro gravado em views
                                                $arr_views = explode("|",$views); // RESULTADO: $arr_views[0]=nome, $arr_views[1]=quantidade, $arr_views[2]=ultimaView 
                                                //percorrendo o array de views verificando se o nome da galeria atual está no registro
                                                if($arr_views[0]==$_GET['i']){
                                                    $registro_existe = true;
                                                    //encontrando o registro exato, capturamos a string da view, convertemos o numero para int, somamos o numero +1, 
                                                    //construimos uma nova string, depois substituimos ela no $book2
                                                    (int)$arr_views[1];//convertendo o texto numero para inteiro
                                                    $novo_num = $arr_views[1]+1; //soando mais uma view
                                                    $string_anterior = array($views);
                                                    $nova_string = $arr_views[0]."|".$novo_num."|".date("F j, Y, g:i a");
                                                    $novo_book2 = str_replace($string_anterior, $nova_string, $book2);
                                                    //salvando tudo em um renovado book2.txt                                                    
                                                    $b = fopen("docs/book2.txt","w");
                                                    fwrite($b, $novo_book2);
                                                    fclose($b);
                                                }
                                            }
                                            //Ok, a execusão chegou até aqui e valor dessa variavel ainda é 'false', então, não existem gegistros de views para
                                            //para ser modificado. Precisamos fazer o registro da view atual pela primeira vez. O que vai ser muuuuito mais simples.
                                            if($registro_existe==false){                                                
                                                //juntando o conteudo atual do livro com o novo registro
                                                $novo_registro = "-".$_GET['i']."|"."1"."|".date("F j, Y, g:i a");
                                                $book2 = $book2.$novo_registro;
                                                //salvando tudo no book2.txt                                                    
                                                $c = fopen("docs/book2.txt","w");
                                                fwrite($c, $book2);
                                                fclose($c);
                                            }
                                        }
                               
                               
// VIEWS: fim --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- VIEWS                                
  
                               
                               $dados_URLs = explode('=', $gallery_dados[1]); // separando a data das URLs. Ex: $dados_URLs[0]=data, $dados_URLs[1]=jpg,jpg,jpg
                               $URLs = explode(',',$dados_URLs[1]);     // e finalmente, chegamos as tão sonhadas URLs de cada galeria, tbm separadas em array srsrsrsS2 
                            
                                $armazem_URLs = array();
                                //Armazem de URLs, na verade armazena toda a tag <li> e <img>
                                foreach($URLs as $URL) {
                                    $armazem_URLs[] = "<li><img src='".$URL."' alt='' data-description=''></li>";
                                }
                                //retornando o array json
                                echo json_encode($armazem_URLs);
                            }                                                                                   
                        }
                    }
                
                ?>