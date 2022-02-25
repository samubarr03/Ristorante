<?php

function inc(){
    $qta=$qta+1;
}

function dec(){
    $qta=$qta-1;
}

function component($nome, $prezzo, $img, $id){
    $qta=1;
    $element =
        "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form>
                    <div class=\"card shadow\" style=\"width: 18rem; height: 30rem; border-radius:0.25rem; \">
                        <div>
                            <img src=img/Immagini/$img alt=\"Image1\" class=\"img-fluid card-img-top\" style=\"width: 18rem; height: 14rem; \">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$nome</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">

                            </p>
                            <h5>
                                
                                <span class=\"price\">€$prezzo</span>
                            </h5>
                            <h1>
                            <style>
                                input[type=\"number\"] {
                                    -webkit-appearance: textfield;
                                    -moz-appearance: textfield;
                                    appearance: textfield;
                                }
                                
                                input[type=number]::-webkit-inner-spin-button,
                                input[type=number]::-webkit-outer-spin-button {
                                    -webkit-appearance: none;
                                }
                                
                                .number-input {
                                    border: 0;
                                    display: inline-flex;
                                }
                                
                                .number-input,
                                .number-input * {
                                    box-sizing: border-box;
                                }
                                
                                .number-input button {
                                    outline:none;
                                    -webkit-appearance: none;
                                    background-color: transparent;
                                    border: none;
                                    align-items: center;
                                    justify-content: center;
                                    width: 3rem;
                                    height: 3rem;
                                    cursor: pointer;
                                    margin: 0;
                                    position: relative;
                                    box-shadow: 0px 0px 1px #474747;
                                    border-radius: 50%;
                                }
                                
                                .number-input button:before,
                                .number-input button:after {
                                    display: inline-block;
                                    position: absolute;
                                    content: '';
                                    width: 1rem;
                                    height: 2px;
                                    background-color: #212121;
                                    transform: translate(-50%, -50%);
                                }
                                .number-input button.plus:after {
                                    transform: translate(-50%, -50%) rotate(90deg);
                                }
                                
                                .number-input input[type=number] {
                                    font-family: sans-serif;
                                    max-width: 5rem;
                                    padding: .5rem;
                                    border: none;
                                    border-width: 0 2px;
                                    font-size: 2rem;
                                    height: 3rem;
                                    font-weight: bold;
                                    text-align: center;
                                    color:#9be3df;
                                }
                            </style>  
                            
                                <div class=\"number-input\">
                                    <button onclick=\"dec()\" ></button>
                                    <input type=\"number\" min=\"0\" name=\"quantity\" value=$qta type=\"number\" >
                                    <button onclick=\"inc()\" class=\"plus\"></button>
                                </div>
                            </h1>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">  <a href=\"carrello.php?id=$id&qta=$qta\">Aggiungi al carrello.</a><i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}


function componentcar($nome, $prezzo, $img, $id, $quantita){
    $element =/* "
    <div class= \"col-md-3 col-sm-6 my-3 my-md-0\">	
    <form method=\"post\" action=\"index.php?action=add&id=<?php echo $id; ?>\">
            <div class=\"card shadow\" style= \"border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;\" align=\"center\">
                <img src=\"img/Immagini/<?php echo $img; ?>\" class=\"img-responsive \" /><br />

                <h4 class=\"text-info\"><?php echo $nome; ?></h4>

                <h4 class=\"text-danger\">$ <?php echo $nome; ?></h4>

                <input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\" />

                <input type=\"hidden\" name=\"hidden_name\" value=\"<?php echo $nome; ?>\" />

                <input type=\"hidden\" name=\"hidden_price\" value=\"<?php echo $prezzo; ?>\" />

                <input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Add to Cart\" />
                </div>    
            </div>
        </form>
    </div>
    ";
    
   */"<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <div>
                    <div class=\"card shadow\" style=\"width: 18rem; height: 30rem; border-radius:0.25rem; \">
                        <div>
                            <img src=img/Immagini/$img alt=\"Image1\" class=\"img-fluid card-img-top\" style=\"width: 18rem; height: 14rem; \">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$nome</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">

                            </p>
                            <h5>
                                
                                <span class=\"price\">€$prezzo</span>
                            </h5>
                            <h1>
                            <style>
                                input[type=\"number\"] {
                                    -webkit-appearance: textfield;
                                    -moz-appearance: textfield;
                                    appearance: textfield;
                                }
                                
                                input[type=number]::-webkit-inner-spin-button,
                                input[type=number]::-webkit-outer-spin-button {
                                    -webkit-appearance: none;
                                }
                                
                                .number-input {
                                    border: 0;
                                    display: inline-flex;
                                }
                                
                                .number-input,
                                .number-input * {
                                    box-sizing: border-box;
                                }
                                
                                .number-input button {
                                    outline:none;
                                    -webkit-appearance: none;
                                    background-color: transparent;
                                    border: none;
                                    align-items: center;
                                    justify-content: center;
                                    width: 3rem;
                                    height: 3rem;
                                    cursor: pointer;
                                    margin: 0;
                                    position: relative;
                                    box-shadow: 0px 0px 1px #474747;
                                    border-radius: 50%;
                                }
                                
                                .number-input button:before,
                                .number-input button:after {
                                    display: inline-block;
                                    position: absolute;
                                    content: '';
                                    width: 1rem;
                                    height: 2px;
                                    background-color: #212121;
                                    transform: translate(-50%, -50%);
                                }
                                .number-input button.plus:after {
                                    transform: translate(-50%, -50%) rotate(90deg);
                                }
                                
                                .number-input input[type=number] {
                                    font-family: sans-serif;
                                    max-width: 5rem;
                                    padding: .5rem;
                                    border: none;
                                    border-width: 0 2px;
                                    font-size: 2rem;
                                    height: 3rem;
                                    font-weight: bold;
                                    text-align: center;
                                    color:#9be3df;
                                }
                            </style>  
                                <div class=\"number-input\">
                                    <button onclick=\"this.parentNode.querySelector('input[type=number]').stepDown()\" ></button>
                                    <input class=\"quantity\" min=\"0\" name=\"quantity\" value=$quantita type=\"number\" >
                                    <button onclick=\"this.parentNode.querySelector('input[type=number]').stepUp()\" class=\"plus\"></button>
                                </div>
                            </h1>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">  <a href=\"carrello.php?action=rimuovi&id=$id\">Rimuovi dal carrello.</a><i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>

                        </div>
                    </div>
                </div>
            </div>
    ";
    echo $element;
}


?>

