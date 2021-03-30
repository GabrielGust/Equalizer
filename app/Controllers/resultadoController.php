<?php

namespace App\Controllers;

use Core\Controller;

class ResultadoController extends Controller {

  public function index(){
    $titlePage = "Resultado";
    $title = "Resultado";
    $subtitle = "<p>Estes são os valores de <b>X1</b> e <b>X2</b> que foram encontrados.</p>";

    $sectionH1 = "X1: ";
    $sectionH2 = "X2: ";

    $x1 = "aqui recebe x1";
    $x2 = "aqui recebe x2";

    $redirectButton = 'Ponto máximo e mínimo';

    $this->view('resultado', [
      'tituloPagina' => $titlePage, 
      'titulo' => $title, 
      'subtitulo' => $subtitle, 
      'secaoH1' => $sectionH1, 
      'secaoH2' => $sectionH2,
      'valor1' => $x1, 
      'valor2' => $x2,
      'textoBotao' => $redirectButton
    ]);
  }

  public function pontomaximoeminimo(){
    $titlePage = "Ponto Máximo e Mínimo";
    $title = "Ponto Máximo e Ponto Mínimo";
    $subtitle = "<p>Estes são os valores de <b>Ponto máximo</b> e <b>Mínimo</b> que foram encontrados.</p>";

    $sectionH1 = "Ponto Máximo: ";
    $sectionH2 = "Ponto Mínimo: ";

    $maxPoint = "aqui recebe maxPoint";
    $minPoint = "aqui recebe minPoint";

    $redirectButton = 'Fazer outra equação';

    $this->view('resultado', [
      'tituloPagina' => $titlePage, 
      'titulo' => $title, 
      'subtitulo' => $subtitle,
      'secaoH1' => $sectionH1, 
      'secaoH2' => $sectionH2, 
      'valor1' => $maxPoint, 
      'valor2' => $minPoint,
      'textoBotao' => $redirectButton
    ]);
  }
}