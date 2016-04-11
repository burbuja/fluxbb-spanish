<?php

$lang_admin_options = array(

'Bad HTTP Referer message' => 'Mal HTTP_REFERER. Si has movido estos foros desde una ubicación a otra o cambiaste de dominio, necesitas actualizar la URL base manualmente en la base de datos (busca o_base_url en la tabla config) y luego limpia la caché eliminando todos los archivos .php en el directorio /cache.',
'Must enter title message' => 'Debes ingresar un título para el foro.',
'Invalid e-mail message' => 'La dirección de correo del administrador que ingresaste no es válida.',
'Invalid webmaster e-mail message' => 'La dirección de correo electrónico del webmaster que ingresaste no es válida.',
'SMTP passwords did not match' => 'Necesitas ingresar la contraseña del servidor SMTP dos veces iguales para cambiarla.',
'Enter announcement here' => 'Ingresa tu anuncio aquí.',
'Enter rules here' => 'Ingresa tus reglas aquí.',
'Default maintenance message' => 'Los foros están temporalmente desactivados por mantenimiento. Por favor intenta ingresar de nuevo dentro de unos pocos minutos.',
'Timeout error message' => 'The value of "Timeout online" must be smaller than the value of "Timeout visit".',
'Options updated redirect' => 'Opciones actualizadas. Redirigiendo…',
'Options head' => 'Opciones',
'Essentials subhead' => 'Esenciales',
'Board title label' => 'Título del foro',
'Board title help' => 'El título de este foro (mostrado en el encabezado de cada página). Este campo <strong>no</strong> puede contener HTML.',
'Board desc label' => 'Descripción del foro',
'Board desc help' => 'Una corta descripción de este foro (mostrado en el encabezado de cada página). Este campo puede contener HTML.',
'Base URL label' => 'URL base',
'Base URL help' => 'The complete URL of the board without trailing slash (i.e. http://www.mydomain.com/forums). This <strong>must</strong> be correct in order for all admin and moderator features to work. If you get "Bad referer" errors, it\'s probably incorrect.',
'Base URL problem' => 'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter in order to avoid "Bad referer" errors.',
'Timezone label' => 'Zona horaria predeterminada',
'Timezone help' => 'La zona horaria predeterminada para los invitados y usuarios que deseen registrarse en el foro.',
'DST label' => 'Ajustar para el horario de verano',
'DST help' => 'Activar si el horario de verano está en efecto (adelanta la hora en 1 hora).',
'Language label' => 'Idioma predeterminado',
'Language help' => 'El idioma predeterminado para los invitados y usuarios que no han cambiado desde el predeterminado en sus perfiles. Si quitas un paquete de idioma, esto se debe actualizar.',
'Default style label' => 'Estilo predeterminado',
'Default style help' => 'El estilo predeterminado para invitados y usuarios que no lo hayan cambiado desde el predeterminado en sus perfiles.',
'UTC-12:00' => '(UTC-12:00) Línea Internacional de Cambio de Fecha Occidental',
'UTC-11:00' => '(UTC-11:00) Niue, Samoa',
'UTC-10:00' => '(UTC-10:00) Hawaii-Aleutianas, Islas Cook',
'UTC-09:30' => '(UTC-09:30) Islas Marquesas',
'UTC-09:00' => '(UTC-09:00) Alaska, Isla Gambier',
'UTC-08:30' => '(UTC-08:30) Islas Pitcairn',
'UTC-08:00' => '(UTC-08:00) Pacífico',
'UTC-07:00' => '(UTC-07:00) Montaña',
'UTC-06:00' => '(UTC-06:00) Central',
'UTC-05:00' => '(UTC-05:00) Oriental',
'UTC-04:00' => '(UTC-04:00) Atlántico',
'UTC-03:30' => '(UTC-03:30) Terranova',
'UTC-03:00' => '(UTC-03:00) Amazonas, Groenlandia Central',
'UTC-02:00' => '(UTC-02:00) Atlántico Medio',
'UTC-01:00' => '(UTC-01:00) Azores, Cabo Verde, Groenlandia Oriental',
'UTC' => '(UTC) Europa Occidental, Greenwich',
'UTC+01:00' => '(UTC+01:00) Europa Central, África Occidental',
'UTC+02:00' => '(UTC+02:00) Europa Oriental, África Central',
'UTC+03:00' => '(UTC+03:00) África Oriental',
'UTC+03:30' => '(UTC+03:30) Irán',
'UTC+04:00' => '(UTC+04:00) Moscú, Golfo, Samara',
'UTC+04:30' => '(UTC+04:30) Afganistán',
'UTC+05:00' => '(UTC+05:00) Pakistán',
'UTC+05:30' => '(UTC+05:30) India, Sri Lanka',
'UTC+05:45' => '(UTC+05:45) Nepal',
'UTC+06:00' => '(UTC+06:00) Bangladés, Bután, Ekaterimburgo',
'UTC+06:30' => '(UTC+06:30) Islas Cocos, Birmania',
'UTC+07:00' => '(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00' => '(UTC+08:00) Gran China, Australia Occidental, Krasnoyarsk',
'UTC+08:45' => '(UTC+08:45) Australia Occidental Sudoriental',
'UTC+09:00' => '(UTC+09:00) Japón, Corea, Chitá, Irkutsk',
'UTC+09:30' => '(UTC+09:30) Australia Central',
'UTC+10:00' => '(UTC+10:00) Australia Oriental',
'UTC+10:30' => '(UTC+10:30) Lord Howe',
'UTC+11:00' => '(UTC+11:00) Islas Salomón, Vladivostok',
'UTC+11:30' => '(UTC+11:30) Isla Norfolk',
'UTC+12:00' => '(UTC+12:00) Nueva Zelanda, Fiji, Magadán',
'UTC+12:45' => '(UTC+12:45) Islas Chatham',
'UTC+13:00' => '(UTC+13:00) Tonga, Islas Fénix, Kamchatka',
'UTC+14:00' => '(UTC+14:00) Islas de la Línea',
'Timeouts subhead' => 'Tiempo y tiempos de espera',
'Time format label' => 'Formato de hora',
'PHP manual' => 'Manual de PHP',
'Time format help' => '[Formato actual: %s]. Revisa %s para opciones de formato.',
'Date format label' => 'Formato de fecha',
'Date format help' => '[Formato actual: %s]. Revisa %s para opciones de formato.',
'Visit timeout label' => 'Tiempo de espera de la visita',
'Visit timeout help' => 'El número de segundos en que un usuario debe estar inactivo antes de que se actualicen los datos de su última visita (principalmente afecta a los indicadores de nuevos mensajes).',
'Online timeout label' => 'Tiempo de espera en línea',
'Online timeout help' => 'Número de segundos que un usuario debe estar inactivo antes de ser quitado de la lista de usuarios en línea.',
'Redirect time label' => 'Tiempo de redirección',
'Redirect time help' => 'Número de segundos a esperar cuando se redirige. Si está establecido en 0, no se mostrará la página de redireccionamiento (no recomendado).',
'Display subhead' => 'Mostrar',
'Version number label' => 'Número de la versión',
'Version number help' => 'Mostrar el número de versión de FluxBB en el pie de página.',
'Info in posts label' => 'Información del usuario en las publicaciones',
'Info in posts help' => 'Mostrar información acerca del que publica, debajo del nombre de usuario en la vista del tema. La información afectada es ubicación, fecha de registro, contador de publicaciones y los enlaces de contacto (correo electrónico y URL).',
'Post count label' => 'Cuenta de publicaciones del usuario',
'Post count help' => 'Mostrar el número de publicaciones que el usuario ha hecho (afecta a la vista de tema, perfil y lista de usuarios).',
'Smilies label' => 'Emoticones en las publicaciones',
'Smilies help' => 'Convertir los emoticones en pequeños íconos gráficos.',
'Smilies sigs label' => 'Emoticones en las firmas',
'Smilies sigs help' => 'Convertir los emoticones en pequeños íconos gráficos en las firmas de los usuarios.',
'Clickable links label' => 'Permitir hacer clic en los enlaces',
'Clickable links help' => 'Cuando está habilitado, FluxBB detectará automáticamente cualquier URL en las publicaciones y las convertirá en enlaces.',
'Topic review label' => 'Revisión del tema',
'Topic review help' => 'Número máximo de publicaciones para mostrar al publicar (la más reciente primero). Establece en 0 para desactivar.',
'Topics per page label' => 'Temas por página',
'Topics per page help' => 'El número predeterminado de temas a desplegar por página en un foro. Los usuarios pueden personalizar esta configuración.',
'Posts per page label' => 'Publicaciones por página',
'Posts per page help' => 'El número predeterminado de publicaciones a desplegarse por página en cualquier tema. Los usuarios pueden personalizar esta preferencia.',
'Indent label' => 'Tamaño de la indentación',
'Indent help' => 'Si está establecido en 8, se usará un tab regular cuando se muestre texto entre las etiquetas [code] y [/code]. De otra forma, se usarán muchos espacios para sangrar el texto.',
'Quote depth label' => 'Profundidad máxima de [quote]',
'Quote depth help' => 'La cantidad máxima para que la etiqueta [quote] vaya dentro de otras etiquetas [quote], toda etiqueta que tenga un nivel más profundo que este, se eliminará.',
'Features subhead' => 'Características',
'Quick post label' => 'Respuesta rápida',
'Quick post help' => 'Cuando está habilitado, FluxBB agregará un formulario de respuesta rápida al final de cada tema. De esta forma, los usuarios pueden publicar directamente desde la vista de tema.',
'Users online label' => 'Usuarios en línea',
'Users online help' => 'Desplegar información en la página de índice acerca de los invitados y los usuarios registrados explorando actualmente el foro.',
'Censor words label' => 'Censurar palabras',
'Censor words help' => 'Permite que esto censure palabras específicas en el foro. Revisa %s para mayor información.',
'Signatures label' => 'Firmas',
'Signatures help' => 'Permite que los usuarios adjunten una firma a sus publicaciones.',
'User has posted label' => 'El usuario ha publicado antes',
'User has posted help' => 'Esta característica muestra un punto frente a los temas en viewforum.php en el caso de que el usuario que inició sesión haya publicado en ese tema antes. Desactívalo si experimentas una alta carga del servidor.',
'Topic views label' => 'Vistas del tema',
'Topic views help' => 'Hacer seguimiento del número de vistas que tiene un tema. Desactiva si experimentas una carga alta del servidor en un foro muy visitado.',
'Quick jump label' => 'Salto rápido',
'Quick jump help' => 'Habilitar el menú desplegable de salto rápido (saltar al foro).',
'GZip label' => 'Salida GZip',
'GZip help' => 'Si está activado, FluxBB comprimirá en formato gzip la salida enviada a los navegadores. Esto reducirá el uso de ancho de banda, pero usa un poco más de CPU. Esta característica requiere que PHP se encuentre configurado con zlib (--with-zlib). Nota: Si ya tienes uno de los módulos de Apache mod_gzip o mod_deflate configurados para comprimir <i>scripts</i> en PHP, deberías desactivar esta característica.',
'Search all label' => 'Buscar en todos los foros',
'Search all help' => 'Cuando está desactivado, solo se permitirán las búsquedas en un solo foro a la vez. Desactívalo si la carga del servidor es alta, debido al exceso de búsquedas.',
'Menu items label' => 'Ítems adicionales del menú',
'Menu items help' => 'By entering HTML hyperlinks into this textbox, any number of items can be added to the navigation menu at the top of all pages. The format for adding new links is X = &lt;a href="URL"&gt;LINK&lt;/a&gt; where X is the position at which the link should be inserted (e.g. 0 to insert at the beginning and 2 to insert after "User list"). Separate entries with a linebreak.',
'Feed subhead' => 'Sindicación',
'Default feed label' => 'Tipo de fuente predeterminada',
'Default feed help' => 'Selecciona el tipo de fuente de sindicación para desplegar. Nota: Elegir nada, no desactivará las fuentes, solo las ocultará de forma predeterminada.',
'None' => 'Ninguno',
'RSS' => 'RSS',
'Atom' => 'Atom',
'Feed TTL label' => 'Duración para guardar en caché las fuentes',
'Feed TTL help' => 'Las fuentes pueden guardarse en caché para reducir el uso de recursos.',
'No cache' => 'No guardar en caché',
'Minutes' => '%d minutos',
'Reports subhead' => 'Informes',
'Reporting method label' => 'Método de gestión de informes',
'Internal' => 'Interno',
'By e-mail' => 'Correo electrónico',
'Both' => 'Ambos',
'Reporting method help' => 'Selecciona el método para manejar los informes de tema o publicación. Puedes elegir si los informes de tema o publicación sean manejados por el sistema de informe interno, enviados por correo electrónico a las direcciones en la lista de correo (ver más abajo) o ambos.',
'Mailing list label' => 'Lista de correo',
'Mailing list help' => 'Una lista de suscriptores separada por comas. Las personas en esta lista son los destinatarios de los informes.',
'Avatars subhead' => 'Avatares',
'Use avatars label' => 'Utilizar avatares',
'Use avatars help' => 'Cuando está habilitado, los usuarios podrán cargar un avatar, el cual se mostrará bajo su título.',
'Upload directory label' => 'Directorio de carga',
'Upload directory help' => 'El directorio de carga para avatares (relativo al directorio raíz de FluxBB). PHP debe tener permisos de escritura a este directorio.',
'Max width label' => 'Ancho máximo',
'Max width help' => 'El ancho máximo permitido de los avatares en píxeles (se recomiendan 60).',
'Max height label' => 'Altura máxima',
'Max height help' => 'La altura máxima permitida para los avatares en píxeles (se recomiendan 60).',
'Max size label' => 'Tamaño máximo',
'Max size help' => 'El tamaño máximo de los avatares en bytes (se recomiendan 10240).',
'E-mail subhead' => 'Correo electrónico',
'Admin e-mail label' => 'Correo electrónico de administración',
'Admin e-mail help' => 'La dirección de correo electrónico del administrador del foro.',
'Webmaster e-mail label' => 'Correo electrónico del webmaster',
'Webmaster e-mail help' => 'Esta es la dirección desde la que todos los correos electrónicos enviados por el foro serán remitidos.',
'Forum subscriptions label' => 'Suscripciones al foro',
'Forum subscriptions help' => 'Permite que los usuarios se suscriban a los foros (reciban correo electrónico cuando alguien crea un nuevo tema).',
'Topic subscriptions label' => 'Suscripciones al tema',
'Topic subscriptions help' => 'Permite que los usuarios se suscriban a los temas (reciben correo electrónico cuando alguien responde).',
'SMTP address label' => 'Dirección del servidor SMTP',
'SMTP address help' => 'La dirección de un servidor SMTP externo con el que se envían correos electrónicos. Debes especificar un puerto personalizado si el servidor SMTP no se ejecuta en el puerto predeterminado 25 (ej. correo.mihost.com:3580). Deja en blanco para utilizar el programa de correo local.',
'SMTP username label' => 'Nombre de usuario del servidor SMTP',
'SMTP username help' => 'El nombre de usuario para el servidor SMTP. Solo ingresa un nombre de usuario si el servidor SMTP lo requiere (la mayoría de los servidores <strong>no</strong> requieren autenticación).',
'SMTP password label' => 'Contraseña del servidor SMTP',
'SMTP change password help' => 'Revisa esto si quieres cambiar o eliminar la contraseña guardada.',
'SMTP password help' => 'La contraseña para el servidor SMTP. Solo ingresa una contraseña si el servidor SMTP la requiere (la mayoría de los servidores <strong>no</strong> requieren autenticación). Por favor ingresa tu contraseña dos veces para confirmar.',
'SMTP SSL label' => 'Encriptar SMTP usando SSL',
'SMTP SSL help' => 'Cifra la conexión al servidor SMTP usando SSL. Debería usarse solo si tu servidor SMTP lo requiere y si la versión de PHP soporta SSL.',
'Registration subhead' => 'Registro',
'Allow new label' => 'Permitir nuevos registros',
'Allow new help' => 'Controla el que este foro acepte nuevos registros. Desactívalo solo bajo circunstancias especiales.',
'Verify label' => 'Verificar las registros',
'Verify help' => 'When enabled, users are emailed a random password when they register. They can then log in and change the password in their profile if they see fit. This feature also requires users to verify new email addresses if they choose to change from the one they registered with. This is an effective way of avoiding registration abuse and making sure that all users have "correct" email addresses in their profiles.',
'Report new label' => 'Informar sobre nuevos registros',
'Report new help' => 'Si está habilitado, FluxBB notificará a los usuarios en la lista de correo (ver más arriba), cuando un nuevo usuario se registre en los foros.',
'Use rules label' => 'Reglas del usuario del foro',
'Use rules help' => 'Cuando está habilitado, los usuarios deben estar de acuerdo con un conjunto de reglas cuando se registren (ingresa texto a continuación). Estas reglas siempre estarán disponibles a través de un enlace en la tabla de navegación, en el encabezado de cada página.',
'Rules label' => 'Ingresa tus reglas aquí',
'Rules help' => 'Aquí puedes ingresar las reglas u otra información que el usuario debe revisar y aceptar cuando se registre. Si habilitaste las reglas de más arriba, tienes que ingresar algo aquí, de otra forma, no se desactivará. Este texto no será analizado como una publicación regular, y por lo tanto, puede contener HTML.',
'E-mail default label' => 'Preferencias predeterminadas del correo electrónico',
'E-mail default help' => 'Elige la configuración de privacidad predeterminada para el registro de nuevos usuarios.',
'Display e-mail label' => 'Mostrar la dirección de correo electrónico a los otros usuarios.',
'Hide allow form label' => 'Esconder la dirección de correo electrónico, pero permitir el formulario de correo electrónico.',
'Hide both label' => 'Ocultar la dirección de correo electrónico y desactivar el formulario de correo electrónico.',
'Announcement subhead' => 'Anuncios',
'Display announcement label' => 'Desplegar el anuncio',
'Display announcement help' => 'Habilita esto para mostrar el mensaje de abajo en el foro.',
'Announcement message label' => 'Mensaje de anuncio',
'Announcement message help' => 'Este texto no se puede analizar como las publicaciones regulares y, por lo tanto, puede contener HTML.',
'Maintenance subhead' => 'Mantenimiento',
'Maintenance mode label' => 'Modo de mantenimiento',
'Maintenance mode help' => 'Cuando está habilitado, el foro solo estará disponible para administradores. Esto debería usarse si se necesita dejar el foro temporalmente en mantenimiento. <strong>¡ADVERTENCIA! No cierres sesión cuando el foro esté en el modo de mantenimiento.</strong> No podrás iniciar sesión de nuevo.',
'Maintenance message label' => 'Mensaje de mantenimiento',
'Maintenance message help' => 'El mensaje que será mostrado a los usuarios cuando el foro se encuentre en modo de mantenimiento. Si se deja en blanco, se usará un mensaje predeterminado. Este texto no será analizado como las publicaciones regulares y, por lo tanto, puede contener HTML.',

);