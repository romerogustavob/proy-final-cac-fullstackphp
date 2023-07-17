<?php include 'crud_php/conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
 ?>
<!DOCTYPE html>
<!-- saved from url=(0050)#formacion  -->
<html lang="es" class="dark"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./portfolio/estilos/output.css">
  <link rel="stylesheet" href="./portfolio/estilos/styles.css">
  <script src="./js/e8e1e6fbb0.js.descarga" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./portfolio/estilos/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="./portfolio/estilos/css1.css">
  <title>Gustavo Romero</title>
</head>

<body> 

  <!-- HEADER -->
  <header class="lg:block text-white bg-general bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg body-font fixed w-full z-50">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <div class="flex items-center justify-center h-18">
        <label for="toggle" class="relative flex items-center justify-center h-10 w-28 cursor-pointer">
          <input id="toggle" type="checkbox" class="peer sr-only">
          <span class="h-10 absolute inset-0 rounded-full bg-black transition peer-checked:bg-destacado flex items-center justify-start pl-1">
            <h2 class=" text-black text-l font-semibold">Gustavo</h2>
          </span>
          <span id="toggle-circle" class="absolute inset-y-0 left-0 flex items-center justify-center align-middle m-1 h-9 w-20 rounded-full bg-black transition-all peer-checked:left-16">
            <span id="text-inside-circle" class="w-full h-full flex items-center justify-right p-2">
              <h2 class="text-l text-hover">Romero</h2>
            </span>
          </span>
        </label>
      </div>

      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 text-white hover:text-hover" href="#inicio">Inicio</a>
        <a class="mr-5 text-white hover:text-hover" href="#sobremi">Sobre m&iacute;</a>
        <a class="mr-5 text-white hover:text-hover" href="#proyectos">Proyectos</a>
        <a class="mr-5 text-white hover:text-hover" href="#tecnologia">Tecnolog&iacute;as</a>        
        <a class="mr-5 text-white hover:text-hover" href="#contacto">Contacto</a>
        <a class="mr-5 text-white hover:text-hover" href="../crud_php/login.php">Admin
        </a>
      </nav>
    </div>
  </header>


  <section id="inicio"></section>

  <!--SOBRE MI-->
  <section id="sobremi" class=" bg-claro dark:text-white dark:bg-general body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col h-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
         <img class="hidden lg:block md:block lg:w-3/5 md:w-1/2 object-contain object-center rounded-xl md:mt-0 mt-12 " src="./portfolio/imagenes/favicon_io/android-chrome-192x192.png" alt="mi descripcion en foto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-5 text-claro dark:text-titulo">Sobre m&iacute;</h1>
        <p class="text-base md:text-lg w-full leading-relaxed text-justify text-claro dark:text-gray-300 lg:w-5/6 lg:text-lg">
          <i class="fa fa-user" aria-hidden="true"></i>
          Mi nombre es Gustavo y soy Programador Universitario de Aplicaciones. Trabajo como profesional de sistemas desde hace más de 10 años, en los cuáles he desempeñado roles tales como, analista de procesos, analista funcional, analista de requerimientos, programador, tester funcional, capacitador de sistemas, ingeniero  de datos, analista de inteligencia de negocios, desarrollador web, entre otros.
          <br>
          <i class="fa fa-cubes" aria-hidden="true"></i>
          A nivel personal, constantemente actualizo mis conocimientos y me capacito de acuerdo al rol que se requiera dada la función que me encuentre cumpliendo, esto lo hago con el objetivo de brindar valor agregado de calidad a los requerimientos y/o productos solicitados por los clientes y/o necesidades del lugar en el que desempeñe mi labor.
        </p>
        <p class="text-base md:text-lg w-full leading-relaxed text-justify text-claro dark:text-gray-300 lg:w-5/6 lg:text-lg">
        <i class="fa fa-terminal" aria-hidden="true"></i>
          Más detalles aquí <a href="./portfolio/pdfs/Curriculum_Gustavo_Romero-ES.pdf" target="_blank" alt="curriculm"> CV</a>
         </p>
      </div>
  </section> 

  

  <!--PROYECTOS-->
  <section id="proyectos" class="px-4 py-24 mx-auto w-5/6 h-full">
   <!-- <h1 class="mb-2 text-3xl font-extrabold leading-tight text-titulo pb-14">Proyectos</h1> -->
    <h1 class="text-3xl text-claro text-center mb-12 mt-12 font-semibold">Proyectos</h1>
    <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
      <?php #leemos proyectos 1 por 1
        foreach($proyectos as $proyecto){ 
      ?>
        <div class="bg-destacado dark:bg-general bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-xl">
          <a href="#">
            <img src="./crud_php/imagenes/<?php echo $proyecto['imagen'];?>" class="object-contain lg:object-cover w-full h-auto lg:h-56 mb-5 bg-center rounded-t-xl" alt="banner de entrada de este portfolio" loading="lazy">
          </a>
            <div class="pl-4 pr-4">
              <h2 class="mb-2 text-lg font-semibold">
                <a href="<?php echo $proyecto['url'];?>" target="_blank" class="text-white"><?php echo $proyecto['nombre'];?></a>
              </h2>
              <p class="mb-3 text-sm font-normal text-white">
                <?php echo $proyecto['descripcion'];?>
              </p>
              <p class="mb-3 text-sm font-normal text-white">
                <a href="<?php echo $proyecto['url'];?>" class="font-medium text-white hover:text-hover" target="_blank">Link ...</a>
  
              </p>
            </div>
          </div>
        <?php 
        } 
        ?>
      <div>
  </div>
</div>
</section>
<!--HABILIDADES-->
<section id="tecnologia" class="p-6 bg-claro dark:bg-general mb-12 pb-20 px-4 py-24">
    <h1 class="text-3xl text-claro dark:text-titulo text-center mb-12 mt-12 font-semibold">Tecnolog&iacute;as</h1>
    <div class="w-auto h-72 flex space-x-4 overflow-x-auto items-start justify-start overscroll-x-contain overflow-y-hidden lg:w-5/6 lg:mx-auto lg:flex lg:justify-start">
      <!--card 1-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">        
         <img src="./portfolio/imagenes/html_css_js.png" class="w-middle h-full p-4" viewBox="0 0 128 128" alt=""> 
        </div>
        <div class="w-full h-auto p-3 bg-casual bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center">HTML + CSS + JS</h3>
          </div>
      </div>
      <!--card 2-->
     
      <!--card 4-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">
        <img src="./portfolio/imagenes/symfony.png" class="w-middle h-full p-4" viewBox="0 0 128 128" alt=""> 
        </div>
        <div class="w-full h-auto p-3 bg-destacado bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center">Symfony 2.7</h3>
        </div>
      </div>
      <!--card 5-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">
          <svg class="w-full h-full p-4" viewBox="0 0 128 128">
            <path fill="#F34F29" d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z">
            </path>
          </svg>
        </div>
        <div class="w-full h-auto p-3 bg-casual bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center" text-center="">Git</h3>
        </div>
      </div>
      <!--card 6-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">        
         <img src="https://www.genexus.com/media/images/genexusbyglobant_large.svg?timestamp=20220921163437" class="w-middle h-full p-4" viewBox="0 0 128 128" width="153.594" alt=""> 
        </div>
        <div class="w-full h-auto p-3 bg-destacado bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center">Genexus 17</h3>
        </div>
      </div>
      <!--card 7-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">
          <img src="./portfolio/imagenes/php_mysql.png"  class="w-middle h-full p-4" viewBox="0 0 128 128" width="153.594" alt="">
        </div>
        <div class="w-full h-auto p-3 bg-casual bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center" text-center="">PHP + MySQL</h3>
        </div>
      </div>


      <!--card 8-->
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">        
         <img src="https://lacasadelaslicencias.com/wp-content/uploads/2020/05/SQL-Server-300x300.jpg" class="w-full h-full p-4" viewBox="0 0 128 128" width="153.594" alt=""> 
        </div>
        <div class="w-full h-auto p-3 bg-destacado bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center">SQL Server</h3>
        </div>
      </div>
      <div class="Card">
        <div class="w-full h-3/5 rounded-t-lg bg-casual dark:bg-transparent">
          <img src="./portfolio/imagenes/powerbi.jpg"  class="w-middle h-full p-4" viewBox="0 0 128 128" width="153.594" alt="">
        </div>
        <div class="w-full h-auto p-3 bg-casual bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg rounded-b-lg">
          <h3 class="text-white text-bold text-lg text-center" text-center="">Powerbi desktop</h3>
        </div>
      </div>

    </div>
  </section>
  <!--CONTACTO-->
  <section id="contacto" class="text-gray-400 mb-12 pb-24 px-4 py-24 bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg body-font relative">
    <div class="container px-5 py-5 mx-auto flex sm:flex-nowrap flex-wrap">     
      <div id="contactImg" class="h-full lg:w-2/3 md:w-1/2 bg-lofi bg-cover rounded-xl overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <div class=" bg-destacado dark:bg-general bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg relative flex flex-wrap py-6 rounded-xl" style="flex-direction: column;">
          <div class="lg:w-1/2 px-6 rounded-xl">       
            <p class="mt-2 text-white rounded-xl"><img src="./portfolio/imagenes/conectividad.jpg"></p>
          </div>
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-white tracking-widest text-xs"></h2>
            <p class="mt-1 text-white">
              <i class="fa fa-cubes" aria-hidden="true"></i>
              Si tienes consultas, feedbacks o recomendaciones no dudes en enviarme un mensaje. </p>
            <p class="mt-1 text-white">
            <i class="fa fa-terminal" aria-hidden="true"></i>
             Puedes acceder a mis datos de contacto en mi 
              <a href="./portfolio/pdfs/Curriculum_Gustavo_Romero-ES.pdf" target="_blank">CV</a>
            </p>
          </div>
        </div>
      </div>

      <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-black text-lg mb-1 font-medium title-font">Contacto</h2>
       <form id="contact-form" action="" method="post">
          <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-black">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Escribe tu nombre" pattern="[a-zA-ZÑñ\s]{4,30}" title="Ingresa un nombre válido" class="w-full bg-claro dark:bg-gray-800 rounded-md border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-black font-semibold dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required="">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-black">Email</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@gmail.com" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="Ingresa un email válido" class="w-full bg-claro dark:bg-gray-800 rounded-md border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-black font-semibold dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required="">
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-black">Mensaje</label>
            <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí" class="w-full bg-white dark:bg-gray-800 rounded-md border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-black font-semibold dark:text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required=""></textarea>
          </div>
          <button type="submit" class="text-white rounded-md w-full bg-casual border-2 dark:border-0 py-2 px-6 focus:outline-none hover:bg-destacado text-lg">Enviar</button>
          <p class="text-xs text-gray-400 text-opacity-90 mt-3"></p>
        </form>
      </div>
    </div>
    
  </section>
  
  <!--FOOTER-->
  <footer class="bg-general bg-opacity-70 backdrop-filter backdrop-blur-lg shadow-lg pb-12" aria-labelledby="footer-heading">
    <div class="px-5 py-12 mx-auto flex flex-col items-center space-y-8 sm:px-6 md:flex-row md:items-center md:justify-between lg:px-20">
      <div class="flex justify-center md:order-last md:mb-0 space-x-6 mt-4 mb-2">
        <p class="text-white text-center text-md mb-4">© 2023 Sitio web de <a href="#inicio" class="font-bold text-white hover:text-hover">Gustavo Romero</a>. Todos los derechos reservados.</p></div>
      <div class="flex justify-right md:order-last md:mb-0 space-x-6 mt-4 mb-2">        
        <span class="">
          <a href="https://www.linkedin.com/in/gustavo-rubens-h-romero/" target="_blank"><i class="fa fa-linkedin-square text-white text-3xl hover:text-hover" aria-hidden="true"></i></a>
        </span>
        <span class="">
          <a href="https://github.com/romerogustavob/" target="_blank"><i class="fa fa-github-square text-white text-3xl hover:text-hover" aria-hidden="true"></i></a>
        </span>
        <span class="">
          <a href="#" target="_blank"><i class="fa fa-twitter-square text-white text-3xl hover:text-hover" aria-hidden="true"></i></a>
        </span>
      </div>
      
    </div>

  </footer>
  <script src="./portfolio/js/app.js.descarga"></script>
  <script src="./portfolio/js/form.js.descarga"></script>
  <script src="./portfolio/js/darkmode.js.descarga"></script>

</body></html>