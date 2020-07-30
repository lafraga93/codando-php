<?php require_once 'resources/layout/header.html'; ?>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <div class="site-logo mr-auto w-25"><a href="#home-section">Codando PHP</a></div>
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

<div class="intro-section" id="home-section">
  <div class="slide-1" style="background-image: url('../../resources/images/general/cover.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row align-items-center">
            <div class="col-lg-6 offset-md-3 text-center text-homepage">
              <h1  data-aos="fade-up" data-aos-delay="100">Conteúdos sobre PHP de graça!</h1>
              <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Veja os vídeos, tire dúvidas, desenvolva habilidades e trabalhe com PHP do jeito certo. De graça, é claro!</p>
              <p data-aos="fade-up" data-aos-delay="300"><a href="#videos" class="btn btn-primary py-3 px-5 btn-pill">Veja os vídeos</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section courses-title" id="videos">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
        <h2 class="section-title">VÍDEOS</h2>
      </div>
    </div>
  </div>
</div>

<!--
<div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    
    <div class="row">
      <div class="owl-carousel col-12 nonloop-block-14">

        <div class="course bg-white h-100 align-self-stretch">
          <figure class="m-0">
            <a href="lesson/01/"><img src="../../resources/images/covers/01.jpg" alt="" class="img-fluid"></a>
          </figure>
          <div class="course-inner-text py-4 px-4">
            <span class="course-price">Utilizando Docker</span>
            <div class="meta"><span class="icon-clock-o"></span>03 vídeo(s) de 05 minuto(s) cada</div>
            <h3><a href="#">Utilizando Docker</a></h3>
            <p>Configuração de um ambiete mínimo PHP com Docker</p>
          </div>
        </div>

        <div class="course bg-white h-100 align-self-stretch">
          <figure class="m-0">
            <a href="lesson/02/"><img src="../../resources/images/covers/02.jpg" alt="" class="img-fluid"></a>
          </figure>
          <div class="course-inner-text py-4 px-4">
            <span class="course-price">Criando pacotes com Composer</span>
            <div class="meta"><span class="icon-clock-o"></span>01 vídeo(s) de 10 minuto(s)</div>
            <h3><a href="#">Criando pacotes com Composer</a></h3>
            <p>Criação, úbicação e utilização de pacotes PHP através do Composer</p>
          </div>
        </div>

        <div class="course bg-white h-100 align-self-stretch">
          <figure class="m-0">
            <a href="lesson/03/"><img src="../../resources/images/covers/03.jpg" alt="" class="img-fluid"></a>
          </figure>
          <div class="course-inner-text py-4 px-4">
            <span class="course-price">Conhecendo Generators</span>
            <div class="meta"><span class="icon-clock-o"></span>01 vídeo(s) de 10 minuto(s)</div>
            <h3><a href="#">Conhecendo Generators</a></h3>
            <p>Conceito e aplicação prática de Generators com PHP</p>
          </div>
        </div>

        <div class="course bg-white h-100 align-self-stretch">
          <figure class="m-0">
            <a href="lesson/04/"><img src="../../resources/images/covers/04.jpg" alt="" class="img-fluid"></a>
          </figure>
          <div class="course-inner-text py-4 px-4">
            <span class="course-price">Injeção de Dependência</span>
            <div class="meta"><span class="icon-clock-o"></span>03 vídeo(s) de 05 minuto(s) cada</div>
            <h3><a href="#">Injeção de Dependência</a></h3>
            <p>Conceito e alicação prática de Injeção de Dependênci com PHP</p>
          </div>
        </div>

      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-7 text-center">
        <button class="customPrevBtn btn btn-primary m-1"><i class="icon-arrow-left " aria-hidden="true"></i></button>
        <button class="customNextBtn btn btn-primary m-1"><i class="icon-arrow-right" aria-hidden="true"></i></button>
      </div>
    </div>

  </div>
</div>
-->

<?php require_once 'resources/layout/footer.html'; ?>
