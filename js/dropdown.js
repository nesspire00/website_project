function dropDown() {
    var x = document.getElementById("navigation_menu");
    if (x.className === "nav") {
        x.className += "_responsive";
    } else {
        x.className = "nav";
    }
}

function expandServices() {
    var x = document.getElementById("sub_services");
    if (x.className === "submenu") {
        x.className += "_services";
    } else {
        x.className = "submenu";
    }
}

function expandResources() {
    var x = document.getElementById("sub_resources");
    if (x.className === "submenu") {
        x.className += "_resources";
    } else {
        x.className = "submenu";
    }
}