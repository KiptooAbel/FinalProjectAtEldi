function showMenu(){
    var drop_menu=document.getElementById("drop_menu");
    
    drop_menu.style.display = "block";
    
      var drop_menuIcon = document.getElementById('drop_menuIcon');
      drop_menuIcon.style.display = "none";
      var close_menuIcon = document.getElementById('close_menuIcon');
      close_menuIcon.style.display = "block";

  }
    function closeMenu(){
      document.getElementById("drop_menu").style.display = "none";
      
      var close_menuIcon = document.getElementById('close_menuIcon');
      close_menuIcon.style.display = "none";
      var drop_menuIcon = document.getElementById('drop_menuIcon');
      drop_menuIcon.style.display = "block";
    }
