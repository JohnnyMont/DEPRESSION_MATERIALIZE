<?php
require_once("menu.php");
?>
<div class="container" style="height: 435px">
	<div class="row" id="part1">
		<form action="#" method="post" class="col s12">
			<div class="row" id="conteudo">
				<h4 class="center tema">Identificação</h4>
				<div class="input-field col s4">
					<select id="ano">
						<option value="1">1º Ano</option>
						<option value="2">2º Ano</option>
						<option value="3">3º Ano</option>
					</select>
					<label>Sua Série</label>
				</div>
				<div class="input-field col s4">
					<select id="turma">
						<option value="Enfermagem">Enfermagem</option>
						<option value="Guia">Guia de Turismo</option>
						<option value="Eventos">Eventos</option>
						<option value="Informática">Informática</option>
					</select>
					<label>Sua Turma</label>
				</div>
				<div class="input-field col s4">
					<select id="idade">
						<option value="14">14 Anos</option>
						<option value="15">15 Anos</option>
						<option value="16">16 Anos</option>
						<option value="17">17 Anos</option>
						<option value="18">18 Anos</option>
					</select>
					<label>Sua Idade</label>
				</div>
				<input type="submit" class="btn" style="width: 100%; background: black" name="enviar" id="enviar">
			</div>
		</form>
	</div>
	<div class="slider" id="part2">
		<ul class="slides">
			<li class="cinza">
				<div class="center container" style="color: black;">
					<h3>Para você, o que é a depressão?</h3>
					<p>
						<button class="enviar" name="resposta1" value="Um transtorno mental">Um transtorno mental</button>
						<button class="enviar" name="resposta1" value="Uma frescura">Uma frescura</button>
						<button class="enviar" name="resposta1" value="Coisa de quem quer chamar atenção">Coisa de quem quer chamar atenção</button>
					</p>
				</div>
			</li>
			<li class="cinza">
				<div class="center container" style="color: black;">
					<h3>Para você, quem aparenta está em depressão?</h3>
					<p>
						<button class="enviar" name="resposta2" value="1"><img src="img/depressao.jpg"></button>
						<button class="enviar" name="resposta2" value="2"><img src="img/depre1.jpg"></button>
						<button class="enviar" name="resposta2" value="3"><img src="img/depressão.jpg"></button>
					</p>
				</div>
			</li>
			<li class="cinza">
				<div class="center container" style="color: black;">
					<h3>Acabou</h3>
					<p>
						<button class="enviar" name="ultimaR" value="1"></button>
						<button class="enviar" name="ultimaR" value="2"></button>
						<button class="enviar" name="ultimaR" value="3"></button>
					</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<?php
require_once("footer.php");
?>