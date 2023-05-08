<?php

use Alura\Cursos\Controller\{Exclusao, FormularioInsercaoCurso, ListarCursos, Persistencia};

return [
  '/listar-cursos'  => ListarCursos::class,
  '/novo-curso'     => FormularioInsercaoCurso::class,
  '/salvar-curso'   => Persistencia::class,
  '/excluir-curso'  => Exclusao::class
];
