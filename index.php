<?php
include 'header.php';
include_once 'mail.php';
?>

<div id="carga-container">
  <h2>Agroindustria Yimalu</h2>
  <div id="loading"></div>
  <h3>Cargando</h3>
</div>

<div class="banner-container" id="inicio">
  <div class="img-container">

  </div>
  <div class="eslogan-container">
    <h1 class="text">Agroindustria Yimalu</h1>
    <h2 class="text"><b>De nuestros campos</b> <br>para el mundo</h2>
    <p class="text">Somos una compañía que ofrece productos y servicios para la producción agricola, servicios del campo y comercialización; promovemos la calidad y la productividad de nuestros campos y así vamos mejorando el desarrollo de nuestros mercados.</p>
    <button class="text" onclick="window.location.href='#productos'">Descubre &nbsp&nbsp<i class="fa-solid fa-circle-arrow-down"></i></button>
  </div>
</div>
<div class="productos-container" id="productos">
  <h2>Nuestros productos</h2>
  <div class="cards">
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/caja.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Banano</h3>
        <p>Producimos y vendemos lo mejor de lo mejor; nuestras cajas de banano son seleccionadas cuidadosamente; las proveen productores de la región, los cuales nos proporcionan productos de la mejor calidad para su exportación.
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="#productos">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/platano.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Plátano Hartón</h3>
        <p>Nuestro plátano, con el mejor aroma tropical, es uno de los productos más fuertes de nuestro entorno y es manejado por múltiples fases como son:
        <ul style="margin-top: 10px">
          <li style="list-style:inside">Plátano empacado al vacío.</li>
          <li style="list-style:inside">Patacones precocidos.</li>
          <li style="list-style:inside">Plátano pelado.</li>
        </ul>
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Banana" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/coco.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Coco</h3>
        <p>Esta fruta tropical cuenta con excelentes resultados de calidad. Nuestras cajas de coco se sacan al mercado a los mejores precios. Esta fruta cuenta con las mejores manos productoras.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Coco" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/limon.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Limón Tahití</h3>
        <p>Nuestro fruto limonero pasa por un proceso de selección muy minucioso. Tomamos el mejor limón, con el mejor aroma y jugosidad. Este producto es cultivado por nuestros productores con todo el amor.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Citrus_%C3%97_latifolia" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/aguacate.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Aguacate Hass</h3>
        <p>Nuestro aguacate se lleva uno de los mejores embalajes, permitiendo que su maduración se realice de manera natural. Nuestro aguacate es manejado por un excelente equipo de selección, flejado y embolsado, el cual cuenta con un personal de supervisión. Bajo su piel, este producto esconde una exquisita y suave pulpa.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Aguacate_Hass" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/pina.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Piña</h3>
        <p>Nuestra piña es una de las frutas favoritas por su versatilidad. Este producto es cuidadosamente paletizado por nuestro equipo de producción y estas son empacadas en cajas de plástico que cuentan con sus respectivos orificios para una óptima ventilación. Nuestra piña cuenta con un cuidado súmamente especial.
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Ananas_comosus" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/yuca.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Yuca</h3>
        <p>Es el tubérculo más rico en hidratos de carbono. Este producto es cultivado en nuestros campos, de donde nacen los mejores productos agrícolas del mundo. Es manejado en varias fases como son:
        <ul style="margin-top: 10px">
          <li style="list-style:inside">Yuca pelada y congelada.</li>
          <li style="list-style:inside">Yuca parafinada.</li>
        </ul>
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="https://es.wikipedia.org/wiki/Manihot_esculenta" target="blank">Ver más</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="assets/images/products/pulpas.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Pulpas de fruta</h3>
        <p>Comercialmente brindamos las mejores pulpas y de primera calidad. Nuestras pulpas siempre cuentan con un almacenamiento propio al congelamiento, lo cual permite mantener sus nutrientes y sabores intactos. Estas pulpas son sacadas de las mejores frutas de nuestros campos. Manejamos una gran variedad de pulpas de fruta.
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="#productos">Ver más</a></h4>
      </div>
    </div>
  </div>
</div>
<div class="servicios-container" id="servicios">
  <h2>Nuestros Servicios</h2>
  <div class="cards">
    <div class="card">
      <div class="icon">
        <img src="assets/images/icons/tractor.png" alt="">
      </div>
      <div class="info">
        <span>Venta de</span>
        <h3>productos agrícolas</h3>
      </div>
    </div>
    <div class="card">
      <div class="icon">
        <img src="assets/images/icons/quimico.png" alt="">
      </div>
      <div class="info">
        <span>Venta de</span>
        <h3>agroquímicos</h3>
      </div>
    </div>
    <div class="card">
      <div class="icon">
        <img src="assets/images/icons/barco.png" alt="">
      </div>
      <div class="info">
        <span>Transporte de</span>
        <h3>insumos agrícolas</h3>
      </div>
    </div>
  </div>
</div>
<div class="about-container" id="about">
  <h2>¿Quiénes somos?</h2>
  <div class="filosofia-container" id="filosofia">
    <div class="elements">
      <div class="element">
        <h3><i class="fa-solid fa-lightbulb"></i> Misión</h3>
        <p>Agroinsdustria Yimalu es una empresa privada, encargada de comercializar y transformar productos agrícolas, busca llevar a cada uno de sus hogares frutas por encima de sus expectativas, conservando el bienestar económico de la región y sus asociados, basados en los más altos estándares en calidad.
        </p>
      </div>
      <div class="element">
        <h3><i class="fa-solid fa-eye"></i> Visión</h3>
        <p>La empresa Agroindustria Yimalu aspira ser reconocida nacional e internacionalmente para el año 2025 por su eficiencia, calidad en el producto y servicio prestado, dando mayor confianza a sus clientes y asociados en la construcción de mercados internacionales.
        </p>
      </div>
      <div class="element">
        <h3><i class="fa-solid fa-bullseye"></i> Objetivo</h3>
        <p>La empresa Agroindustria Yimalu pretende orientar sus actividades hacia la promoción, comercialización y transformación de variedad agrícola colombiana a las diferentes partes del mundo solicitadas.
        </p>
      </div>
    </div>
  </div>
  <div class="secs sec1">
    <div class="img-container">
      <img src="assets/images/logo/logo.png" alt="Logotipo">
    </div>
    <div class="info-container" id="historia">
      <p>
        Nuestra empresa nace el 2 Octubre de 2019 como una pequeña empresa donde participaron como accionistas un grupo de personas que, con el deseo de realizar de forma independiente la comercialización de sus cajas de banano, brindaron a los compradores la posibilidad de tener un contacto espontaneo con productores de la región, alcanzando de este modo, porcentajes ascendentes de rentabilidad por caja exportada.
      </p>
    </div>
  </div>
  <div class="secs sec2">
    <div class="img-container">
      <img src="assets/images/finca.jpg" alt="">
    </div>
    <div class="info-container">
      <p>
        Nuestra empresa adquiere su producto de fincas especializadas en la explotación de banano, las cuales cuentan con frutos certificados por entes internacionales como lo son <a href="https://www.globalgap.org/uk_en/index.html" target="blank">Globalgap</a> y <a href="https://www.rainforest-alliance.org/" target="blank">Rainforest</a>, entre otros. Nuestro objeto social principal es efectuar operaciones de comercio exterior y particularmente, orientando sus actividades hacia la promoción y comercialización de productos colombianos en los mercados externos, exportación de frutas frescas, tal como lo es el banano.
      </p>
    </div>
  </div>
  <div class="secs sec3">
    <div class="img-container">
      <img src="assets/images/container.jpg" alt="">
    </div>
    <div class="info-container">
      <p>
        Agroindustria Yimalu trabajará simultáneamente con sus productores y comercializadoras del país para brindar productos con altos estándares internacionales de calidad, cumpliendo con las especificaciones y volúmenes solicitados para satisfacer de esta manera a nuestros clientes, tal como lo es el banano, yuca parafinada, plátano pelado y más.
      </p>
    </div>
  </div>
</div>
<div class="contact-container" id="contact">
  <h2>Contáctanos</h2>
  <form action="" method="POST">
    <div class="form">
      <h3 class="input"><i class="fa-solid fa-square-envelope"></i> Envíanos un correo</h3>
      <div class="boxInput input">
        <input type="text" name="name" required="required">
        <span>Nombre</span>
      </div>
      <div class="boxInput input mail">
        <input type="text" name="email" required="required">
        <span>Correo</span>
      </div>
      <div class="boxInput input">
        <input type="number" name="phone" required="required">
        <span>Teléfono</span>
      </div>
      <div class="boxInput input">
        <input type="text" name="asunto" required="required">
        <span>Asunto</span>
      </div>
      <div class="boxInput input">
        <textarea name="message" required="required"></textarea>
        <span>Mensaje</span>
      </div>
      <button type="submit">Enviar &nbsp<i class="fa-solid fa-circle-chevron-right"></i></button>
    </div>
  </form>
</div>
<?php
include 'footer.php';
?>