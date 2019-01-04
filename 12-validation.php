<?php
for ($i=0 ;$i < $nbArticles ; $i++)
{
	$index = $i +1;
	echo "<input type=\"hidden\" name=\"item_name_" . $index . "\" value=\"".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."\">";
	echo "<input type=\"hidden\" name=\"amount_" . $index . "\" value=\"".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."\">";
	echo "<input type=\"hidden\" name=\"quantity_" . $index . "\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\">";
}
echo "<input type=\"submit\" value=\"Valider la commande\">";
}


