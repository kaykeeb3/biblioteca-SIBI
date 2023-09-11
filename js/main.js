setTimeout(function() {
  var loadingContainer = document.querySelector('.loading-container');
  var content = document.querySelector('.content');

  loadingContainer.classList.add('hidden');
  content.classList.remove('hidden');
      window.location.href = '../login/main.php';
}, 2000);
 