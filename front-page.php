<?php get_header(); ?>
    <main>
        <div class="acordeon-cuerpo">
            <div class="acordeon">
                <h1>Preguntas Frecuentes</h1>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es HTML?</div>
                    <div class="contenido">El lenguaje de marcas de hipertexto (HTML) es un lenguaje informático que
                        compone la mayoría de las páginas web y aplicaciones en línea. Un hipertexto es un texto que se
                        utiliza para hacer referencia a otros fragmentos de texto, mientras que un lenguaje de marcas es
                        una serie de marcas que indican a los servidores web el estilo y la estructura de un documento.
                        El lenguaje HTML es muy sencillo de aprender y utilizar.</div>
                </div>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es CSS?</div>
                    <div class="contenido">CSS son las siglas de Cascading Style Sheets (hojas de estilo en cascada). Es
                        el lenguaje para describir la presentación de las páginas web, incluyendo los colores, el diseño
                        y las fuentes, haciendo así que nuestras páginas web sean presentables para los usuarios. CSS
                        está diseñado para hacer hojas de estilo para la web. Es independiente de HTML y puede
                        utilizarse con cualquier lenguaje de marcado basado en XML. El CSS es popularmente llamado el
                        lenguaje de diseño de la web.
                    </div>
                </div>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es JavaScript?</div>
                    <div class="contenido">JavaScript es un lenguaje de programación que permite implementar funciones
                        complejas en las páginas web. Cada vez que una página web hace algo más que limitarse a mostrar
                        información estática para que la veas, mostrando actualizaciones puntuales de contenido, mapas
                        interactivos, gráficos 2D/3D animados, videocámaras con desplazamiento, etc., puedes apostar que
                        JavaScript está probablemente involucrado. Es el tercero del trío web.
                    </div>
                </div>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es React?</div>
                    <div class="contenido">React es una biblioteca de JavaScript creada para construir interfaces de
                        usuario rápidas e interactivas para aplicaciones web y móviles. Es una biblioteca de código
                        abierto, basada en componentes, responsable únicamente de la capa de vista de la aplicación. En
                        la arquitectura Modelo-Vista-Controlador (MVC), la capa de vista es responsable del aspecto y la
                        sensación de la aplicación. React fue creado por Jordan Walke, un ingeniero de software de
                        Facebook. </div>
                </div>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es PHP?</div>
                    <div class="contenido">PHP es un lenguaje de scripting del lado del servidor y de propósito general
                        que es especialmente adecuado para el desarrollo web. Originalmente, PHP significaba "Personal
                        Home Page". Sin embargo, ahora significa Hypertext Preprocessor. Es un acrónimo recursivo porque
                        la primera palabra también es un acrónimo.</div>
                </div>
                <hr>
                <div class="contenedor">
                    <div class="etiqueta">¿Qué es Node JS?</div>
                    <div class="contenido">Node.js es un entorno de ejecución de JavaScript de código abierto y
                        multiplataforma que se ejecuta en el motor V8 y ejecuta código JavaScript fuera de un navegador
                        web. Node.js permite a los desarrolladores utilizar JavaScript para escribir herramientas de
                        línea de comandos y para la ejecución de scripts del lado del servidor para producir contenidos
                        dinámicos de páginas web antes de que la página se envíe al navegador web del usuario. Por lo
                        tanto, Node.js representa un paradigma de "JavaScript en todas partes".</div>
                </div>
                <hr>
            </div>
        </div>
        <h2 class="titulo-galeria">Galería</h2>
        <div class="row">
            <div class="column">
                <img src="https://picsum.photos/id/756/300/200" style="width:100%" onclick="openModal();currentSlide(1)"
                    class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="https://picsum.photos/id/1043/300/200" style="width:100%"
                    onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="https://picsum.photos/id/1015/300/200" style="width:100%"
                    onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="https://picsum.photos/id/385/300/200" style="width:100%" onclick="openModal();currentSlide(4)"
                    class="hover-shadow cursor">
            </div>
        </div>

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <img src="https://picsum.photos/id/756/300/200" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="https://picsum.photos/id/1043/300/200" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="https://picsum.photos/id/1015/300/200" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="https://picsum.photos/id/385/300/200" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="columns">
                    <div class="column">
                        <img class="demo cursor" src="https://picsum.photos/id/756/300/200" style="width:100%"
                            onclick="currentSlide(1)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="https://picsum.photos/id/1043/300/200" style="width:100%"
                            onclick="currentSlide(2)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="https://picsum.photos/id/1015/300/200" style="width:100%"
                            onclick="currentSlide(3)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="https://picsum.photos/id/385/300/200" style="width:100%"
                            onclick="currentSlide(4)">
                    </div>
                </div>

            </div>
        </div>

<h1>Light/Dark Toggle<br> Button</h1>

<div class="parent-checkbox">
  <input type="checkbox" class="checkbox" id="checkbox">
  <label for="checkbox" class="checkbox-label">
    <i class="fa-moon">🌙</i>
    <i class="fa-sun">☀️</i>
    <span class="ball"></span>
  </label>
</div>


    </main>
</body>
<?php get_footer(); ?>