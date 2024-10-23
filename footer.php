<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
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
        align-items: center;
        /* Centra verticalmente el contenido */
    }

    .redes {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 50px;
        /* Espaciado inicial para pantallas grandes */
    }

    .redes a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        margin-left: 30px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 16px;
        color: rgba(255, 255, 255, 0.7);
        transition: 0.3s;
    }

    .redes a:hover {
        color: white;
        border-color: white;
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
    .whatsapp a:hover .whatsapp-icon {
        transform: translateY(-5px);
        /* Mueve el ícono 5px hacia arriba */
    }

    /* Estilo para Tablet y Móvil */
    @media (max-width: 1023px) {
        .redes {
            margin-right: 30px;
        }

        .redes a {
            margin-left: 15px;
            /* Espaciado reducido para tablets */
        }

        .whatsapp-icon {
            left: 15px;
            top: -5px;
            width: 55px;
            height: 55px;
        }
    }

    @media (max-width: 767px) {
        .redes {
            margin-right: 10px;
        }

        .redes a {
            margin-left: 10px;
            /* Espaciado reducido para móviles */
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
    <div class="whatsapp"> <a href="whatsapp://send?phone=12394604750" target="_blank"> <img src="./Iconos/whatsappIcon.webp" alt="WhatsApp" class="whatsapp-icon"> </a> </div>
    <div class="redes"> <!-- instagram -->
         <a href="https://www.instagram.com/realissa.ok" class="instagram" data-content="realissa.ok"> <i class="bi bi-instagram"></i> 
        </a> <!-- facebook --> <a href="https://www.facebook.com/people/Realissa-Realissa/pfbid03tsGpsTuiJeE5m7nHf9NE4Qju1kyahjFoaQHnpR6xEiwgm6m9N6XtwkP8sxvqHCRl/" class="facebook" data-content="realissa"> <i class="bi bi-facebook"></i> </a> <!-- linked in --> <a href="https://www.linkedin.com/company/realissa/" class="linkedin" data-content="realissa"> <i class="bi bi-linkedin"></i> </a> <!-- Correo Electrónico --> <a href="mailto:contacto@realissadevelopments.com" class="email" data-content="contacto@realissadevelopments.com"> <i class="bi bi-envelope"></i> </a> </div>
</footer>