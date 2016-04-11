<?php

$lang_update = array(

'Update' => 'Actualizar FluxBB',
'Update message' => 'La base de datos de FluxBB está desactualizada y se debe actualizar para contiuar. Si eres el administrador del foro, por favor sigue las instrucciones más abajo para completar la actualización.',
'Note' => 'Nota:',
'Members message' => 'Este proceso es solo para administradores del foro. Si eres un miembro, no hay nada de qué preocuparse ¡los foros volverán pronto!',
'Administrator only' => '¡Este paso es solo para los administradores del foro!',
'Database password info' => 'Para llevar a cabo la actualización de la base de datos, por favor ingresa la contraseña de la base de datos con la cual se instaló FluxBB. Si no la recuerdas, esta se encuentra almacenada en el archivo \'config.php\'.',
'Database password note' => 'Si estás ejecutando SQLite (y por lo tanto, no tienes contraseña de base de datos), por favor usa el nombre del archivo de la base de datos en su lugar. Esto debe coincidir con el nombre del archivo de la base de datos dado en tu archivo de configuración.',
'Database password' => 'Contraseña de la base de datos',
'Maintenance' => 'Mantenimiento',
'Maintenance message info' => 'El mensaje que se mostrará a los usuarios durante el proceso de actualización. Este texto no será procesado como una publicación regular, y por lo tanto, puede contener HTML.',
'Maintenance message' => 'Mensaje de mantenimiento',
'You are running error' => 'Estás ejecutando %1$s versión %2$s. FluxBB %3$s requiere al menos %1$s %4$s para ejecutarse sin problemas. Debes actualizar la instalación de %1$s antes de poder continuar.',
'Version mismatch error' => 'No coincide la versión. La base de datos \'%s\' no parece estar ejecutando un esquema de base de datos de FluxBB soportado por este <i>script</i> de actualización.',
'Invalid file error' => 'El nombre del archivo de la base de datos no es válido. Cuando se usa SQLite, el nombre de la base de datos debe ser ingresado tal cual aparece en el \'%s\'.',
'Invalid password error' => 'La contraseña de la base de datos no es válida. Para actualizar FluxBB, debes ingresar la contraseña de la base de datos exactamente como aparece en el \'%s\'.',
'No password error' => 'No se entregó la contraseña de la base de datos',
'Script runs error' => 'Parece que el <i>script</i> de actualización ya está siendo ejecutado por alguien más. Si este no es el caso, por favor elimina manualmente el archivo \'%s\' e inténtalo de nuevo.',
'No update error' => 'Tu foro ya está actualizado porque este <i>script</i> puede hacerlo',
'Intro 1' => 'Este <i>script</i> actualizará la base de datos del foro. El procedimiento de actualización podría tomar desde un segundo a horas, dependiendo de la velocidad del servidor y del tamaño de la base de datos del foro. No olvides hacer una copia de seguridad de la base de datos antes de continuar.',
'Intro 2' => '¿Leíste las instrucciones de actualización en la documentación? Sino, comienza con eso.',
'No charset conversion' => '<strong>¡IMPORTANTE!</strong> FluxBB ha detectado que este entorno de PHP no tiene soporte para los mecanismos de codificación requeridos para hacer la conversión a UTF-8 desde conjuntos de caracteres distintos a ISO-8859-1. Lo que esto significa es que si el conjunto de caracteres establecido no es ISO-8859-1, FluxBB no podrá convertir la base de datos de tu foro a UTF-8 y tendrás que hacerlo manualmente. Las instrucciones para hacer la conversión manual del conjunto de caracteres se pueden encontrar en las instrucciones de actualización.',
'Enable conversion' => '<strong>Habilitar la conversión:</strong> Cuando está habilitado, este <i>script</i> de actualización, después de que haya hecho los cambios estructurales requeridos, convertirá todos los textos en la base de datos desde el conjunto de caracteres actual a UTF-8. Esta conversión se requiere si estás actualizando desde la versión 1.2.',
'Current character set' => '<strong>Conjunto de caracteres actual:</strong> Si el idioma primario en tu foro es el inglés, puedes dejar esto con el valor predeterminado. Sin embargo, si tu foro no está en inglés, deberías ingresar el conjunto de caracteres del paquete primario de idioma usado en el foro. <em>Al dejar mal esto, se puede corromper la base de datos. ¡No vale adivinar!</em> Nota: Esto se requiere incluso si la base de datos antigua está en UTF-8.',
'Charset conversion' => 'Conversión del conjunto de caracteres',
'Enable conversion label' => '<strong>Habilitar la conversión</strong> (lleva a cabo la conversión del conjunto de caracteres de la base de datos).',
'Current character set label' => 'Conjunto de caracteres actual',
'Current character set info' => 'Acepta el predeterminado para foros en inglés, de lo contrario, del conjunto de caracteres del paquete de idiomas principal.',
'Start update' => 'Iniciar actualización',
'Error converting users' => 'Error al convertir usuarios',
'Error info 1' => 'There was an error converting some users. This can occur when converting from FluxBB v1.2 if multiple users have registered with very similar usernames, for example "bob" and "böb".',
'Error info 2' => 'A continuación se encuentra la lista de usuarios que no se pudieron convertir. Por favor elige un nombre de usuario nuevo para cada uno. Se enviará un correo electrónico a los usuarios que fueron renombrados,automáticamente, informándoles acerca del cambio.',
'New username' => 'Nuevo nombre de usuario',
'Required' => '(Requerido)',
'Correct errors' => 'Se necesita corregir los siguientes errores:',
'Rename users' => 'Renombrar usuarios',
'Successfully updated' => 'La base de datos de tu foro se actualizó exitosamente. Ahora puedes %s.',
'go to index' => 'ir al índice del foro',
'Unable to lock error' => 'No se pudo escribir el bloqueo de actualización. Por favor asegúrate de que PHP tenga acceso de escritura al directorio \'%s\' y que nadie más esté ejecutando el <i>script</i> de actualización.',
'Converting' => 'Convirtiendo %s…',
'Converting item' => 'Convirtiendo %1$s %2$s…',
'Preparsing item' => 'Preanalizando %1$s %2$s…',
'Rebuilding index item' => 'Reconstruyendo el índice para %1$s %2$s',
'Click here' => 'Haz clic aquí',
'Automatic redirect failed' => 'Automatic redirect unsuccessful. %s to continue …',
'ban' => 'bloquear',
'categories' => 'categorías',
'censor words' => 'palabras censuradas',
'configuration' => 'configuración',
'forums' => 'foros',
'groups' => 'grupos',
'post' => 'publicación',
'report' => 'informar',
'topic' => 'tema',
'user' => 'usuario',
'signature' => 'firma',
'Username too short error' => 'Los nombres de usuario deben tener al menos 2 caracteres de largo. Por favor elige otro nombre de usuario (más largo).',
'Username too long error' => 'Los nombres de usuario no deben tener más de 25 caracteres de longitud. Por favor elige otro nombre de usuario (más corto).',
'Username Guest reserved error' => 'El nombre de usuario guest está reservado. Por favor elige otro nombre de usuario.',
'Username IP format error' => 'Los nombres de usuario con pueden tener la forma de una dirección IP. Por favor elige otro nombre de usuario.',
'Username bad characters error' => 'Usernames may not contain all the characters \', " and [ or ] at once. Please choose another username.',
'Username BBCode error' => 'Los nombres de usuario no pueden contener algunos de las etiquetas de formato de texto (CódigoBB) que usa el foro. Por favor elige otro nombre de usuario.',
'Username duplicate error' => 'Alguien ya está registrado con el nombre de usuario %s. El nombre de usuario que ingresaste es muy simlar. El nombre de usuario debe diferir en por lo menos un caracter alfanumérico (a-z or 0-9). Por favor elige un nombre de usuario distinto.',

);