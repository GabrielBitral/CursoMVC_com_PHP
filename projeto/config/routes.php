<?php

use Alura\Cursos\Controller\{Deslogar, Exclusao, FormularioEdicaoCurso, FormularioInsercaoCurso, FormularioLogin, ListarCursos, Persistencia, RealizarLogin};

return [
  ''               => ListarCursos::class,
  '/listar-cursos'  => ListarCursos::class,
  '/novo-curso'     => FormularioInsercaoCurso::class,
  '/salvar-curso'   => Persistencia::class,
  '/excluir-curso'  => Exclusao::class,
  '/alterar-curso'  => FormularioEdicaoCurso::class,
  '/login'          => FormularioLogin::class,
  '/realiza-login'  => RealizarLogin::class,
  '/logout'         => Deslogar::class
];
