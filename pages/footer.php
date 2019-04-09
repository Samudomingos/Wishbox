<?php 
  require_once 'classes'.DIRECTORY_SEPARATOR.'Usuarios.php';
  
  if (isset($_POST['email']) && !empty($_POST['email'])) 
  {
    $email = addslashes($_POST['email']);

    $usuario = new Usuarios($conn);

    $usuario->cadEmail($email);

  }
?>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-light">Make a wish!</h5>
          <p class="text-light">Somos quem transforma seus sonhos em realidade, somos quem traduz os seus desejos nos melhores produtos e serviços gráficos!</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          

        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h5 class="text-uppercase font-weight-bold text-light mb-4">Contato</h6>
          <p class="text-light">
            <i class="fas fa-home mr-3 text-light"></i> São Paulo, SP 10012, BR</p>
          <p class="text-light">
            <i class="fas fa-envelope mr-3 text-light"></i>contato@wishbox.com.br</p>
          <p class="text-light">
            <i class="fas fa-phone mr-3 text-light"></i> +55 (11) 2659-1862</p>
          <p class="text-light">
            <i class="fas fa-print mr-3 text-light"></i> +55 (11) 2659-1873</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 text-light">Receba nossas promoções</h5>
      </li>
      <li class="list-inline-item">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Cadastre-se
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Você é especial para a Wishbox</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="form-group">        
        <div class="modal-body">
          <h5> Fique por dentro de nossas promoções!</h5>
           <label for="exampleInputEmail1">Endereço de Email</label>
           <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="seuemail@email.com">
        </div>
        <div class="modal-footer">    
          <input type="submit" class="btn btn-warning rounded" value="Enviar"></input>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        </div>
      </form>  
    </div>
  </div>
</div>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="">
          <i class="fab fa-facebook-f text-light"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href="">
          <i class="fab fa-twitter text-light"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href="">
          <i class="fab fa-google-plus-g text-light"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="">
          <i class="fab fa-linkedin-in text-light"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1" href="">
          <i class="fab fa-dribbble text-light"> </i>
        </a>
      </li>
    </ul>

    <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright:
      <a href="https://samudomingos.ga">samudomingos.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->



        </div>
      </head>    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>