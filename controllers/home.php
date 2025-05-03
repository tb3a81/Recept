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
      <td>
        <a href="#"
           onclick="alert(
`Csárda klasszikus
1. 25 dkg sertésszeletet enyhén klopfold ki.
2. Sózd, borsozd, majd liszt–tojás–zsemlemorzsa sorrendben panírozd.
3. Bő, forró olajban süsd oldalanként 4–5 percig.
4. Szűrd le, tálald friss citromkarikával.`
);return false;">
          Csárda klasszikus
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Sajtos bundában
1. Klopfold ki a hússzeleteket, sózd.
2. A tojásba keverj reszelt parmezánt.
3. Liszt–tojás+parmezán–zsemlemorzsa sorrendben panírozd.
4. 5 percig süsd 180°C-on, amíg aranybarna nem lesz.`
);return false;">
          Sajtos bundában
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Mustáros mázzal
1. Sózd, borsozd a húst.
2. Panírozd klasszikusan.
3. Süsd meg, majd kend meg dijoni mustárral.
4. Tartsd vissza a sütőben 2 percre, hogy ráolvadt legyen.`
);return false;">
          Mustáros mázzal
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Fokhagymás ízvilág
1. Hámozz meg 3 gerezd fokhagymát, préseld.
2. Keverd össze tojással, sóval, borssal.
3. Ebbe forgasd a hússzeleteket, majd panírozd zsemlemorzsában.
4. 4 percig süsd mindkét oldalát.`
);return false;">
          Fokhagymás ízvilág
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Paprikás-panír
1. Keverj 1 evőkanál édes paprikát a lisztbe.
2. Panírozd a húsokat paprikás liszt–tojás–zsemlemorzsa sorrendben.
3. 180°C-os olajban süsd 5 percig oldalanként.
4. Szórj még egy kis paprikát a tetejére.`
);return false;">
          Paprikás-panír
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="#"
           onclick="alert(
`Mézes-mustáros
1. 2 evőkanál mézet keverj 1 evőkanál mustárral.
2. Süsd meg a húsokat simán panírozva.
3. Kend meg a mézes keverékkel, majd 1 percig süsd tovább.
4. Tálald friss petrezselyemmel.`
);return false;">
          Mézes-mustáros
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Parmezános ropogós
1. A tojásba keverj 3 evőkanál reszelt parmezánt.
2. Panírozd liszt–tojás+parmezán–zsemlemorzsa sorrendben.
3. 180°C-on süsd 4 percig, majd 160°C-on 2 percig.
4. Ropogós és aromás lesz.`
);return false;">
          Parmezános ropogós
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Zöldfűszeres bundában
1. Apríts fel friss petrezselymet, kaprot, bazsalikomot.
2. Szórd a zsemlemorzsába a fűszereket.
3. Panírozd liszt–tojás–zöldfűszeres morzsa sorrendben.
4. Süsd 5 percig, a fűszerek kiadják az aromájukat.`
);return false;">
          Zöldfűszeres bundában
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Csípős-chilis panír
1. Keverj a zsemlemorzsához 1 teáskanál chiliport.
2. Panírozd liszt–tojás–chilis morzsa sorrendben.
3. 4 percig süsd 180°C-on, hogy megőrizze a csípősséget.
4. Tálald lime cikkekkel.`
);return false;">
          Csípős-chilis panír
        </a>
      </td>
      <td>
        <a href="#"
           onclick="alert(
`Görög joghurtos
1. Keverj natúr joghurtot, fokhagymaport, sót.
2. Pihentesd benne a húst 30 percig.
3. Panírozd simán, és süsd 4 percig oldalanként.
4. Tálald tzatziki szósszal.`
);return false;">
          Görög joghurtos
        </a>
      </td>
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