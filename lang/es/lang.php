<?php

return [
    'plugin' => [
        'name' => 'Páginas',
        'description' => 'Páginas y características de menús.',
    ],
    'page' => [
        'menu_label' => 'Páginas',
        'delete_confirmation' => '¿De verdad quiere eliminar las páginas seleccionadas? Esto también eliminará las subpáginas, en caso de que exista alguna.',
        'no_records' => 'No se encontraron páginas',
        'delete_confirm_single' => '¿De verdad quiere borrar esta página? Esto también eliminará las subpáginas, en caso de que exista alguna.',
        'new' => 'Nueva página',
        'add_subpage' => 'Añadir subpágina',
        'invalid_url' => 'Formato de URL no válida. La URL debe comenzar con el símbolo de barra diagonal y puede contener dígitos, letras latinas y los siguientes símbolos: _- /',
        'url_not_unique' => 'Esta URL ya está utilizada por otra página.',
        'layout' => 'Diseño',
        'layouts_not_found' => 'los diseños no se encontraron',
        'saved' => 'La página ha sido guardada con éxito.',
        'tab' => 'Páginas',
        'manage_pages' => 'Administrar páginas estáticas',
        'manage_menus' => 'Administrar menús estáticos',
        'access_snippets' => 'Acceder a snippets (fragmentos)',
        'manage_content' => 'Administrar contenido estático'
    ],
    'menu' => [
        'menu_label' => 'Menús',
        'delete_confirmation' => '¿De verdad quiere eliminar menús seleccionados?',
        'no_records' => 'No hay menús encontrados',
        'new' => 'Nuevo menú',
        'new_name' => 'Nuevo menú',
        'new_code' => 'new-menu',
        'delete_confirm_single' => '¿Realmente deseas eliminar este menú?',
        'saved' => 'El menú ha sido guardado con éxito.',
        'name' => 'Nombre',
        'code' => 'Código',
        'items' => 'Elementos de menú',
        'add_subitem' => 'Añadir sub-elemento',
        'no_records' => 'No se encontraron elementos',
        'code_required' => 'El  código es obligatorio',
        'invalid_code' => 'Formato de código no válido. El Código puede contener dígitos, letras latinas y los siguientes símbolos: _-'
    ],
    'menuitem' => [
        'title' => 'Título',
        'editor_title' => 'Editar Elemento del menú',
        'type' => 'Tipo',
        'allow_nested_items' => 'Permitir elementos anidados',
        'allow_nested_items_comment' => 'Elementos anidados se podrían generar dinámicamente por página estática y algunos otros tipos de elementos',
        'url' => 'URL',
        'reference' => 'Referencia',
        'title_required' => 'El título es obligatorio',
        'unknown_type' => 'Tipo de elemento de menú desconocido',
        'unnamed' => 'Elemento de menú Sin nombre',
        'add_item' => 'Agregar <u>E</u>lemento',
        'new_item' => 'Nuevo elemento de menú',
        'replace' => 'Reemplace este artículo con sus hijos generados',
        'replace_comment' => 'Utilice esta opción para empujar los elementos de menú generados en el mismo nivel con este artículo. Este artículo propio se ocultará.',
        'cms_page' => 'Página CMS',
        'cms_page_comment' => 'Seleccione una página para abrir cuando se haga clic en el elemento de menú.',
        'reference_required' => 'La referencia de elemento de menú es obligatoria.',
        'url_required' => 'La URL es obligatoria',
        'cms_page_required' => 'Por favor seleccione la página CMS',
        'code' => 'Código',
        'code_comment' => 'Ingrese el código de elemento de menú si desea acceder a él con la API.'
    ],
    'content' => [
        'menu_label' => 'Contenido',
        'cant_save_to_dir' => 'Guardar archivos de contenido en el directorio páginas-estáticas no está permitido.'
    ],
    'sidebar' => [
        'add' => 'Agregar',
        'search' => 'Buscar...'
    ],
    'object' => [
        'invalid_type' => 'Tipo de objeto desconocido',
        'not_found' => 'No se encontró el objeto solicitado.'
    ],
    'editor' => [
        'title' => 'Título',
        'new_title' => 'Nuevo título de la página',
        'content' => 'Contenido',
        'url' => 'URL',
        'filename' => 'Nombre del archivo',
        'layout' => 'Diseño',
        'description' => 'Descripción',
        'preview' => 'Vista previa',
        'enter_fullscreen' => 'Entre en el modo de pantalla completa',
        'exit_fullscreen' => 'Salir del modo de pantalla completa',
        'hidden' => 'Oculto',
        'hidden_comment' => 'Las páginas ocultas solo pueden ser accedidas por los usuarios back-end registrados.',
        'navigation_hidden' => 'Ocultar en la navegación',
        'navigation_hidden_comment' => 'Marque esta casilla para oultar esta página de los menús y migas de pan (breadcrumbs) generados automáticamente.',
    ],
    'snippet' => [
        'partialtab' => 'Fragmento (Snippet)',
        'code' => 'Código del fragmento',
        'code_comment' => 'Introduzca un código para hacer este parcial disponible como un fragmento en el plugin Páginas estáticas.',
        'name' => 'Nombre',
        'name_comment' => 'El nombre se muestra en la lista de fragmento en la barra lateral de páginas estáticas y en una página cuando se añade un fragmento.',
        'no_records' => 'No hay fragmentos encontrados',
        'menu_label' => 'Fragmentos',
        'column_property' => 'Título de propiedad',
        'column_type' => 'Tipo',
        'column_code' => 'Código',
        'column_default' => 'Predeterminado',
        'column_options' => 'Opciones',
        'column_type_string' => 'String',
        'column_type_checkbox' => 'Checkbox',
        'column_type_dropdown' => 'Dropdown',
        'not_found' => 'Fragmento con el código de solicitud :code no se encontró en el tema.',
        'property_format_error' => 'El código de la propiedad debe comenzar con una letra latina y sólo puede contener letras latinas y cifras',
        'invalid_option_key' => 'Llave de opción desplegable no válida: %s. Las llaves pueden contener sólo dígitos, letras latinas y caracteres <b>_</b> y <b>-</b>'
    ]
];
