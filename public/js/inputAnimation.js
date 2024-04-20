const inputs = document.querySelectorAll('.form-control');

window.onload = () => {
  inputs.forEach(input => {
    input.value !== '' ? input.classList.add('focused') : ''
    input.addEventListener('focus', () => {
      input.parentNode.querySelector('.form-label').classList.add('focused');
    });

    input.addEventListener('blur', () => {
      if (input.value === '') {
        input.parentNode.querySelector('.form-label').classList.remove('focused');
      }
    });
  });
}