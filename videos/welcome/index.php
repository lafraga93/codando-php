<?php require_once '../../resources/layout/header.html'; ?>

<style>
  .iframe-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
  }
  iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border: none;
  }
</style>

<div class="intro-section single-cover" id="home-section">
  <div class="slide-1" style="background-image: url('../../resources/images/general/cover.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-6">
              <h1 data-aos="fade-up" data-aos-delay="0">Boas Vindas e Servidor Embutido do PHP</h1>
              <p data-aos="fade-up" data-aos-delay="100">05 minuto(s) de conteúdo</p>
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
          <p class="justify">Veja como pode ser simples iniciar seus estudos com a linguagem através desse recurso bacana que o PHP oferece nativamente!</p>
          <hr>
          <div class="iframe-container">
            <iframe src="https://www.youtube.com/embed/wStZjZbfOwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

<?php require_once '../../resources/layout/footer.html'; ?>
