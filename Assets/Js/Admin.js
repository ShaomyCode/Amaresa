/*======================*\
	# SIDEBAR
\*======================*/
var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function OpenSideBar() {
	if(!sidebarOpen){
		sidebar.classList.add("sidebar-responsive");
		sidebarOpen = true;
	}
}

function CloseSideBar(){
	if(sidebarOpen){
		sidebar.classList.remove("sidebar-responsive");
		sidebarOpen = false;
	}
}