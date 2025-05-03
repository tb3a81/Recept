document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('kapcsolatForm');
  const btn  = document.getElementById('kuld');

  if (!form || !btn) {
    console.error('Nem található a kapcsolat űrlap vagy a küldés gomb!');
    return;
  }

  btn.disabled = true;

  function validate() {
    const isValid = form.checkValidity();
    btn.disabled = !isValid;
  }

  form.addEventListener('input', validate);
  form.addEventListener('change', validate);
  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      validate();
    }
  });

  validate();
});