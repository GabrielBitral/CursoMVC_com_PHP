<?php

namespace Alura\Cursos\Controller;

class FormularioInsercaoCurso implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    $titulo = 'Novo Curso';

    require __DIR__.'/../../view/Cursos/formulario.php';
  }
}
