<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Quiz App | CodingNepal</title>
    <link rel="stylesheet" href="Quiz.css">
    <!-- FontAweome CDN Link for Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Iniciar</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Algunas reglas del juego</span></div>
        <div class="info-list">
            <div class="info">1. tienes solo <span>15 segundos</span> para cada pregunta.</div>
            <div class="info">2. Una vez que seleccione su respuesta, no se puede deshacer.</div>
            <div class="info">3. No puedes seleccionar ninguna opción una vez que se acaba el tiempo.</div>
            <div class="info">4. No puedes salir de la prueba mientras juegas..</div>
            <div class="info">5. Obtendrás puntos en base a tus respuestas correctas.</div>
            <div class="info">6. Buena SUERTE.</div>
        </div>
        <div class="buttons">
            <button class="quit">Salie</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Aplicacion de quiz by ruben</div>
            <div class="timer">
                <div class="time_left_txt">Tiempo restante </div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn"> > </button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Lo haz hecho lo haz completado!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Repetir Quiz</button>
            <button class="quit">Salir Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

