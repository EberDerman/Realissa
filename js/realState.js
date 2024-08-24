// Función para mostrar el mapa en el <div> según la ubicación seleccionada
function showMap(location) {
  // Eliminar contenido previo del div
  const mapaDiv = document.getElementById("mapa");
  mapaDiv.innerHTML = "";

  let mapURL = "";

  switch (location) {
    case "Fort":
      mapURL =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161411.1270785039!2d-82.05668389946193!3d26.625558019435037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db420189a85429%3A0xc62908530aba258a!2sFort%20Myers%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724455907540!5m2!1ses-419!2sar";
      break;
    case "Naples":
      mapURL =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114610.75269009042!2d-81.87694277605415!3d26.145037668140965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dae19b73c2d7ad%3A0x673f5318d72c9aaa!2sNaples%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724456286308!5m2!1ses-419!2sar";
      break;
    case "Miami":
      mapURL =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.39567619651!2d-80.31186129125857!3d25.782538874858687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724456387916!5m2!1ses-419!2sar";
      break;
    case "Orlando":
      mapURL =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224444.11300255512!2d-81.50748120830087!3d28.48137564719997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e773d8fecdbc77%3A0xac3b2063ca5bf9e!2sOrlando%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724456425116!5m2!1ses-419!2sar";
      break;
    default:
        const span = document.createElement("span");
        span.textContent = "Haga click en los botones para ver Ubicacion";
        // Insertar el iframe en el contenedor
        mapaDiv.appendChild(span);
  }

  // Crear el iframe
  const iframe = document.createElement("iframe");
  iframe.src = mapURL;
  iframe.width = "400";
  iframe.height = "300";
  iframe.style.border = "0";
  iframe.allowFullscreen = true;
  iframe.loading = "lazy";
  iframe.referrerPolicy = "no-referrer-when-downgrade";

  // Insertar el iframe en el contenedor
  mapaDiv.appendChild(iframe);
}
