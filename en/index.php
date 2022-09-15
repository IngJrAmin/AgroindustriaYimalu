<?php
include 'header.php';
include_once 'mail.php';
?>

<div id="carga-container">
  <h2>Yimalu Agribusiness</h2>
  <div id="loading"></div>
  <h3>Loading</h3>
</div>

<div class="banner-container" id="inicio">
  <div class="img-container">

  </div>
  <div class="eslogan-container">
    <h1 class="text">Yimalu Agribusiness</h1>
    <h2 class="text"><b>From our fields</b> <br>to the world</h2>
    <p class="text">We are a Colombian company that offers products and services for agricultural production, field services and marketing; we promote quality and the productivity of our fields and so we are improving the expand of our markets.</p>
    <button class="text" onclick="window.location.href='#productos'">Discover &nbsp&nbsp<i class="fa-solid fa-circle-arrow-down"></i></button>

  </div>
</div>

<div class="productos-container" id="productos">
  <h2>Our Products</h2>
  <div class="cards">
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/caja.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Banana</h3>
        <p>We produce and sell the best of the best; our banana boxes are carefully selected; They are provided by producers in the region, who provide us with the best quality products for export.</p>
      </div>
      <div class="card-footer">
        <h4><a href="#productos">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/platano.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Harton Plantain</h3>
        <p>
          Our plantain, with the best tropical aroma, is one of the strongest products in our environment and is handled through multiple phases such as:
        <ul style="margin-top: 10px">
          <li style="list-style:inside">Vacuum packed plantain.</li>
          <li style="list-style:inside">Precooked mashed plantain.</li>
          <li style="list-style:inside">Peeled plantain.</li>
        </ul>
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Banana" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/coco.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Coconut</h3>
        <p>This tropical fruit has excellent quality results. Our coconut boxes are brought to the market at the best prices. This fruit has the best producing hands.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Coconut" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/limon.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Tahiti Lemon</h3>
        <p>Our lemon fruit goes through a very thorough selection process. We take the best lemon, with the best aroma and juiciness. This product is grown by our producers with all the love.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Persian_lime" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/aguacate.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Hass Avocado</h3>
        <p>Our avocado takes one of the best packaging, allowing its maturation to take place naturally. Our avocado is handled by an excellent selection, strapping and bagging team, which has a supervisory staff. Under its skin, this product hides an exquisite and smooth pulp.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Hass_avocado" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/pina.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Pineapple</h3>
        <p>Our pineapple is one of the favorite fruits for its versatility. This product is carefully palletized by our production team and these are packed in plastic boxes that have their respective holes for optimal ventilation. Our pineapple has a very special care.</p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Pineapple" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/yuca.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Cassava</h3>
        <p>It is the richest tuber in carbohydrates. This product is grown in our fields, where the best agricultural products in the world are born. It is handled in several phases such as:
        <ul style="margin-top: 10px">
          <li style="list-style:inside">Peeled and frozen cassava.</li>
          <li style="list-style:inside">Paraffined cassava.</li>
        </ul>
        </p>
      </div>
      <div class="card-footer">
        <h4><a href="https://en.wikipedia.org/wiki/Cassava" target="blank">See more</a></h4>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <img src="../assets/images/products/pulpas.jpg" alt="">
      </div>
      <div class="card-body">
        <h3>Fruit pulps</h3>
        <p>
          Commercially we offer the best and top quality pulps. Our pulps always have their own storage for freezing, which allows them to keep their nutrients and flavors intact. These pulps are taken from the best fruits of our fields. We handle a wide variety of fruit pulps.</p>
      </div>
      <div class="card-footer">
        <h4><a href="#productos">See more</a></h4>
      </div>
    </div>
  </div>
</div>
<div class="servicios-container" id="servicios">
  <h2>Our Services</h2>
  <div class="cards">
    <div class="card">
      <div class="icon">
        <img src="../assets/images/icons/tractor.png" alt="">
      </div>
      <div class="info">
        <span>Sale of</span>
        <h3>agricultural products</h3>
      </div>
    </div>
    <div class="card">
      <div class="icon">
        <img src="../assets/images/icons/quimico.png" alt="">
      </div>
      <div class="info">
        <span>Sale of</span>
        <h3>agrochemicals</h3>
      </div>
    </div>
    <div class="card">
      <div class="icon">
        <img src="../assets/images/icons/barco.png" alt="">
      </div>
      <div class="info">
        <span>Transport of</span>
        <h3>agricultural supplies</h3>
      </div>
    </div>
  </div>
</div>
<div class="about-container" id="about">
  <h2>About us</h2>
  <div class="filosofia-container" id="filosofia">
    <div class="elements">
      <div class="element">
        <h3><i class="fa-solid fa-lightbulb"></i> Mission</h3>
        <p>Yimalu Agribusiness is a Colombian private company, in charge of marketing and transforming agricultural products, seeking to bring to each of your homes fruits above your expectations, preserving the economic well-being of the region and its associates, based on the highest quality standards.</p>
      </div>
      <div class="element">
        <h3><i class="fa-solid fa-eye"></i> Vision</h3>
        <p>Yimalu Agribusiness aspires to be recognized nationally and internationally in 2025 for its efficiency, product quality and service provided, giving greater confidence to its clients and associates in the construction of international markets.</p>
      </div>
      <div class="element">
        <h3><i class="fa-solid fa-bullseye"></i> Objective</h3>
        <p>Yimalu Agribusiness intends to direct its activities towards the promotion, commercialization and transformation of the Colombian agricultural variety to the diferent part of the world requested.</p>
      </div>
    </div>
  </div>
  <div class="secs sec1">
    <div class="img-container">
      <img src="../assets/images/logo/logo.png" alt="Logotipo">
    </div>
    <div class="info-container" id="historia">
      <p>Our company was born on october 2, 2019 as a small company where a group of people participated as shareholders who, with the desire to independently carry out the commercialization of their banana boxes, offered buyers the possibility of having spontaneous contact with producers in the region, thus achieving increasing percentages of profitability per box exported.</p>
    </div>
  </div>
  <div class="secs sec2">
    <div class="img-container">
      <img src="../assets/images/finca.jpg" alt="">
    </div>
    <div class="info-container">
      <p>Our company acquires its product from farms specialized in the exploitation of bananas, which have fruits certified by international entities such as <a href="https://www.globalgap.org/uk_en/index.html" target="blank">Globalgap</a> and <a href="https://www.rainforest-alliance.org/" target="blank">Rainforest</a>, among other. Our main corporate purpose is to carry out foreign trade operations and particularly, directing its activities towards the promotion and commercialization of Colombian products in foreign markets, export of fresh fruits, such as bananas.</p>
    </div>
  </div>
  <div class="secs sec3">
    <div class="img-container">
      <img src="../assets/images/container.jpg" alt="">
    </div>
    <div class="info-container">
      <p>Yimalu Agribusiness works simultaneously with its producers and marketers in the country to provide products with high international quality standards, complying with the specifications and volumes requested to satisfy our customers in this way, such as bananas, paraffined cassava, peeled plantain, among other.</p>
    </div>
  </div>
</div>
<div class="contact-container" id="contact">
  <h2>Contact us</h2>
  <form action="" method="POST">
    <div class="form">
      <h3 class="input"><i class="fa-solid fa-square-envelope"></i> Send us an email</h3>
      <div class="boxInput input">
        <input type="text" name="name" required="required">
        <span>Name</span>
      </div>
      <div class="boxInput input mail">
        <input type="text" name="email" required="required">
        <span>Email</span>
      </div>
      <div class="boxInput input">
        <input type="number" name="phone" required="required">
        <span>Phone</span>
      </div>
      <div class="boxInput input">
        <input type="text" name="asunto" required="required">
        <span>Subject</span>
      </div>
      <div class="boxInput input">
        <textarea name="message" required="required"></textarea>
        <span>Message</span>
      </div>
      <button type="submit">Send &nbsp<i class="fa-solid fa-circle-chevron-right"></i></button>
    </div>
  </form>
</div>
<?php
include 'footer.php';
?>