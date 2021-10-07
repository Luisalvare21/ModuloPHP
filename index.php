<form id="contact" autocomplete="off" action="guarda.php" method="post">
    <fieldset>
      <input name="nombre" id="nombre" placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="telefono" id="telefono" placeholder="Telefone" type="tel" tabindex="3" required>
    </fieldset>
    <p class="parrafo"><label class="switch">
      <input type="checkbox" id="checkPrincipal"/>
      <span class="slider"></span>
    </label> Aceito receber conteúdos informativos e de publicidade, por email, chamada e/ou sms, deste website e dos seus parceiros, cujas opções deve gerir clicando <a id="myLink" href="#">aqui</a>.</p>
      <p class="parrafo1"><label class="switch1">
      <input type="checkbox" name="PYT" value="acepto" id="checkPrincipal"/>
      <span class="slider"></span>
    </label> Autorizo que os dados aqui recolhidos sejam utilizados – de acordo com os<a id="myLink" href="#">Termos & Condições</a>, a <a id="myLink" href="#">Política de Privacidade</a> e o Regulamento do Passatempo – para me habilitar a ganhar um Cabaz com Produtos para o meu Animal.</p>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div id="msjAlert" class="alert warning">
          <span class="closebtn">&times;</span>  
          <strong>Alerta!</strong> Seleccione minimo una opción.
        </div>

        <div style="text-align: right;">
          <span class="close">&times;</span>
        </div>
        <div style="text-align: center;">
          <h2>ESCOLHA AS OPÇÕES DE CONTEÚDO E PUBLICIDADE DESTE SITE E DOS SEUS PARCEIROS</h2>
        </div>
        <div>
          <ul class="lista">
            <label class="content-input">
              <input type="checkbox" name="check[]" onclick="selectedAll(this)" value="S100"/> TODOS 
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S1" onclick="selected()"/> Cultura, Entretenimento e Lazer 
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S2" onclick="selected()"/> Saúde, Bem-estar e Alimentação
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S3" onclick="selected()"/> Ciência, Tecnologia e Telecomunicações
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S4" onclick="selected()"/> Banca, Finanças e Seguros
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S5" onclick="selected()"/> Educação, Formação e Emprego
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S6" onclick="selected()"/> Imobiliário
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S7" onclick="selected()"/> Turismo e Viagens
              <i></i>
            </label>
            <label class="content-input">
              <input type="checkbox" name="check[]" value="S8" onclick="selected()"/> Energia, Combustíveis, Água e Ambiente
              <i></i>
            </label>
          </ul>
        </div>
        <br/>
        <div style="text-align: center;">
          <button id="btnOk" class="button">OK</button> 
        </div>
      </div>
    </div>
    <fieldset>
    <center> <button onClick="mostrar()" name="submit" type="submit" id="contact-submit" data-submit="...Enviando">QUERO CONTRATAR</button></center> 
    </fieldset>
  </form>