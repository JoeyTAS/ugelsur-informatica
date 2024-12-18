<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recursos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-icons/1.0.0/material-icons.min.js"></script>
    <link rel="stylesheet" href="../css/styleResources.css  " />
  </head>
  <body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img
            src="../img/oticLogo.jpeg"
            class="h-10"
            alt="logo de otic"
            alt=""
          />
          <span
            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
            >OTIC</span
          >
        </a>
        <div
          class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
        >
          <button
            type="button"
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom"
          >
            <span class="sr-only">Abrir menú de usuario</span>
            <img
              class="w-8 h-8 rounded-full"
              src="../img/ugelsur.png"
              alt="user photo"
            />
          </button>

          <!-- Dropdown menu del Perfil -->
          <div
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
            id="user-dropdown"
          >
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white"
                >Joel Anthony</span
              >
              <span
                class="block text-sm text-gray-500 truncate dark:text-gray-400"
                >joeyta3017@gmail.com</span
              >
            </div>
            <li>
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                id="openProfile"
                >Perfil</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                >Cerrar Sesión</a
              >
            </li>
          </div>
        </div>

        <!-- Botón para abrir el menú offcanvas -->
        <button
          id="toggleOffcanvas"
          class="p-2 text-gray-700 rounded-md focus:outline-none focus:ring"
        >
          <span class="material-icons">OPCIONES</span>
        </button>
      </div>
    </nav>

    <!-- Menú Offcanvas -->
    <div
      id="offcanvas"
      class="offcanvas fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 shadow-lg z-50 p-4 rounded"
    >
      <h2 class="text-xl font-bold text-gray-900 dark:text-white">Menú</h2>
      
      <ul class="mt-4 space-y-2">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            PISO 1
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">CONTABILIDAD</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">INFORMATICA</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">PLANILLAS</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">ESCALAFON</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            PISO 2
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ABASTECIMIENTO</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">DIRECCION</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">CONTROL PATRIMONIAL</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Ver Todos los dispositivos</a>
        </li>
      </ul>
      <button id="closeOffcanvas" class="mt-4 text-red-600">Cerrar</button>
    </div>

    <!-- Modal de Perfil -->
<div id="profile-modal"
class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50 hidden"> <!-- Aquí se usa z-50 para asegurar que esté encima -->
<div
  class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-md p-6 relative"> <!-- Usa relative para establecer la jerarquía del modal -->
  <button id="closeProfile"
    class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white">
    &times;
  </button>
        <h3 class="text-xl font-medium text-gray-900 dark:text-white mb-4">
          Perfil de usuario
        </h3>
        <form>
          <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200"
              >Nombres:</label
            >
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
              value="Joel Anthony"
              readonly
            />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200"
              >Apellidos:</label
            >
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
              value="Apellido Apellido"
              readonly
            />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200">DNI:</label>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
              value="12345678"
              readonly
            />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200"
              >Teléfono:</label
            >
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
              value="987654321"
              readonly
            />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200"
              >Correo Electrónico:</label
            >
            <input
              type="email"
              class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
              value="joeyta3017@gmail.com"
              readonly
            />
          </div>
          <div class="mb-4">
            <button
              type="button"
              class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600"
              id="openChangePasswordModal"
            >
              Cambiar Contraseña
            </button>
          </div>
        </form>
      </div>
    </div>

   <!-- Modal de Cambiar Contraseña -->
<div
id="change-password-modal"
class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50"> <!-- z-50 para asegurar que el modal esté en la capa superior -->
>
<div
  class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-md p-6 relative"> <!-- relative para que el botón de cerrar se posicione correctamente dentro del modal -->

  <button
    id="closeChangePassword"
    class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white">
    &times;
  </button>
  
  <h3 class="text-xl font-medium text-gray-900 dark:text-white mb-4">
    Cambiar Contraseña
  </h3>
  <form id="change-password-form">
    <div class="mb-4">
      <label class="block text-gray-700 dark:text-gray-200"
        >Contraseña Actual:</label
      >
      <input
        type="password"
        id="current-password"
        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
        placeholder="Ingresa tu contraseña actual"
        required
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 dark:text-gray-200"
        >Nueva Contraseña:</label>
      <input
        type="password"
        id="new-password"
        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
        placeholder="Ingresa la nueva contraseña"
        required
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 dark:text-gray-200"
        >Confirmar Nueva Contraseña:</label
      >
      <input
        type="password"
        id="confirm-new-password"
        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
        placeholder="Confirma la nueva contraseña"
        required
      />
    </div>
    <div class="mb-4">
      <button
        type="submit"
        class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600"
      >
        Guardar Cambios
      </button>
    </div>
  </form>
</div>
</div>


    <!-- Tabla centrada en el contenido principal -->
    <div class="container mx-auto my-6">
      <!-- Contenedor centrado con Tailwind -->
      <div class="row justify-content-center">
        <!-- Flex para centrar en Bootstrap -->
        <div class="col-12 col-lg-10">
          <!-- Columnas de Bootstrap, 12 para móvil, 10 para desktop -->

          <!-- Barra de búsqueda con icono de lupa -->
          <div class="mb-4 flex justify-end">
            <!-- Espacio entre la tabla y la búsqueda -->
            <div class="relative flex items-center">
              <!-- Contenedor relativo para el icono de la lupa -->
              <input
                type="text"
                id="search-input"
                placeholder="Buscar..."
                class="p-2 pr-10 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
              <button
                class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-4.35-4.35m2.42-5.72A7.5 7.5 0 1112 4.5a7.5 7.5 0 0110.07 10.43z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="overflow-x-auto">
            <table
              class="table-auto w-full text-left bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-md"
            >
              <thead>
                <tr
                  class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white"
                >
                  <th class="px-4 py-2">Columna 1</th>
                  <th class="px-4 py-2">Columna 2</th>
                  <th class="px-4 py-2">Columna 3</th>
                  <th class="px-4 py-2">Columna 4</th>
                  <th class="px-4 py-2">Columna 5</th>
                  <th class="px-4 py-2">Columna 6</th>
                  <th class="px-4 py-2">Columna 7</th>
                  <th class="px-4 py-2">Columna 8</th>
                  <th class="px-4 py-2">Columna 9</th>
                  <th class="px-4 py-2">Columna 10</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">Dato 1</td>
                  <td class="px-4 py-2">Dato 2</td>
                  <td class="px-4 py-2">Dato 3</td>
                  <td class="px-4 py-2">Dato 4</td>
                  <td class="px-4 py-2">Dato 5</td>
                  <td class="px-4 py-2">Dato 6</td>
                  <td class="px-4 py-2">Dato 7</td>
                  <td class="px-4 py-2">Dato 8</td>
                  <td class="px-4 py-2">Dato 9</td>
                  <td class="px-4 py-2">Dato 10</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Paginación -->
<nav aria-label="Page navigation" class="mt-4 flex justify-center">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <script>
      document
        .getElementById("openProfile")
        .addEventListener("click", function () {
          document.getElementById("profile-modal").classList.remove("hidden");
        });

      document
        .getElementById("closeProfile")
        .addEventListener("click", function () {
          document.getElementById("profile-modal").classList.add("hidden");
        });

      document
        .getElementById("openChangePasswordModal")
        .addEventListener("click", function () {
          document.getElementById("profile-modal").classList.add("hidden"); // Cierra el modal de perfil
          document
            .getElementById("change-password-modal")
            .classList.remove("hidden"); // Abre el modal de cambiar contraseña
        });

      document
        .getElementById("closeChangePassword")
        .addEventListener("click", function () {
          document
            .getElementById("change-password-modal")
            .classList.add("hidden");
          clearChangePasswordFields();
        });

      // Cerrar modal al hacer clic fuera
      window.addEventListener("click", function (e) {
        if (e.target === document.getElementById("profile-modal")) {
          document.getElementById("profile-modal").classList.add("hidden");
        }
        if (e.target === document.getElementById("change-password-modal")) {
          document
            .getElementById("change-password-modal")
            .classList.add("hidden");
        }
      });

      // Ejemplo en javaS
      document
        .getElementById("change-password-form")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

          // Aquí iría la lógica para manejar el cambio de contraseña

          // Luego de guardar los cambios, cierra el modal y limpia los campos
          document
            .getElementById("change-password-modal")
            .classList.add("hidden");
          clearChangePasswordFields();
        });

      function clearChangePasswordFields() {
        document.getElementById("current-password").value = "";
        document.getElementById("new-password").value = "";
        document.getElementById("confirm-new-password").value = "";
      }

      // JavaScript para abrir y cerrar el menú offcanvas
      document
        .getElementById("toggleOffcanvas")
        .addEventListener("click", function () {
          document.getElementById("offcanvas").classList.toggle("show");
        });

      document
        .getElementById("closeOffcanvas")
        .addEventListener("click", function () {
          document.getElementById("offcanvas").classList.remove("show");
        });

      // Cerrar el menú offcanvas al hacer clic fuera de él
      window.addEventListener("click", function (e) {
        if (
          !document.getElementById("offcanvas").contains(e.target) &&
          !document.getElementById("toggleOffcanvas").contains(e.target)
        ) {
          document.getElementById("offcanvas").classList.remove("show");
        }
      });
    </script>
  </body>
</html>