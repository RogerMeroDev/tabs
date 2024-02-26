function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    // Obtener todos los elementos con class="coop1504-tabcontent" y ocultarlos
    tabcontent = document.getElementsByClassName("coop1504-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    // Obtener todos los elementos con class="coop1504-tablinks" y remover la clase "active"
    tablinks = document.getElementsByClassName("coop1504-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    // Mostrar el contenido de la pestaña actual y añadir la clase "active" al botón que abrió la pestaña
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}


function scrollTabs(direction) {
    var container = document.querySelector('.coop1504-tabs');
    var scrollAmount = 0; // Cantidad de desplazamiento total realizada
    var step = 500; // Cantidad de desplazamiento por paso

    function stepScroll() {
        if(direction == -1){
            container.scrollLeft -= step; // Mueve hacia la izquierda
        } else {
            container.scrollLeft += step; // Mueve hacia la derecha
        }
        scrollAmount += step;
        if(scrollAmount < 100) {
            requestAnimationFrame(stepScroll);
        }
    }

    requestAnimationFrame(stepScroll);
}

