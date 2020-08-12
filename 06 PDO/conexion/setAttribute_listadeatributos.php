<?php 
/*
ATRIBUTOS Y VALOR DE PDO::SETATTRIBUTE


PDO::ATTR_CASE: Fuerza a los nombres de columnas a una capitalización específica.

	PDO::CASE_LOWER: Fuerza a los nombres de columnas a minúsculas.

	PDO::CASE_NATURAL: Deja los nombres de columnas como son devueltas por el driver de la base de datos.

	PDO::CASE_UPPER: Fuerza a los nombres de columnas a mayúsculas.

PDO::ATTR_ERRMODE: Reporte de errores.

	PDO::ERRMODE_SILENT: Establece los códigos de error.

	PDO::ERRMODE_WARNING: Eleva E_WARNING.

	PDO::ERRMODE_EXCEPTION: Lanza exceptions.

PDO::ATTR_ORACLE_NULLS (disponible para todos los drivers, no sólo Oracle): Conversión de NULL y cadenas vacías.

	PDO::NULL_NATURAL: Sin conversión.

	PDO::NULL_EMPTY_STRING: Las cadenas vacías son convertidas a NULL.

	PDO::NULL_TO_STRING: NULL se convierte a cadenas vacías.

PDO::ATTR_STRINGIFY_FETCHES: Convierte los valores numéricos a cadenas cuando se buscan. Requiere bool.

PDO::ATTR_STATEMENT_CLASS: Establece la clase de sentencia proporcionada por el usuario derivada de PDOStatement. No puede ser usado con instancias PDO persistentes. Requiere array(string classname, array(mixed constructor_args)).

PDO::ATTR_TIMEOUT: Especifica la duración del tiempo de espera en segundos Specifies the timeout duration in seconds. Not all drivers support this option, and it's meaning may differ from driver to driver. For example, sqlite will wait for up to this time value before giving up on obtaining an writable lock, but other drivers may interpret this as a connect or a read timeout interval. Requires int.

PDO::ATTR_AUTOCOMMIT (available in OCI, Firebird and MySQL): Whether to autocommit every single statement.

PDO::ATTR_EMULATE_PREPARES Enables or disables emulation of prepared statements. Some drivers do not support native prepared statements or have limited support for them. Use this setting to force PDO to either always emulate prepared statements (if TRUE), or to try to use native prepared statements (if FALSE). It will always fall back to emulating the prepared statement if the driver cannot successfully prepare the current query. Requires bool.

PDO::MYSQL_ATTR_USE_BUFFERED_QUERY (available in MySQL): Use buffered queries.

PDO::ATTR_DEFAULT_FETCH_MODE: Set default fetch mode. Description of modes is available in PDOStatement::fetch() documentation.
*/