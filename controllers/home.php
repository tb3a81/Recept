<?php
// controllers/home.php
?>
<div class="container">

  <!-- Bemutatkozó szöveg -->
  <section class="home-intro">
    <h1>Pléh Csárda – A rántott hús Művészete</h1>
    <p>
      A Pléh Csárda büszkén kínálja Magyarország legnagyobb és legízletesebb rántott húsait
      családias környezetben. Titkunk a kézzel panírozott, ropogós bunda és a gondosan kiválasztott
      hús. Nálunk nincsenek féladagok – itt csak teljes élmény vár! Családi receptjeinket 1995 óta
      őrizzük, és minden falatban benne van a szenvedélyünk.  
      Fedezd fel kitalált receptjeinket, kattints rájuk, és a felugró ablakban olvasd el a titkos
      elkészítési útmutatót!  
    </p>
  </section>

  <!-- Videók -->
  <section class="home-media">
    <div class="video-container">
      <h2>Csárda kínálata</h2>
      <video class="media-video" controls>
        <source src="assets/videos/pleh.mp4" type="video/mp4">
        A böngésződ nem támogatja a videólejátszást.
      </video>
    </div>
    <div class="video-container">
      <h2>Kedvcsináló YouTube videó</h2>
      <iframe class="media-video"
        src="https://www.youtube.com/embed/YSaD58cQpQE?si=qKDET5TJgQbBaRTU"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
  </section>

  <!-- Rántotthús receptek -->
  <section class="home-recipes">
    <h2>Legjobb rántotthúsaink</h2>
    <table class="recipe-grid">
      <tr>
        <td><a href="#" onclick="alert('Recept 1: Csárda klasszikus…');return false;">Csárda klasszikus</a></td>
        <td><a href="#" onclick="alert('Recept 2: Sajtos bundában…');return false;">Sajtos bundában</a></td>
        <td><a href="#" onclick="alert('Recept 3: Mustáros mázzal…');return false;">Mustáros mázzal</a></td>
        <td><a href="#" onclick="alert('Recept 4: Fokhagymás ízvilág…');return false;">Fokhagymás ízvilág</a></td>
        <td><a href="#" onclick="alert('Recept 5: Paprikás-panír…');return false;">Paprikás-panír</a></td>
      </tr>
      <tr>
        <td><a href="#" onclick="alert('Recept 6: Mézes-mustáros…');return false;">Mézes-mustáros</a></td>
        <td><a href="#" onclick="alert('Recept 7: Parmezános ropogós…');return false;">Parmezános ropogós</a></td>
        <td><a href="#" onclick="alert('Recept 8: Zöldfűszeres bundában…');return false;">Zöldfűszeres bundában</a></td>
        <td><a href="#" onclick="alert('Recept 9: Csípős-chilis panír…');return false;">Csípős-chilis panír</a></td>
        <td><a href="#" onclick="alert('Recept 10: Görög joghurtos…');return false;">Görög joghurtos</a></td>
      </tr>
    </table>
  </section>

  <!-- Külső receptgyűjtemények -->
  <section class="home-links">
    <h2>Receptgyűjtemények</h2>
    <ul class="link-list">
      <li><a href="https://www.mindmegette.hu/receptek/grill" target="_blank">Legjobb grill ételek</a></li>
      <li><a href="https://www.mindmegette.hu/receptek/salata" target="_blank">Legjobb saláták</a></li>
      <li><a href="https://www.nosalty.hu/recept/desszert" target="_blank">Legjobb desszertek</a></li>
      <li><a href="https://www.nosalty.hu/recept/leves" target="_blank">Legjobb levesek</a></li>
      <li><a href="https://www.nosalty.hu/recept/porkolt" target="_blank">Legzamatosabb pörköltek</a></li>
      <li><a href="https://www.nosalty.hu/tema/teszta" target="_blank">Nagy tészta specialitások</a></li>
      <li><a href="https://www.thespruceeats.com/traditional-hungarian-recipes-4162550" target="_blank">Magyaros ételklasszikusok</a></li>
    </ul>
  </section>

  <!-- Google Térkép -->
  <section class="home-map">
    <h2>Hol találhatsz minket?</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.0461566547247!2d19.13582277663726!3d47.636397485919076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741d124ae3a7a57%3A0xbe4ecb2c794f4350!2zUGzDqWggQ3PDoXJkYSDDiXR0ZXJlbQ!5e1!3m2!1shu!2shu!4v1745855336978!5m2!1shu!2shu"
      allowfullscreen="" loading="lazy">
    </iframe>
  </section>

</div>