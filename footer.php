
<style>
/*-----------------------------footer--------------------------------------*/

footer {
    background-color: grey;
    color: white;
    text-align: center;
    padding: 10px 0;
    flex-shrink: 0;
}

.custom-footer {
    height: 90px;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center; /* Centra verticalmente el contenido */
}

.redes {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 50px; /* Espaciado inicial para pantallas grandes */
}

.redes a {
    margin-left: 30px; /* Espaciado de 30px entre los iconos */
}

.icono-blanco {
    height: 30px;
    width: 30px;
    transition: height 0.3s ease, width 0.3s ease; /* Transiciones suaves para el tamaño */

}


.whatsapp-icon {
    position: absolute;
    top: -10px;
    left: 30px;
    width: 70px;
    height: 70px;
    transition: left 0.3s ease, top 0.3s ease, width 0.3s ease, height 0.3s ease;
}

/* Efecto hover */
.redes a:hover .icono-blanco,
.whatsapp a:hover .whatsapp-icon {
    transform: translateY(-5px); /* Mueve el ícono 5px hacia arriba */
}


/* Estilo para Tablet y Móvil */
@media (max-width: 1023px) {
    .redes {
        margin-right: 30px;
    }
    .redes a {
        margin-left: 15px; /* Espaciado reducido para tablets */
    }
    .whatsapp-icon {
        left: 15px;
        top: -5px;
        width: 55px;
        height: 55px;
    }
    .icono-blanco {
        height: 25px;
        width: 25px;
    }
}

@media (max-width: 767px) {
    .redes {
        margin-right: 10px;
    }
    .redes a {
        margin-left: 10px; /* Espaciado reducido para móviles */
    }
    .icono-blanco {
        height: 20px;
        width: 20px;
    }
    .whatsapp-icon {
        left: 10px;
        top: 0;
        width: 40px;
        height: 40px;
    }
}
</style>


<footer class="custom-footer">
    <div class="whatsapp">
        <a href="https://wa.me/1234567890" target="_blank">
            <img src="./Iconos/whatsappIcon.png" alt="WhatsApp" class="whatsapp-icon">
        </a>
    </div>
    <div class="redes">
        
        <a class="navbar-brand" href="https://www.instagram.com/realissa.ok">
            <img src="./Iconos/instagram-realissa.png" alt="Instagram" class="icono-blanco" >
        </a>
        <a class="navbar-brand" href="https://www.facebook.com/people/Realissa/100083621102094/?mibextid=JRoKGi">
            <img src="./Iconos/face-realissa.png" alt="Facebook" class="icono-blanco" >
        </a>
        <a class="navbar-brand" href="https://www.linkedin.com/company/realissa/">
            <img src="./Iconos/linkeding-realissa.png" alt="LinkedIn" class="icono-blanco" >
        </a>
        <a class="navbar-brand" href="#">
            <img src="./Iconos/correo-realissa.png" alt="Correo Electrónico" class="icono-blanco" >
        </a>
    </div>
</footer>