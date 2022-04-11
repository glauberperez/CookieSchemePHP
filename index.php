<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/kirei.css">
    <link rel="icon" href="./assets/img/logo.jpg">
    <title>スタイロ Brazil</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark" style="margin-top: 5px;">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 25px; color: #FF00FF;">スタイロ Brazil</a>
            <form class="d-flex" action="./filtrarCookies.php" method="POST">
                <select name="filtroId" class="form-select" aria-label="Filtro" style="margin-right: 10px;">
                    <option selected value="na">Selecione</option>
                    <option value="Pants">Calças</option>
                    <option value="Kit">Camisas</option>
                    <option value="But">Tênis</option>
                </select>
                <button class="btn btn-outline-secondary" type="submit">Selecionar</button>
            </form>
        </div>
    </nav>
    <div class="containerORL">
        <?php

        /*
       .---.
      /     \
      \.@-@./
      /`\_/`\
     //  _  \\
    | \     )|_
   /`\_`>  <_/ \
gsp\__/'---'\__/

*/
        if (isset($_COOKIE['filtro'])) {
            $filtro = $_COOKIE['filtro'];
            if ($filtro != 'na') {

                echo ('<div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">');

                for ($i = 1; $i != 7; $i++) {
                    $prod = '
                    <div class="col-sm-2 ">
                        <div class="card" style="width: 100%;">
                            <img src="./assets/img/' . $filtro . '' . $i . '.jpg" class="resolution card-img-top" alt="...">
                            <h5 class="card-title">' . $filtro . ' Hype 0.' . $i . '</h5>
                            <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                        </div>
                    </div>
                    ';
                    echo ($prod);
                }

                echo ('</div>');

                $opcao = array(
                    'Pants' => 0, 'Kit' => 1, 'But' => 2
                );

                $rd = array(
                    'Pants', 'Kit', 'But'
                );

                unset($rd[$opcao[$filtro]]);

                for ($i = 0; $i != 3; $i++) {
                    if (!array_key_exists($i, $rd)) { // tá nó numero do index o for 
                        continue;
                    }
                    echo ('<div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">');
                    for ($i1 = 1; $i1 != 7; $i1++) {
                        $random = '
                            <div class="col-sm-2 ">
                            <div class="card" style="width: 100%;">
                                <img src="./assets/img/' . $rd[$i] . '' . $i1 . '.jpg" class="resolution card-img-top" alt="...">
                                <h5 class="card-title">' . $rd[$i] . ' Hype 0.' . $i1 . '</h5>
                                <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                            </div>
                            </div>
                            ';
                        echo ($random);
                    }
                    echo ('</div>');
                }
            } else {

                $prod = '
                            <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
                            <div class="col-sm-2 ">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit1.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.1</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit2.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.2</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit3.jpg" class="resolution ard-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.3</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit4.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.4</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit5.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.5</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Kit6.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Kit Hype 0.6</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants1.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.1</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants2.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.2</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants3.jpg" class="resolution ard-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.3</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants4.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.4</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants5.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.5</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/Pants6.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Pants Hype 0.6</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But1.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.1</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But2.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.2</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But3.jpg" class="resolution ard-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.3</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But4.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.4</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But5.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.5</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card" style="width: 100%;">
                                    <img src="./assets/img/But6.jpg" class="resolution card-img-top" alt="...">
                                    <h5 class="card-title">Sneakers Hype 0.6</h5>
                                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                                </div>
                            </div>
                        </div>
                    ';
                echo ($prod);
            }
        } else {
            $prod = '
            <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
            <div class="col-sm-2 ">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit1.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.1</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit2.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.2</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit3.jpg" class="resolution ard-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.3</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit4.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.4</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit5.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.5</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Kit6.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Kit Hype 0.6</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Pants1.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.1</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Pants2.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.2</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Pants3.jpg" class="resolution ard-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.3</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/pants4.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.4</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Pants5.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.5</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/Pants6.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Pants Hype 0.6</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="row align-items-start" style="margin-bottom: 10px; padding: 0.5%;">
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But1.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.1</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But2.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.2</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But3.jpg" class="resolution ard-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.3</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But4.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.4</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But5.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.5</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 100%;">
                    <img src="./assets/img/But6.jpg" class="resolution card-img-top" alt="...">
                    <h5 class="card-title">Sneakers Hype 0.6</h5>
                    <a href="./comprar.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
        </div>
    ';
            echo ($prod);
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
