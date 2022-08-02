const sidebar = document.querySelector('.sidebar');
    
function showSidebar(){
  sidebar.style.display = 'inline-block';
}

function hideSidebar() {
  sidebar.style.display = 'none';
}

if(sidebar) {
  sidebar.addEventListener('click', function (event) {
    if(sidebar == event.target)
        hideSidebar();
  });
}
