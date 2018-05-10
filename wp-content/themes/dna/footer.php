    <footer>
      <div class="footer-line">
        <div class="container">
          <div class="col-md-3">
            <a href="https://www3.hermespardini.com.br/pagina/103/o-hermes-pardini.aspx">Institucional</a>
          </div>

          <div class="col-md-3">
          <a href="https://www3.hermespardini.com.br/pagina/107/sala-de-imprensa.aspx">Imprensa</a>
          </div>

          <div class="col-md-3">
          <a href="http://www.hermespardini.com.br/ri">Investidores</a>
          </div>

          <div class="col-md-3">
          <a href="http://www.hermespardini.com.br/lojavirtual/">Loja Virtual</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-3">
          <h4>Clientes</h4>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'clientes',
              'container' => '',
              'menu_class'=> 'list-unstyled'
            ));
          ?>
        </div>
        <div class="col-md-3">
          <h4>Apoio a parceiros</h4>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'apoio-a-parceiros',
              'container' => '',
              'menu_class'=> 'list-unstyled'
            ));
          ?>
        </div>
        <div class="col-md-3">
          <h4>Médicos</h4>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'medicos',
              'container' => '',
              'menu_class'=> 'list-unstyled'
            ));
          ?>
        </div>
        <div class="col-md-3">
          <h4>Institucional</h4>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'institucional',
              'container' => '',
              'menu_class'=> 'list-unstyled'
            ));
          ?>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="col-md-3">
            <a href="https://www3.hermespardini.com.br/pagina/103/o-hermes-pardini.aspx">Conheço o Grupo</a>
          </div>

          <div class="col-md-6">
          <a href="javascript:;">RT.: Dr. Ariovaldo Mendonça - CRMMG 33477 - RQE 21876 - Inscrição CRM356-MG</a>
          </div>

          <div class="col-md-3">
          <a href="javascript:;">Esta empresa tem o apoio da Finep.</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>