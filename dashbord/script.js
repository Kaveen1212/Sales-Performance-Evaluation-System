var sidebarOpen = false;
var sidbar = document.getElementById("sidebar");

function openSidebar(){
    if(!sidebarOpen){
        sidebarOpen.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar(){
    if(sidebarOpen){
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}