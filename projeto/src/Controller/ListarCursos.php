<?php

namespace Alura\Cursos\Controller;

use \Alura\Cursos\Infra\EntityManagerCreator;
use \Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class ListarCursos implements InterfaceControladorRequisicao
{

  use RenderizadorDeHtmlTrait;
  
  public function processaRequisicao(): void
  {
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $repositorioDeCursos = $entityManager->getRepository(Curso::class);
    $cursos = $repositorioDeCursos->findAll();

    echo $this->renderizaHtml('cursos/listar-cursos.php', [
      'cursos'    => $cursos,
      'titulo'    => 'Lista de Cursos'
    ]);
  }
}
