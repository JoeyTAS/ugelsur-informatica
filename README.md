
# UgelSur Informática

## Descripción
UgelSur Informática es un proyecto diseñado para [breve descripción de la funcionalidad del proyecto]. Su objetivo es [explicar el propósito principal].

## Requisitos
- **XAMPP**: Asegúrate de tener XAMPP instalado para ejecutar el servidor local y gestionar la base de datos mediante phpMyAdmin.
  - Descarga XAMPP: [Apache Friends - XAMPP](https://www.apachefriends.org/index.html)

## Acceso al Repositorio
- [Repositorio UgelSur Informática](https://github.com/JoeyTAS/ugelsur-informatica)

## Configuración del Proyecto

### Paso 1: Clonar el Repositorio
Abre una terminal y ejecuta el siguiente comando:
```bash
git clone https://github.com/JoeyTAS/ugelsur-informatica.git
```

### Paso 2: Iniciar XAMPP
1. Abre el panel de control de XAMPP.
2. Inicia los módulos de **Apache** y **MySQL**.

### Paso 3: Configuración de la Base de Datos
1. Abre tu navegador y ve a `http://localhost/phpmyadmin`.
2. Crea una nueva base de datos, por ejemplo, `ugelsur_db`.
3. Importa el archivo SQL para crear las tablas necesarias (incluye un archivo `setup.sql` en el repositorio).

### Paso 4: Configurar el Entorno
1. Crea un archivo `.env` en la raíz del proyecto y configura las variables necesarias, como la conexión a la base de datos:
   ```
   DB_HOST=localhost
   DB_NAME=ugelsur_db
   DB_USER=root
   DB_PASS=
   ```

### Paso 5: Ejecutar el Proyecto
1. Coloca el directorio del proyecto en la carpeta `htdocs` de XAMPP (por defecto en `C:\xampp\htdocs\`).
2. Accede a la aplicación en tu navegador mediante `http://localhost/ugelsur-informatica`.

## Contribuciones
Si deseas contribuir al proyecto, siéntete libre de hacer un fork y enviar pull requests. Asegúrate de seguir las mejores prácticas de codificación y documentar tus cambios.




¡Espero que te sea útil! Si necesitas más cambios, házmelo saber.