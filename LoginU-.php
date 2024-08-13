<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="icon" href="assets/img/NPH_Logo_Web.png" />
    <title>Login</title>
  </head>
  <body>
     <!-- Cabeçalho Marron -->
<div class="barra1"></div>
<div class="barra2"></div>
<div class="barra3 container2 ">
 
  



  <!-- Logomarca -->
  <a href="index.html">
    <img src="assets/img/NPH_Logo_Web.png"   alt=""
 /></a>
</div>

     <!-- Conteúdo principal -->
     <main class="container-fluid conteudo  ">
      <section class="container ">
        <div class="row ">
    <!-- Cabeçalho -->
    <header class="container2" class="col-12 text-center mb-5  ">
    <h2>
      Olá! Aqui você pode entrar em sua conta de usuário, fazer seu
      cadastro e recuperar sua senha.
    </h2>
</header>

   
  
        
          <!-- Título e Subtítulo -->
          <div class="col-12 mt-2  text-center mb-4">
           
          </div>
        </div>

        <!-- Formulário de login -->
        <form class="row g-1" action="" method="post">
          <img src="assets/img/UserIcon.png">
          <!-- Email -->
          <div class="col-12  col-lg-12  mt-2 div1 img">
            <p>Email</p>
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder=""
              name="email"
            />
          
  
          </div>

          <!-- Senha -->
          <div class="col-12  col-lg-12  mt-2">
            <p>Senha</p>
            <input
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder=""
              name="senha"
            />
 
          </div>

          <!-- Botão de login -->
      
          <div class="col-12 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-primary btn-bd-primary" style="background-color: #713600; border-color: #713600;">
              Login
         </button>
        </div>
       

          <div class="col-12 mt-0 mb-1 text-center">
            <button type="submit" class="btn btn-primary btn-bd-primary" style="background-color: #713600; border-color: #713600;">
              Esqueci minha senha
            </button>
          </div>
          </form>
        </form>

        <!-- Links de recuperação de senha e cadastro de usuário -->
        <div class="row">
          <div class="col-12 text-center mb-3 fw-bold">
            <a href="CadastroNP.html"></a>
          </div>

          <div class="col-12  mb-3 text-center">
            <a href="CadastroNP.html">
            <button  type="" class="btn btn-primary btn-bd-primary "style="background-color: #713600; border-color: #713600;">
              Cadastrar-se 
          
            </button>
          </a>

            
          
          
          
   
              <div class="row ">
                <div class=" container2 mt-5 col-12 text-center mb-3 ">
               <h2> Este botão vai para a pagina de login e cadastro de hotéis. Caso
                    seja um, aperte nele.</h2>  
                  </div>
                </div>
              </div>
         

            <div class="col-12 mt-1 mb-5 text-center">
              <a href="LoginHotel.html">
              <button type="submit" class="btn btn-primary btn-bd-primary" style="background-color: #713600; border-color: #713600;">
                Login e Cadastro de Hotel
              </button>
          </a>
          </div>
        </div>
      </section>
    </main>

    
 

   
<!-- Rodapé -->
<footer class="container-fluid py-3">
  <div class="row">
    <!-- Logomarca -->
    <div class="col-12 text-center pb-3">
      <a class="navbar-brand" href="#">
        <img
          class="logo-footer"
          src="assets/img/NPHLogoWeb.svg"
          alt="Logomarca"
        />
      </a>
    </div>

    <!-- Link para voltar ao início -->
    <div class="col-12 text-center">
      <p class="font-inter-footer">© 2024 NortePet Hospedagens by Northbridge - Hospedagens para seu pet</p>
    </div>
  </div>
</footer>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
