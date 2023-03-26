function showEspressoDetails() {
    const modal = document.getElementById('espresso-details');
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }
  
  function hideEspressoDetails() {
    const modal = document.getElementById('espresso-details');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  }