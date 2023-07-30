const select = document.getElementById('participation');
  const options = document.getElementById('options');

  select.addEventListener('change', function() {
    const value = select.value;
    const conferences = document.getElementById('participation-conferences');
    const stand = document.getElementById('participation-stand');
    const cocktail = document.getElementById('participation-cocktail');
    const networking = document.getElementById('participation-networking');
    const inscription = document.getElementById('participation-inscription');

    if (value === 'vip') {
      conferences.style.display = 'block';
      stand.style.display = 'block';
      cocktail.style.display = 'block';
      networking.style.display = 'block';
      inscription.style.display = 'block';
    } else if (value === 'classique') {
      conferences.style.display = 'block';
      stand.style.display = 'block';
      cocktail.style.display = 'none';
      networking.style.display = 'none';
      inscription.style.display = 'block';
    } else if (value === 'etudiant') {
      conferences.style.display = 'none';
      stand.style.display = 'none';
      cocktail.style.display = 'none';
      networking.style.display = 'none';
      inscription.style.display = 'none';
    }
  });