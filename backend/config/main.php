<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,

    'modules' => [
        'categoria' => [
            'class' => 'backend\modules\categoria\Categoria',
        ],
        'contacto' => [
            'class' => 'backend\modules\contacto\Contacto',
        ],
        'cliente' => [
            'class' => 'backend\modules\cliente\Cliente',
        ],
        'orden' => [
                'class' => 'backend\modules\orden\Orden',
            ],        
        'pedido' => [
                'class' => 'backend\modules\pedido\Pedido',
            ],  
        'calculador' => [
                'class' => 'backend\modules\calculador\Calculador',
            ],
        
        'cotizador' => [
                'class' => 'backend\modules\cotizador\Cotizador',
            ],   
            
        'color' => [
                'class' => 'backend\modules\color\Color',
            ],

        'impresion' => [
                'class' => 'backend\modules\impresion\Impresion',
            ],
    
        'medida' => [
                'class' => 'backend\modules\medida\Medida',
            ],
        
        'materia' => [
                'class' => 'backend\modules\materia\Materia',
            ],

      
        'cotitarjeta' => [
                'class' => 'backend\modules\cotitarjeta\Cotitarjeta',
            ],
     
        'cotilona' => [
                'class' => 'backend\modules\cotilona\Cotilona',
            ],
    
        'Cotitaza' => [
                'class' => 'backend\modules\cotitaza\Cotitaza',
            ],
    
        'cotplayera' => [
                'class' => 'backend\modules\cotplayera\Cotplayera',
            ],

        'compra' => [
                'class' => 'backend\modules\compra\Compra',
            ],
        
        'comprafinal' => [
                'class' => 'backend\modules\comprafinal\Comprafinal',
            ],
        
            'estampado' => [
                'class' => 'backend\modules\estampado\Estampado',
            ],

            'talla' => [
                'class' => 'backend\modules\talla\Talla',
            ],

            'compralona' => [
                'class' => 'backend\modules\compralona\Compralona',
            ],
    
            'compraplayera' => [
                'class' => 'backend\modules\compraplayera\Compraplayera',
            ],
    
            'compratarjeta' => [
                'class' => 'backend\modules\compratarjeta\Compratarjeta',
            ],
    
            'comprataza' => [
                'class' => 'backend\modules\comprataza\Comprataza',
            ],
    
    
            'compratotal' => [
                'class' => 'backend\modules\compratotal\Compratotal',
            ],
    

    
    ],

    'components'=>[
        'assetManager'=>[
            'appendTimestamp'=>true
        ],
    'user' => [
        'identityClass' => 'common\models\User',
        'enableAutoLogin' => true
    ]
    ]
    

    
];
