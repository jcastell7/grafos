<?php

include("vertice.php");

Class Grafo {

    private $matrizA;
    private $vectorV;
    private $dirigido;
    private $Materias;

    public function __construct($dir = true) {
        $this->matrizA = null;
        $this->vectorV = null;
        $this->dirigido = $dir;
        $this->Materias = array();
    }

    //recibe objeto tipo vertice, no pueden repetirce id
    public function agregarVertice($v) {
        if (!isset($this->vectorV[$v->getId()])) {
            $this->matrizA[$v->getId()] = null;
            $this->vectorV[$v->getId()] = $v;
        } else {
            return false;
        }
        return true;
    }

    public function getVertice($v) {
        if ($this->vectorV[$v] != null) {
            return $this->vectorV[$v];
        } else {
            return "no se encontro este vertice";
        }
    }

    //recibe id de nodo origen, destino y peso (opcional)
    public function agregarArista($o, $d, $p = 0) {
        if (isset($this->vectorV[$o]) && isset($this->vectorV[$d])) {
            $this->matrizA[$o][$d] = $p;
        } else {
            return false;
        }

        return true;
    }

    //recibe id de nodo y retorna en un arreglo sus adyacentes.
    public function getAdyacentes($v) {
        if ($v != "" || $v != null) {
            return $this->matrizA[$v];
        } else {
            return "este nodo no existe";
        }
    }

    public function SonAdyacentes($A, $B) {
        if (isset($this->matrizA[$A][$B])) {
            return true;
        } else {
            return false;
        }
    }

    public function MayorGrado() {
        $mayor = 0;
        $vector = $this->vectorV;
        foreach ($vector as $clave => $objeto) {
            if ($this->grado($clave) > $mayor) {
                $mayor = $this->grado($clave);
            }
        }
        return $mayor;
    }

    public function NodosMayorGrado() {
        $respuesta = null;
        $vector = $this->vectorV;
        $mayor = $this->MayorGrado();
        foreach ($vector as $clave => $objeto) {
            $grado = $this->grado($clave);
            if ($grado == $mayor) {
                $respuesta[$clave] = $objeto;
            }
        }
        return $respuesta;
    }

    public function getMatrizA() {
        return $this->matrizA;
    }

    public function getVectorV() {
        return $this->vectorV;
    }

    //recibe el id del vertice y retorna grado de salida del mismo
    public function gradoSalida($v) {
        if ($v != "" || $v != null) {
            return count($this->matrizA[$v]);
        } else {
            return "este vector no existe";
        }
    }

    public function gradoEntrada($v) {
        $gr = 0;
        if ($this->matrizA != null) {
            foreach ($this->matrizA as $vp => $adya) {
                if ($adya != null) {
                    foreach ($adya as $de => $pe) {
                        if ($de == $v) {
                            $gr++;
                        }
                    }
                }
            }
        }

        return $gr;
    }

    //recibe el id del vertice y retorna grado del mismo
    public function grado($v) {

        return $this->gradoSalida($v) + $this->gradoEntrada($v);
    }

    //recibe id de vertice origen y destino
    public function eliminarArista($o, $d) {
//                    print_r($this->matrizA);

        if (isset($this->matrizA[$o][$d])) {

            unset($this->matrizA[$o][$d]);
        } else {

            return false;
        }

        return true;
    }

    //recibe id de vertice a eliminar, elimina aristas relacionadas
    public function eliminarVertice($v) {
        if (isset($this->vectorV[$v])) {
            foreach ($this->matrizA as $vp => $adya) {
                if ($adya != null) {
                    foreach ($adya as $de => $pe) {
                        if ($de == $v) {
                            unset($this->matrizA[$vp][$de]);
                        }
                    }
                }
            }
            unset($this->matrizA[$v]);
            unset($this->vectorV[$v]);
        } else {
            return false;
        }
        return true;
    }

    public function crearNodos() {
        $lista = array();
        foreach ($this->vectorV as $idVector => $Objeto) {
            $idObjeto = $Objeto->getId();
            $lista[$idVector] = "{id: '$idObjeto',label :'$idObjeto'},";
        }
        return $lista;
    }

    public function unirNodos() {
        $lista = array();
        $contador = 0;
        foreach ($this->matrizA as $idVector => $vector) {
            if ($vector != null) {
                foreach ($vector as $idObjeto => $unido) {
                    $lista[$contador] = "{from: '$idVector', to: '$idObjeto',label: '$unido'},";
                    $contador++;
                }
            }
        }
        return $lista;
    }
    public function buscarKey($vertice,$array){
        foreach ($array as $key=>$valor){
        if($vertice==$valor){
            return $key;
        }    
        }
        return null;
    }
    
    public function siguiente($inicio,$final,$array){
        $numero1=  $this->buscarKey($inicio,$array);
        $numero2=  $this->buscarKey($final,$array);
        if($numero1+1==$numero2){
            return true;
        }
        return false;
    }
    
    public function unirNodosColor($inicio ,$final) {
        $lista = array();
        $recorrido=  $this->dijkstra($inicio, $final);
        foreach ($this->matrizA as $idVector => $vector) {
            if ($vector != null) {
                foreach ($vector as $idObjeto => $unido) {
                    if($this->siguiente($idVector, $idObjeto, $recorrido)&&  in_array($idVector, $recorrido)&&  in_array($idObjeto, $recorrido)){
                        $lista[] = "{from: '$idVector', to: '$idObjeto',label: '$unido', color:{color:'red'}},";
                    }else{
                    $lista[] = "{from: '$idVector', to: '$idObjeto',label: '$unido'},";
                }}
            }
        }
        return $lista;
    }
    function relaciones($materia) {
        $vectores = array_keys($this->matrizA);
        $matriz = ($this->matrizA);
        $id = $materia/* ->getId() */;
        $relaciones = array();
        foreach ($vectores as $asignatura) {
            if (isset($matriz[$asignatura][$id])) {
                $relaciones[] = $asignatura;
            }
        }
        return $relaciones;
    }

    function requisitos($materia) {
        static $array=array();
        $array[]=$materia;
        $adyacentes = $this->relaciones($materia);
        foreach ($adyacentes as $val) {
            if($array[0]!=$val){
            $adyacentes = array_merge($adyacentes, $this->requisitos($val));
            }
        }
        return $adyacentes;
    }
    

    public function puedeDarMateria($materiasDadas, $materia) {
        $requisitos = $this->requisitos($materia);
        if (empty($materiasDadas) && !empty($requisitos)) {
            return false;
        }if (!in_array($materia, array_keys($this->matrizA))) {
            return false;
        }if (!empty($materiasDadas)/* && !empty($requisitos) */) {
            foreach ($requisitos as $requisito) {
                if (!in_array($requisito, $materiasDadas)) {
                    return false;
                }
            }
        }
        return true;
    }

    public function getMaterias() {
        return $this->Materias;
    }

    public function agregarMateria($materia) {
        if ($this->puedeDarMateria($this->Materias, $materia)) {
            array_push($this->Materias, $materia);
            return true;
        } else {
            return false;
        }
    }

    public function obtenerAdyacentes($vertice) {
        $vectores = array_keys($this->matrizA);
        $matriz = ($this->matrizA);
        $relaciones = array();
        foreach ($vectores as $asignatura) {
            if (isset($matriz[$vertice][$asignatura]) && !$this->vectorV[$asignatura]->getVisitado()) {
                $relaciones[] = $asignatura;
            }
        }
        return $relaciones;
    }
    public function Ciclos($vertice) {
        $respuesta = array();
        $matriz = ($this->matrizA);
        $cola=array();
        foreach ($matriz as $valor) {
            
        }
        
    }

    public function visitados() {
        $respuesta = array();
        foreach ($this->vectorV as $id => $vertice) {
            if (!$vertice->getVisitado()) {
                $respuesta[] = $id;
            }
        }
        return $respuesta;
    }

    public function arrayAVisitar($rama) {
        foreach ($rama as $vertice) {
            $this->vectorV[$vertice]->setVisitado(true);
        }
    }

    public function arraySinVisitar() {
        foreach ($this->vectorV as $vertice) {
            $vertice->setVisitado(false);
            $vertice->setPadre(null);
            $vertice->setDistancia(-1);
        }
    }
    public function quitarVisitado() {
        foreach ($this->vectorV as $vp => $adya) {
            if ($adya != null) {
                $this->getVertice($vp)->setVisitado(false);
            }
        }
    }

    public function recorridoProfundidad($V) {
        if (!isset($this->vectorV[$V])) {//verifica que exista el vertice en el vector de vertices
            return false; // si no existe retorna falso
        } else {
            $Cola = array(); //crea un array Cola
            $R = array(); //crea un array R (respuesta)
            array_push($Cola, $V); //agrega el vertice origen a la cola
            while ($Cola != null) { // empieza el ciclo mientras la cola tenga algun elemento 
                $C = array_pop($Cola);     //creo un elemento C que almacena el ultimo elemento de la cola
                if ($this->getVertice($C)->getVisitado() == false) {// pregunta por el visitado del vertice C
                    $this->getVertice($C)->setVisitado(true); // si es falso lo vuelve true
                    array_push($R, $C); // agrega el elemento C al array resultado
                    if ($this->getAdyacentes($C) != null) { /// pregunta por los adyacentes de C 
                        foreach ($this->getAdyacentes($C) as $key => $value) { // si existen  
                            array_push($Cola, $key); // los agrega al array Cola para seguir el metodo
                        }
                    }
                }
            }
            $this->quitarVisitado(); // deja el visitado en su estado inicial
            return $R; // retorna el array de resultados
        }
    }

//final del metodo
//    public function recorridoProfundidad($vertice) {
//        $noVisitados = $this->visitados();
//        $adyacentes = $this->obtenerAdyacentes($vertice);
//        $respuesta = array();
//        static $rama = array();
//        if ($vertice != null) {
//            if (empty($adyacentes)) {
//                array_unshift($respuesta, $this->vectorV[$vertice]);
//                $this->vectorV[$vertice]->setVisitado(true);
//                $noVisitados = $this->visitados();
//                if (!empty($rama)) {
//                    $vertice = array_pop($rama);
//                } else {
//                    $vertice = array_shift($noVisitados);
//                }
//                if ($vertice != null) {
//                    $this->vectorV[$vertice]->setVisitado(true);
//                }
//                $respuesta = array_merge($respuesta, $this->recorridoProfundidad($vertice));
//            } else {
//                $this->vectorV[$vertice]->setVisitado(true);
//                if (!in_array($vertice, $rama)) {
//                    array_push($rama, $this->vectorV[$vertice]->getId());
//                }
//                $rama = array_merge($rama, $adyacentes);
//                $vertice = array_pop($rama);
//                $respuesta = array_merge($respuesta, $this->recorridoProfundidad($vertice));
//            }
//        }
//        return ($respuesta);
//    }
    
public function retornoLetras($array){
    $res=array();
    foreach($array as $val){
        $res[]=$val->getId();
    }
    return $res;
}
public function retornoLetrasP($array){
    $res=array();
    foreach($array as $val){
        $res[]=$val->getId();
    }
    return array_reverse($res);
}
    public function recorridoPorAnchura($vertice) {
        $this->arraySinVisitar();
        $this->vectorV[$vertice]->setVisitado(true);
        $this->vectorV[$vertice]->setPadre(NULL);
        $this->vectorV[$vertice]->setDistancia(0);
        $cola = array();
        $res = array();
        $nodo;
        array_push($cola, $this->vectorV[$vertice]->getiD());
        while (!empty($cola)) {
            $nodo = array_shift($cola);
            array_push($res, $this->vectorV[$nodo]);
            foreach ($this->obtenerAdyacentes($nodo)as $ady) {
                $this->vectorV[$ady]->setVisitado(true);
                $this->vectorV[$ady]->setDistancia($this->vectorV[$vertice]->getDistancia() + 1);
                $this->vectorV[$ady]->setPadre($vertice);
                array_push($cola, $ady);
            }
        }
        $this->arraySinVisitar();
        return $res;
    }

    public function sacarMenor($array) {
        $menor = $array[0];
        $res = $menor->getDistancia();
        foreach ($array as $valor) {
            $distancia = $valor->getDistancia();
            if ($distancia < $res) {
                $menor = $valor;
            }
        }
        return $menor;
    }

    public function dijkstra($vertice1, $vertice2) {
        $requisitos=  $this->requisitos($vertice2);
        if(in_array($vertice1, $requisitos)){
        $camino = array();
        $cola = array();
        foreach (array_keys($this->matrizA) as $val) {
            $cola[$val] = 99999;
        }
        $cola[$vertice1] = 0;
        while (!empty($cola)) {
            $min = array_search(min($cola), $cola);
            if ($min == $vertice2) {
                break;
            }
            if(!empty($this->matrizA[$min])){
            foreach ($this->matrizA[$min] as $key => $val) {
                if (!empty($cola[$key]) && $cola[$min] + $val < $cola[$key]) {
                    $cola[$key] = $cola[$min] + $val;
                    $camino[$key] = array($min, $cola[$key]);
                }
            }
                }
            unset($cola[$min]);
        }
        $path = array();
        $pos = $vertice2;
        while ($pos != $vertice1) {
            $path[] = $pos;
            $pos = $camino[$pos][0];
        }
        $path[] = $vertice1;
        $path = array_reverse($path);
        return $path;
        }else{
            return null;
        }}
    

//jtorres990@gmail.com
}

?>