<?php

namespace Alura\Cursos\Controller;

use \Alura\Cursos\Infra\EntityManagerCreator;
use \Alura\Cursos\Entity\Curso;

class ListarCursos implements InterfaceControladorRequisicao
{

  public function processaRequisicao(): void
  {
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $repositorioDeCursos = $entityManager->getRepository(Curso::class);
    $cursos = $repositorioDeCursos->findAll();

    $titulo = 'Lista de Cursos';

    require __DIR__.'/../../view/Cursos/listar-cursos.php';
  }
}
