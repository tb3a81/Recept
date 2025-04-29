window.onload = () => {
    document.getElementById('kuld').disabled = true;
  };
  
  function ellenorizKapcsolat() {
    let rendben = true, fokusz = null;
    const reEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  
    const nev = document.getElementById('nev');
    if (nev.value.length < 5) {
      nev.style.background = '#fdd';
      rendben = false;
      fokusz = fokusz || nev;
    } else {
      nev.style.background = '#dfd';
    }
  
    const email = document.getElementById('email');
    if (!reEmail.test(email.value)) {
      email.style.background = '#fdd';
      rendben = false;
      fokusz = fokusz || email;
    } else {
      email.style.background = '#dfd';
    }
  
    const szoveg = document.getElementById('szoveg');
    if (!szoveg.value.trim()) {
      szoveg.style.background = '#fdd';
      rendben = false;
      fokusz = fokusz || szoveg;
    } else {
      szoveg.style.background = '#dfd';
    }
  
    if (fokusz) fokusz.focus();
    document.getElementById('kuld').disabled = !rendben;
    return rendben;
  }