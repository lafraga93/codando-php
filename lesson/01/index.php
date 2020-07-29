<?php require_once '../../resources/layout/header.html'; ?>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <div class="site-logo mr-auto w-25"><a href="/">Cdando PHP</a></div>
      <div class="ml-auto w-25">
        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
            <li class="cta"><a href="#" class="nav-link"><span>Faça uma Doação</span></a></li>
          </ul>
        </nav>
        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
      </div>
    </div>
  </div>
</header>

<div class="intro-section single-cover" id="home-section">
  <div class="slide-1" style="background-image: url('../../resources/images/general/cover.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-6">
              <h1 data-aos="fade-up" data-aos-delay="0">Utilizando Docker</h1>
              <p data-aos="fade-up" data-aos-delay="100">03 vídeo(s) de 05 minuto(s) cada</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h3 class="text-black">Descrição do conteúdo</h3>
          <p class="mb-4"><strong class="text-black">Nível de Dificuldade: <small>BÁSICO</small></strong></p>
          <p class="justify">Veja como pode ser simples configurar um ambiente de desenvolvimento PHP mínimo utilizando containers e Docker</p>
          <hr>
          <h3 class="text-black">Vídeos</h3>
          <p class="mb-4">Clique no botão para visualizar o conteúdo!</p>
          <a data-fancybox href="#lesson-01" class="btn btn-primary">Conceitos</a>
          <a data-fancybox href="#lesson-01" class="btn btn-primary">Montando o ambiente</a>
          <a data-fancybox href="#lesson-01" class="btn btn-primary">Rodando um projeto básico</a>
          <video width="640" height="320" controls="true" id="lesson-01" class="lesson" src="" type="video/mp4"></video>
        </div>
      </div> 
    </div>
  </div>
</div>

<?php require_once '../../resources/layout/footer.html'; ?>
