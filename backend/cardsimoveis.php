<?php 

function thumb($dir, $num) {
    $pasta = "img/imoveis/$dir/"; 
    $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif}", GLOB_BRACE);
    return $arquivos[$num];
}

  require("conecta.php");

  $cidade = $_GET['cidade']; 

  $sql = "SELECT * FROM `imoveis` WHERE cidade LIKE '%$cidade%' OR estado LIKE '%$cidade%'
  OR valor LIKE '%$cidade%' ORDER BY created DESC";
  $result = $conn->query($sql);
    if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
            echo '
            <div class="col m6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/imoveis/'.$row["fotodir"].'/1.jpg" style="height: 40vh; width: 100%">
                                    <span class="card-title">'.$row["cidade"].' - '.$row["estado"].'</span>
                                </div>
                                <div class="card-content center">
                                    <div class="row">
                                        <div class="col m4 tudo-meio">
                                            <span class="material-icons tamanho-icon">
                                                single_bed
                                            </span>
                                            <h5 class="espaco-letra">'.$row["quarto"].'</h5>
                                        </div>
                                        <div class="col m4 tudo-meio">
                                            <span class="material-icons tamanho-icon">
                                                bathtub
                                            </span>
                                            <h5 class="espaco-letra">'.$row["banheiro"].'</h5>
                                        </div>
                                        <div class="col m4 tudo-meio">
                                            <span class="material-icons tamanho-icon">
                                                drive_eta
                                            </span>
                                            <h5 class="espaco-letra">'.$row["garagem"].'</h5>
                                        </div>
                                    </div>
                                    <h5>R$ '.$row["valor"].'</h5>
                                </div>
                                <div class="card-action center">
                                    <button class="waves-effect waves-light btn">VER IMOVEL</button>
                                </div>
                            </div>
                        </div>
            ';
            
        }
        
    }