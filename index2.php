<?php

include("grafo.php");

$n = new Grafo();
$n->agregarVertice(new Vertice("A"));
$n->agregarVertice(new Vertice("B"));
$n->agregarVertice(new Vertice("C"));
$n->agregarVertice(new Vertice("D"));
$n->agregarVertice(new Vertice("E"));
$n->agregarVertice(new Vertice("F"));

$n->agregarArista("A","B",1);
$n->agregarArista("A","D",10);
$n->agregarArista("B","C",2);
$n->agregarArista("B","F",4);
$n->agregarArista("F","E",3);
$n->agregarArista("C","E",7);
$n->agregarArista("C","D",9);


echo "<b>Matriz Adyacencia:</b><br>";
print_r($n->getMatrizA());
echo "<hr>";

echo "<b>Vector Vertices:</b><br>";
print_r($n->getVectorV());
echo "<hr>";


//visualizar matriz adyacencia
echo "<b>Recorrido Matriz Adyacencia:</b><br>";
foreach ($n->getMatrizA() as $vp => $adya) {
	echo "<br>".$vp." ->";
	if($adya !=null){
		foreach ($adya as $de => $pe) {
			echo " | ".$de." | ".$pe." |  --  ";
		}
	}
}
echo "<hr>";

$recorrido=$n->recorridoProfundidad("A");
$muestra1=$n->retornoLetrasP($recorrido);
$recorridoP=$n->recorridoPorAnchura("A");
$muestra2=$n->retornoLetras($recorridoP);
$recorridoD=$n->dijkstra("A","D");
//$adyacentesB=$n->obtenerAdyacentes("B");
echo"<br><hr>";
echo "recorrido 1: ";
print_r($muestra1);
echo "<br>";
echo"  recorrido 2: ";
print_r($muestra2);
echo "<br>";
echo"  recorrido 3: ";
print_r($recorridoD);
//print_r($adyacentesB);  

echo"<br><hr>";
//print_r($n->getVectorV());





?>