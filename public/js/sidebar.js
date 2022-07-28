const sidebar = document.querySelector('.sidebar');
    
function showSidebar(){
  sidebar.style.display = 'inline-block';
}

function hideSidebar() {
  sidebar.style.display = 'none';
}

sidebar.addEventListener('click', function (event) {
  if(sidebar == event.target)
      hideSidebar();
});