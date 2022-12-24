<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/producto/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TUz1gT9CYNfHE1Or',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/producto/listar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MQs35zSgnglePhAB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/producto/listarVenta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E05srfMafEjLoJUL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/cliente/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2hhaaivOoVX5HPyw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/cliente/listar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MHZoGokvCxlDsz6f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/venta/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v5CfE9jcPBIGmJTs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/venta/listar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::18Af3wFYpLy20xQY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/documento-sunat/listar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lFWUXX0nN52FIR4I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oizFoZfQRZmqOJTm',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/getData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cILXuvXEqG7wBO4n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/getInformacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YlWvZWlzm4n2itUv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/guardarConfiguracion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k3S2BtU4b6ylNcF4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/guardarInformacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0mCJ7EKfAx6bJJF2',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/getConfiguracion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pvpfuVXMbPVPDkVk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/guardarConfiguracionSunat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dRlM6LkVgGt4beph',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/getConfiguracionSunat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SGIIqREOvkYcq7Ei',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/my-company/getConfiguracionDashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZNYL1RVrWVYudPji',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/users/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s6QPyyr0AoWd1leN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/users/registrar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pz2YvVGdh2tsQGLf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/users/checkLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ra75IZ4bf8CPPhFJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/categoria/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ySOmo81oEHIoE64G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/categoria/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nVqNWI6fNIYMQWCU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/categoria/list/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CiJTBIpQkQevyU7o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/menu/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yX2ya81Wog8YziBb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/kardex/corregirStock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K8blm8fntBxqPKga',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/kardex/getStock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::txICA53BNHwBARhq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/producto-presentacion/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GHYtmSJUlVvbTOos',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/banner/guardar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::43QhW0gIuC4PNkBR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/banner/listar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4uB0UEga8PhVepIi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/v1/banner/changeOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j0Y0xfGn6Rmur0Mq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/categoria/listActiveWithProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::093Vv814nRkM7Zwt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/categoria/listActiveDropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::plEc4LBVUKmT9sIX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/my-company/getInformacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sj4LlTgK6DcmljBC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/my-company/getData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z2mxuCMTiThZWIHR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/cliente/registrar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yWe6oL068RlQhKKE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/cliente/trabaja-con-nosotros' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CuwJ4XtFXEbqUPw6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/cliente/contactanos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uW4YZUrh3cF6NE0O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/api/ecommerce-v1/banner/listarActivos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q6Tg3xd1ROPCElAA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b0j0kMbnuDZ3bFJo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/config-server' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ngbQqbpDi2WF4hPZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/des/checkEnvironment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N1vTZAIKF5TrRHyC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/secode/updateEnvironments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3lhVkZIkrOibW7xS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/des/api/(?|v1/(?|producto(?|/(?|buscar/([^/]++)(*:55)|modificar/([^/]++)(*:80)|activar/([^/]++)(*:103)|desactivar/([^/]++)(*:130)|eliminar/([^/]++)(*:155))|\\-presentacion/(?|buscar/([^/]++)(*:197)|listByProducto/([^/]++)(*:228)|modificar/([^/]++)(*:254)|activar/([^/]++)(*:278)|desactivar/([^/]++)(*:305)|porDefecto/([^/]++)(*:332)|eliminar/([^/]++)(*:357)))|c(?|liente/(?|buscar/([^/]++)(*:396)|modificar/([^/]++)(*:422)|activar/([^/]++)(*:446)|desactivar/([^/]++)(*:473))|ategoria/(?|find/([^/]++)(*:507)|modify/([^/]++)(*:530)|activate/([^/]++)(*:555)|desactivate/([^/]++)(*:583)|eliminar/([^/]++)(*:608)))|venta/(?|buscar/([^/]++)(*:642)|generarCpe/([^/]++)(*:669)|htmlTicket/([^/]++)(*:696))|documento\\-sunat/(?|venta/(?|download/pdf/([^/]++)(*:755)|pdf\\-html/([^/]++)(*:781))|download/(?|pdf(?|/([^/]++)(*:817)|\\-html/([^/]++)(*:840))|cdr/([^/]++)(*:861)|xml/([^/]++)(*:881))|enviar\\-sunat/([^/]++)(*:912))|banner/(?|buscar/([^/]++)(*:946)|modificar/([^/]++)(*:972)|activar/([^/]++)(*:996)|desactivar/([^/]++)(*:1023)|eliminar/([^/]++)(*:1049)))|ecommerce\\-v1/producto/(?|findByCodigo/([^/]++)(*:1107)|listByCategoria/([^/]++)(*:1140))))/?$}sDu',
    ),
    3 => 
    array (
      55 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nnKM5O1rCgbNgwkv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::obsCVEHK1gd1scsc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kN04KZ7My3KrABce',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bVDNJyiaZjDgU5MH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RrCgYx2Agdb37KEI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8psLyyWhdoialD1g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fYnJ9D4F0Pg90Px4',
          ),
          1 => 
          array (
            0 => 'idProducto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i73QOJn2d54Z886G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G1Wh4uKGgvNaV8vW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dqai3IcnJ7fAy3P1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g35jRCvAJB6rU9ZU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7V1l0jNsO4goGHT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wo4YCW6TzlHSaUC8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XknsjizIuRJdnrKk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F1zKjfNtHdEX6fzR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oWNDrQvL7eFhgGXe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FiYWPv6rIE2oggbu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3RFPkFQcUJ60G5A3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nI53EftrUlclOo9e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B9fEgICzxrT0N5pU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kWcQX8FWIIx14uv3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::teiS0I8S3gmVjLJP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eJjsHOjmZP8FofbZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dGew8NmvaWNVWBjS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O8k8IFYuK99GHlRI',
          ),
          1 => 
          array (
            0 => 'idVenta',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNNVEwpu3ainP0v9',
          ),
          1 => 
          array (
            0 => 'idVenta',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KDW67vcSUadbMmS1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::npV4lw9faolP7Cli',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwIY7lPJWbirBG6w',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::apda1hlkDiGwqVWu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VvvceM2KJFA7NfG9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJoN8YDyajyR1q8B',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Do4AtfAHmmvg8KGk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NY6Vd1ht70pWDBVz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LrdhkMNt9VWxbanE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gGttlNHLRHECGNco',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FZUjnGMgW7adzqsU',
          ),
          1 => 
          array (
            0 => 'codigo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HIEnaNPf8kfMKGWZ',
          ),
          1 => 
          array (
            0 => 'idCategoria',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TUz1gT9CYNfHE1Or' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/producto/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::TUz1gT9CYNfHE1Or',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nnKM5O1rCgbNgwkv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/producto/buscar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@buscar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@buscar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::nnKM5O1rCgbNgwkv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MQs35zSgnglePhAB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/producto/listar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@listar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@listar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::MQs35zSgnglePhAB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E05srfMafEjLoJUL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/producto/listarVenta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@listarVenta',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@listarVenta',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::E05srfMafEjLoJUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::obsCVEHK1gd1scsc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/producto/modificar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@modificar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@modificar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::obsCVEHK1gd1scsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kN04KZ7My3KrABce' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/producto/activar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@activar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@activar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::kN04KZ7My3KrABce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bVDNJyiaZjDgU5MH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/producto/desactivar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@desactivar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@desactivar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::bVDNJyiaZjDgU5MH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RrCgYx2Agdb37KEI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'des/api/v1/producto/eliminar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoController@eliminar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoController@eliminar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::RrCgYx2Agdb37KEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2hhaaivOoVX5HPyw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/cliente/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::2hhaaivOoVX5HPyw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wo4YCW6TzlHSaUC8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/cliente/buscar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@buscar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@buscar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::Wo4YCW6TzlHSaUC8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MHZoGokvCxlDsz6f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/cliente/listar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@listar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@listar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::MHZoGokvCxlDsz6f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XknsjizIuRJdnrKk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/cliente/modificar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@modificar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@modificar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::XknsjizIuRJdnrKk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F1zKjfNtHdEX6fzR' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/cliente/activar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@activar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@activar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::F1zKjfNtHdEX6fzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oWNDrQvL7eFhgGXe' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/cliente/desactivar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClienteController@desactivar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClienteController@desactivar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::oWNDrQvL7eFhgGXe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v5CfE9jcPBIGmJTs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/venta/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VentaController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VentaController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/venta',
        'where' => 
        array (
        ),
        'as' => 'generated::v5CfE9jcPBIGmJTs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::teiS0I8S3gmVjLJP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/venta/buscar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VentaController@buscar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VentaController@buscar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/venta',
        'where' => 
        array (
        ),
        'as' => 'generated::teiS0I8S3gmVjLJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::18Af3wFYpLy20xQY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/venta/listar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VentaController@listar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VentaController@listar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/venta',
        'where' => 
        array (
        ),
        'as' => 'generated::18Af3wFYpLy20xQY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eJjsHOjmZP8FofbZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/venta/generarCpe/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VentaController@generarCpe',
        'controller' => 'App\\Http\\Controllers\\Admin\\VentaController@generarCpe',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/venta',
        'where' => 
        array (
        ),
        'as' => 'generated::eJjsHOjmZP8FofbZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dGew8NmvaWNVWBjS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/venta/htmlTicket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VentaController@htmlTicket',
        'controller' => 'App\\Http\\Controllers\\Admin\\VentaController@htmlTicket',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/venta',
        'where' => 
        array (
        ),
        'as' => 'generated::dGew8NmvaWNVWBjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lFWUXX0nN52FIR4I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/listar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@listar',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@listar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::lFWUXX0nN52FIR4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O8k8IFYuK99GHlRI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/venta/download/pdf/{idVenta}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadPdfByIdVenta',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadPdfByIdVenta',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::O8k8IFYuK99GHlRI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNNVEwpu3ainP0v9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/venta/pdf-html/{idVenta}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@pdfHtmlByIdVenta',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@pdfHtmlByIdVenta',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::DNNVEwpu3ainP0v9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KDW67vcSUadbMmS1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/download/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadPdf',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::KDW67vcSUadbMmS1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwIY7lPJWbirBG6w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/download/cdr/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadCdr',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadCdr',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::IwIY7lPJWbirBG6w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apda1hlkDiGwqVWu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/download/xml/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadXml',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@downloadXml',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::apda1hlkDiGwqVWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VvvceM2KJFA7NfG9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/documento-sunat/enviar-sunat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@enviarSunat',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@enviarSunat',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::VvvceM2KJFA7NfG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::npV4lw9faolP7Cli' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/documento-sunat/download/pdf-html/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@pdfHtml',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentoSunatController@pdfHtml',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/documento-sunat',
        'where' => 
        array (
        ),
        'as' => 'generated::npV4lw9faolP7Cli',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oizFoZfQRZmqOJTm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/my-company/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::oizFoZfQRZmqOJTm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cILXuvXEqG7wBO4n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/my-company/getData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getData',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getData',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::cILXuvXEqG7wBO4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YlWvZWlzm4n2itUv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/my-company/getInformacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getInformacion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getInformacion',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::YlWvZWlzm4n2itUv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k3S2BtU4b6ylNcF4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/my-company/guardarConfiguracion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarConfiguracion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarConfiguracion',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::k3S2BtU4b6ylNcF4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0mCJ7EKfAx6bJJF2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/my-company/guardarInformacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarInformacion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarInformacion',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::0mCJ7EKfAx6bJJF2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pvpfuVXMbPVPDkVk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/my-company/getConfiguracion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracion',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::pvpfuVXMbPVPDkVk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dRlM6LkVgGt4beph' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/my-company/guardarConfiguracionSunat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarConfiguracionSunat',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@guardarConfiguracionSunat',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::dRlM6LkVgGt4beph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SGIIqREOvkYcq7Ei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/my-company/getConfiguracionSunat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracionSunat',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracionSunat',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::SGIIqREOvkYcq7Ei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZNYL1RVrWVYudPji' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/my-company/getConfiguracionDashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyCompanyController@getConfiguracion',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::ZNYL1RVrWVYudPji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6QPyyr0AoWd1leN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/users/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::s6QPyyr0AoWd1leN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pz2YvVGdh2tsQGLf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/users/registrar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@registrar',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@registrar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::pz2YvVGdh2tsQGLf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ra75IZ4bf8CPPhFJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/users/checkLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@checkLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@checkLogin',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::ra75IZ4bf8CPPhFJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ySOmo81oEHIoE64G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/categoria/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@save',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@save',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::ySOmo81oEHIoE64G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FiYWPv6rIE2oggbu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/categoria/find/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@find',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@find',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::FiYWPv6rIE2oggbu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVqNWI6fNIYMQWCU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/categoria/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@list',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::nVqNWI6fNIYMQWCU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3RFPkFQcUJ60G5A3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/categoria/modify/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@modify',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@modify',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::3RFPkFQcUJ60G5A3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nI53EftrUlclOo9e' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/categoria/activate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@activate',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::nI53EftrUlclOo9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B9fEgICzxrT0N5pU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/categoria/desactivate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@desactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@desactivate',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::B9fEgICzxrT0N5pU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CiJTBIpQkQevyU7o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/categoria/list/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@listActive',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@listActive',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::CiJTBIpQkQevyU7o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kWcQX8FWIIx14uv3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'des/api/v1/categoria/eliminar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriaController@eliminar',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriaController@eliminar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::kWcQX8FWIIx14uv3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yX2ya81Wog8YziBb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/menu/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@list',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/menu',
        'where' => 
        array (
        ),
        'as' => 'generated::yX2ya81Wog8YziBb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8blm8fntBxqPKga' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/kardex/corregirStock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KardexController@corregirStock',
        'controller' => 'App\\Http\\Controllers\\Admin\\KardexController@corregirStock',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/kardex',
        'where' => 
        array (
        ),
        'as' => 'generated::K8blm8fntBxqPKga',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::txICA53BNHwBARhq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/kardex/getStock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KardexController@getStock',
        'controller' => 'App\\Http\\Controllers\\Admin\\KardexController@getStock',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/kardex',
        'where' => 
        array (
        ),
        'as' => 'generated::txICA53BNHwBARhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GHYtmSJUlVvbTOos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/producto-presentacion/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::GHYtmSJUlVvbTOos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8psLyyWhdoialD1g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/producto-presentacion/buscar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@buscar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@buscar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::8psLyyWhdoialD1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fYnJ9D4F0Pg90Px4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/producto-presentacion/listByProducto/{idProducto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@listByProducto',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@listByProducto',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::fYnJ9D4F0Pg90Px4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i73QOJn2d54Z886G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/producto-presentacion/modificar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@modificar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@modificar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::i73QOJn2d54Z886G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G1Wh4uKGgvNaV8vW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/producto-presentacion/activar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@activar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@activar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::G1Wh4uKGgvNaV8vW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dqai3IcnJ7fAy3P1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/producto-presentacion/desactivar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@desactivar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@desactivar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::dqai3IcnJ7fAy3P1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g35jRCvAJB6rU9ZU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/producto-presentacion/porDefecto/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@porDefecto',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@porDefecto',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::g35jRCvAJB6rU9ZU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7V1l0jNsO4goGHT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'des/api/v1/producto-presentacion/eliminar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@eliminar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductoPresentacionController@eliminar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/producto-presentacion',
        'where' => 
        array (
        ),
        'as' => 'generated::b7V1l0jNsO4goGHT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::43QhW0gIuC4PNkBR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/banner/guardar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@guardar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@guardar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::43QhW0gIuC4PNkBR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJoN8YDyajyR1q8B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/banner/buscar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@buscar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@buscar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::cJoN8YDyajyR1q8B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4uB0UEga8PhVepIi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/v1/banner/listar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@listar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@listar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::4uB0UEga8PhVepIi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Do4AtfAHmmvg8KGk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/v1/banner/modificar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@modificar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@modificar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::Do4AtfAHmmvg8KGk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NY6Vd1ht70pWDBVz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/banner/activar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@activar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@activar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::NY6Vd1ht70pWDBVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LrdhkMNt9VWxbanE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/banner/desactivar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@desactivar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@desactivar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::LrdhkMNt9VWxbanE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gGttlNHLRHECGNco' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'des/api/v1/banner/eliminar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@eliminar',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@eliminar',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::gGttlNHLRHECGNco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j0Y0xfGn6Rmur0Mq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'des/api/v1/banner/changeOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@changeOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@changeOrder',
        'namespace' => NULL,
        'prefix' => 'des/api/v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::j0Y0xfGn6Rmur0Mq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::093Vv814nRkM7Zwt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/categoria/listActiveWithProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoriaController@listActiveWithProducts',
        'controller' => 'App\\Http\\Controllers\\User\\CategoriaController@listActiveWithProducts',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::093Vv814nRkM7Zwt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::plEc4LBVUKmT9sIX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/categoria/listActiveDropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoriaController@listActiveDropdownEcommerce',
        'controller' => 'App\\Http\\Controllers\\User\\CategoriaController@listActiveDropdownEcommerce',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::plEc4LBVUKmT9sIX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sj4LlTgK6DcmljBC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/my-company/getInformacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MyCompanyController@getInformacion',
        'controller' => 'App\\Http\\Controllers\\User\\MyCompanyController@getInformacion',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::sj4LlTgK6DcmljBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z2mxuCMTiThZWIHR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/my-company/getData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MyCompanyController@getData',
        'controller' => 'App\\Http\\Controllers\\User\\MyCompanyController@getData',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/my-company',
        'where' => 
        array (
        ),
        'as' => 'generated::z2mxuCMTiThZWIHR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FZUjnGMgW7adzqsU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/producto/findByCodigo/{codigo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ProductoController@findByCodigo',
        'controller' => 'App\\Http\\Controllers\\User\\ProductoController@findByCodigo',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::FZUjnGMgW7adzqsU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HIEnaNPf8kfMKGWZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/producto/listByCategoria/{idCategoria}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ProductoController@findByCategoria',
        'controller' => 'App\\Http\\Controllers\\User\\ProductoController@findByCategoria',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/producto',
        'where' => 
        array (
        ),
        'as' => 'generated::HIEnaNPf8kfMKGWZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yWe6oL068RlQhKKE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/ecommerce-v1/cliente/registrar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ClienteController@registrar',
        'controller' => 'App\\Http\\Controllers\\User\\ClienteController@registrar',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::yWe6oL068RlQhKKE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CuwJ4XtFXEbqUPw6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/ecommerce-v1/cliente/trabaja-con-nosotros',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ClienteController@trabajaConNosotros',
        'controller' => 'App\\Http\\Controllers\\User\\ClienteController@trabajaConNosotros',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::CuwJ4XtFXEbqUPw6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uW4YZUrh3cF6NE0O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'des/api/ecommerce-v1/cliente/contactanos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ClienteController@contactanos',
        'controller' => 'App\\Http\\Controllers\\User\\ClienteController@contactanos',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/cliente',
        'where' => 
        array (
        ),
        'as' => 'generated::uW4YZUrh3cF6NE0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q6Tg3xd1ROPCElAA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/api/ecommerce-v1/banner/listarActivos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BannerController@listarActivos',
        'controller' => 'App\\Http\\Controllers\\User\\BannerController@listarActivos',
        'namespace' => NULL,
        'prefix' => 'des/api/ecommerce-v1/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::Q6Tg3xd1ROPCElAA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b0j0kMbnuDZ3bFJo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:266:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
    //do nothing;
    return "";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005c00000000000000000";}";s:4:"hash";s:44:"/AzkBL0bigMdW6PH8NQ7Oh+ezat00aSSY/aJZ2Jma44=";}}',
        'namespace' => NULL,
        'prefix' => 'des',
        'where' => 
        array (
        ),
        'as' => 'generated::b0j0kMbnuDZ3bFJo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngbQqbpDi2WF4hPZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/config-server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:454:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:235:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:cache\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:cache\');

    return \'Server configurado\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000060e0000000000000000";}";s:4:"hash";s:44:"oyB89yaFoPoqVYp+pAdL5Y1INbwzi9DBhT5USfmtEzU=";}}',
        'namespace' => NULL,
        'prefix' => 'des',
        'where' => 
        array (
        ),
        'as' => 'generated::ngbQqbpDi2WF4hPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N1vTZAIKF5TrRHyC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'des/checkEnvironment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:250:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:32:"function () {
    return true;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006100000000000000000";}";s:4:"hash";s:44:"b4uEI3mBt5TIAwQE18pMlwo3+lNJGtMDDvAIxm/OWQU=";}}',
        'namespace' => NULL,
        'prefix' => 'des',
        'where' => 
        array (
        ),
        'as' => 'generated::N1vTZAIKF5TrRHyC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3lhVkZIkrOibW7xS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'secode/updateEnvironments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'secode',
        ),
        'uses' => 'App\\Http\\Controllers\\Secode\\MainController@updateEnvironments',
        'controller' => 'App\\Http\\Controllers\\Secode\\MainController@updateEnvironments',
        'namespace' => NULL,
        'prefix' => 'secode',
        'where' => 
        array (
        ),
        'as' => 'generated::3lhVkZIkrOibW7xS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
