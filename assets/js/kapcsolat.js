document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('kapcsolatForm');
  const btn  = document.getElementById('kuld');

  if (!form || !btn) {
    console.error('Nem található a kapcsolat űrlap vagy a küldés gomb!');
    return;
  }

  // Kezdetben letiltjuk a gombot
  btn.disabled = true;

  // HTML5 validációs szabályok:
  // - <input required minlength="5">
  // - <input type="email" required>
  // - <textarea required>
  // Ezeket már beállítottuk a kapcsolat.php-ben

  function validate() {
    // checkValidity() true, ha minden required, minlength, type stb. rendben
    const isValid = form.checkValidity();
    btn.disabled = !isValid;
  }

  // Minden változásnál ellenőrizzük:
  form.addEventListener('input', validate);
  form.addEventListener('change', validate);

  // Submit előtt is futtasd le:
  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      validate();
    }
  });

  // Első állapot beállítása
  validate();
});