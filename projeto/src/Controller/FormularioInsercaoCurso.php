<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class FormularioInsercaoCurso implements InterfaceControladorRequisicao
{

  use RenderizadorDeHtmlTrait;
  
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('cursos/formulario.php', [
      'titulo'  => 'Novo Curso'
    ]);
  }
}
