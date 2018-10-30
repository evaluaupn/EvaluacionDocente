<?php
////conexion a la base de datos////
$usuario='root';
$contraseña='';
$host='localhost';
$base='2018-2';

?>
<?php 
require_once('Connections/mysql.php'); 
$codigo = $_POST['usuario'];
$programa = $_POST['id'];
?>
<html lang="es">
	<head>
		<title>Informe Evaluación Docente 2018-2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>Informe Evaluación Docente 2018-2</h3>
			</div>
		</header>
		<section>
			<table class="col-md-12"> FORMATO A: INFORMACIÓN DEL ESTUDIANTE
				<tr class="bg-primary">
					<th class="pad-basic">Docente</th>
					<th class="pad-basic">Programa</th>
					<th class="pad-basic">Materia</th>
					<th class="pad-basic">Grupo</th>
					<th class="pad-basic">1. Socializó, puso en consideración y acordó el programa académico que desarrollo  en su espacio.</th>
					<th class="pad-basic">2. Propuso y desarrolló acciones y experiencias que brindaron elementos en la promoción de aprendizaje individual y colectivo.</th>
					<th class="pad-basic">3. Promovió la confrontación, discusión, comprensión y argumentación conceptual sobre la temática del espacio académico.</th>
					<th class="pad-basic">4. Desarrolló estrategias pedagógicas relacionadas y pertinentes con los propósitos y dinámicas del espacio académico.</th>
					<th class="pad-basic">5. Llevó a cabo la evaluación como proceso formativo e hizo retroalimentación oportuna del desempeño académico individual y grupal.</th>
					<th class="pad-basic">6. Propició la formulación permanente e preguntas, lectura de textos y documentos, análisis de las temáticas estudiadas, revisión de bibliografía actualizada y producción de textos escritos pertinentes con el espacio académico.</th>
					<th class="pad-basic">7. Tomó en cuenta la capacidad creativa, participativa, propositiva y de gestión de los estudiantes</th>
					<th class="pad-basic">Observaciones Docencia</th>
					<th class="pad-basic">8. Promovió la lectura de los contextos donde se realizó la práctica a través de la observación, análisis teórico, interpretación, diagnóstico y construcción de conocimiento</th>
					<th class="pad-basic">9. Orientó el diseño y la ejecución del programa académico de acuerdo con el estudio de la realidad de la comunidad educativa</th>
					<th class="pad-basic">10. Propició la formulación permanente de preguntas, lectura de textos y documentos, análisis de las temáticas estudiadas, revisión de bibliografía actualizada y producción de texto escrito pertinente a la práctica educativa</th>
					<th class="pad-basic">11. Acompañó , de manera sistemática, procesos de interacción y comunicación con el estudiante y la institución</th>
					<th class="pad-basic">12. Acordó criterios y mecanismos, con estudiantes e institución, para el seguimiento de los procesos desarrollados en la práctica</th>
					<th class="pad-basic">13. Tomó en cuenta la capacidad creativa, participativa, propositiva y de gestión de los estudiantes que realizaron la práctica</th>
					<th class="pad-basic">Observaciones Practica</th>
					<th class="pad-basic">14. Participó activamente con el estudiante en el diseño, formulación e intervención del trabajo de grado, proyecto pedagógico o investigación pedagógica.</th>
					<th class="pad-basic">15. Orientó y asesoró teóricamente el desarrollo del trabajo de grado, proyecto pedagógico o investigación pedagógica, mediante el análisis de bibliografía actualizada y pertinente</th>
					<th class="pad-basic">16. Dinamizó y participó, con estudiantes, profesores e instituciones, en la socialización de los avances logrados</th>
					<th class="pad-basic">17. Estimuló la capacidad escritural a través de la lectura y análisis crítico del documento que elabora y sistematiza el estudiante</th>
					<th class="pad-basic">Observaciones Turoria</th>
					
				<tr>
				
				<?php
				$query = "SELECT fa1a.docente, fa1a.programa, fa1a.materia, fa1a.grupo,
				fa1a.r1, fa1a.r2, fa1a.r3, fa1a.r4, fa1a.r5, fa1a.r6, fa1a.r7, fa1a.ob,
				fa2a.materia, fa2a.grupo, fa2a.r8, fa2a.r9, fa2a.r10, fa2a.r11, fa2a.r12, fa2a.r13, fa2a.ob,
				fa3a.materia, fa3a.grupo, fa3a.r14, fa3a.r15, fa3a.r16, fa3a.17, fa3a.ob
				FROM fa1 fa1a
				INNER JOIN fa2 fa2a ON fa1a.docentes
				INNER JOIN fa3 fa3a ON fa1a.docentes
				
				";
				?>
				
			</table>
		</section>
		<section>
			<table class="col-md-12"> FORMATO B: AUTOEVALUACIÓN
				<tr class="bg-primary">
					
					<th class="pad-basic">1. Socialicé, puse en consideración y acordé el programa académico que desarrollé en el espacio.</th>
					<th class="pad-basic">2. Propuse y desarrollé acciones y experiencias que brindaron elementos en la promoción de aprendizaje individual y colectivo.</th>
					<th class="pad-basic">3. Promoví la confrontación, discusión, comprensión y argumentación conceptual sobre la temática del espacio académico.</th>
					<th class="pad-basic">4. Desarrolló estrategias pedagógicas relacionadas y pertinentes con los propósitos y dinámicas del espacio académico.</th>
					<th class="pad-basic">5. Llevé a cabo la evaluación como proceso formativo e hice retroalimentación oportuna del desempeño académico individual y grupal.</th>
					<th class="pad-basic">6. Propicié la formulación permanente e preguntas, lectura de textos y documentos, análisis de las temáticas estudiadas, revisión de bibliografía actualizada y producción de textos escritos pertinentes con el espacio académico.</th>
					<th class="pad-basic">7. Tomé en cuenta la capacidad creativa, participativa, propositiva y de gestión de los estudiantes</th>
					<th class="pad-basic">8. Promoví la lectura de los contextos donde se realizó la práctica a través de la observación, análisis teórico, interpretación, diagnóstico y construcción de conocimiento.</th>
					<th class="pad-basic">9. Orienté el diseño y la ejecución del programa académico de acuerdo con el estudio de la realidad de la comunidad educativa.</th>
					<th class="pad-basic">10. Propicié la formulación permanente de preguntas, lectura de textos y documentos, análisis de las temáticas estudiadas, revisión de bibliografía actualizada y producción de texto escrito pertinente a la práctica educativa.</th>
					<th class="pad-basic">11. Acompañé, de manera sistemática, procesos de interacción y comunicación con el estudiante y la institución.</th>
					<th class="pad-basic">12. Acordé criterios y mecanismos, con estudiantes e institución, para el seguimiento de los procesos desarrollados en la práctica.</th>
					<th class="pad-basic">13. Tomé en cuenta la capacidad creativa, participativa, propositiva y de gestión de los estudiantes que realizaron la práctica.</th>
					<th class="pad-basic">14. Participé activamente con el estudiante en el diseño, formulación e intervención del trabajo de grado, proyecto pedagógico o investigación pedagógica.</th>
					<th class="pad-basic">15. Orienté y asesoré teóricamente el desarrollo del trabajo de grado, proyecto pedagógico o investigación pedagógica, mediante el análisis de bibliografía actualizada y pertinente</th>
					<th class="pad-basic">16. Dinamicé y participé, con estudiantes, profesores e instituciones, en la socialización de los avances logrados</th>
					<th class="pad-basic">17. Estimulé la capacidad escritural a través de la lectura y análisis crítico del documento que elabora y sistematiza el estudiante</th>
					<th class="pad-basic">18. Atendí las responsabilidades adquiridas para el desarrollo de la investigación relacionadas con los propósitos del proyecto, entrega oportuna de informes, divulgación y socialización a través de artículos o ponencias y vinculación de estudiantes al proceso.</th>
					<th class="pad-basic">19. Respondí con idoneidad a los propósitos, funciones y tareas de los distintos convenios y acciones establecidas en cada uno de los proyectos de extensión en que participé.</th>
					<th class="pad-basic">20. Respondí con idoneidad a los propósitos, funciones y tareas correspondientes a la gestión institucional.</th>
					<th class="pad-basic">Observaciones Autoevaluación</th>
					
				<tr>
			</table>
		</section>
		<section>
			<table class="col-md-12"> FORMATO C: EVALUACIÓN JEFE INMEDIATO
				<tr class="bg-primary">
					
					<th class="pad-basic">A. Docencia</th>
					<th class="pad-basic">A1. Práctica educativa</th>
					<th class="pad-basic">A2. Trabajo de grado (Educación Infantil) Proyecto pedagógico (Educación Especial)Investigación pedagógica (Psicología y Pedagogía)Trabajo de grado (Educación Comunitaria)</th>
					<th class="pad-basic">B. Investigación</th>
					<th class="pad-basic">Proyectos de extensión</th>
					<th class="pad-basic">Actividades de gestión institucional	</th>
					<th class="pad-basic">Observaciones Coordiandor</th>
				<tr>
			</table>
					
				
		</section>
	</body>
</html>