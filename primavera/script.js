const flower = document.querySelector('.flower');

flower.addEventListener('mouseover', () => {
  flower.style.animation = 'spin 2s linear infinite';
});

flower.addEventListener('mouseout', () => {
  flower.style.animation = 'spin 5s linear infinite';
});
