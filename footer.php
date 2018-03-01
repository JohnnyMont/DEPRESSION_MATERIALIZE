<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <p class="grey-text text-lighten-4">Esse trabalho tem como objetivo a coleta de dados sobre as informações de acordo com o conhecimento de cada um sobre o assunto.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="index.php">Reiniciar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2017 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script>
  var enviar = document.getElementById('enviar');
  var btn = document.getElementsByClassName('enviar');
  var resposta1 = document.getElementsByClassName('resposta1');
  var conteudo = document.getElementById('conteudo');
  var p1 = document.getElementById('part1');
  var p2 = document.getElementById('part2');
  var ano = document.getElementById('ano');
  var turma = document.getElementById('turma');
  var idade = document.getElementById('idade');
  p2.style.display="none";
  enviar.onclick = function(){
    p1.style.display = "none";
    p2.style.display = "block";
    return false;
  };
  $('button').click(function(){
    var valor = $(this).val();
    var nome = $(this).attr('name');
    if (nome != "ultimaR") {
      $('.slider').slider('next');
    }else{
      alert("ultimo botao");
    }
    $('#area').val(valor + ' ' + nome)
  });
</script>
</body>
</html>