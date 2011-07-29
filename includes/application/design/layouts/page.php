<?php return array(
    '1column' => array(
        'update' => 'default'
        ),

    '2columns-left' => array(
        'update' => 'default',
        'template' => 'page/2columns-left.phtml',
        'reference' => array(
            'root' => array(
                'children' => array(
                    'left' => array(
                        'type' => 'core/concat'
                        ),
                    )
                )
            )
        ),

    '2columns-right' => array(
        'update' => 'default',
        'template' => 'page/2columns-right.phtml',
        'reference' => array(
            'root' => array(
                'children' => array(
                    'right' => array(
                        'type' => 'core/concat'
                        ),
                    )
                )
            )
        ),

    '3columns' => array(
        'update' => 'default',
        'template' => 'page/3columns.phtml',
        'reference' => array(
            'root' => array(
                'children' => array(
                    'left' => array(
                        'type' => 'core/concat'
                        ),
                    'right' => array(
                        'type' => 'core/concat'
                        ),
                    )
                )
            )
        ),

    'default' => array(
        'type' => 'core/html.page',
        'template' => 'page/1column.phtml',
        'children' => array(
            'head' => array(
                'type' => 'core/html.head',
                'template' => 'page/html/head.phtml',
                'actions' => array(
                    array(
                        'method' => 'addCss',
                        'params' => array(
                            'stylesheet' => 'css/default.css'
                            )
                        ),
                    array(
                        'method' => 'addCss',
                        'params' => array(
                            'stylesheet' => 'css/formate.css'
                            )
                        )
                    )
                ),
            'header' => array(
                'type' => 'core/template',
                'template' => 'page/html/header.phtml',
                'children' => array(
                    'menu' => array(
                        'type'     => 'core/html.navigation',
                        'template' => 'page/html/navigation.phtml',
                        ),
                    'planet-list' => array(
                        'type'     => 'empire/planet-list',
                        'template' => 'empire/planet-list.phtml',
                        )
                    )
                ),
            'footer' => array(
                'type' => 'core/template',
                'template' => 'page/html/footer.phtml'
                ),
            'content' => array(
                'type' => 'core/concat'
                )
            )
        ),

    'ajax' => array(
        'type' => 'core/html.page',
        'template' => 'page/empty.phtml',
        'children' => array(
            'content' => array(
                'type' => 'core/concat'
                )
            )
        ),

    'empty' => array(
        'type' => 'core/html.page',
        'template' => 'page/empty.phtml',
        'children' => array(
            'head' => array(
                'type' => 'core/html.head',
                'template' => 'page/html/head.phtml'
                ),
            'content' => array(
                'type' => 'core/concat'
                )
            )
        ),

    'message' => array(
        'update' => 'default',
        'reference' => array(
            'content' => array(
                'children' => array(
                    'message' => array(
                        'type'     => 'core/template',
                        'template' => 'page/html/message.phtml'
                        ),
                    )
                )
            )
        )
    );
