<?php


function component($nome, $prezzo, $img, $id){
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
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=img/Immagini/$img alt=\"Image1\" class=\"img-fluid card-img-top\">
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
                                Stesto
                            </p>
                            <h5>
                                
                                <span class=\"price\">$prezzo</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">aggiungi al carrello <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

