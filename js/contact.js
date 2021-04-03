email.addEventListener("input", function (event) {
    // Chaque fois que l'utilisateur saisit quelque chose
    // on vérifie la validité du champ e-mail.
    if (email.validity.valid) {
      // S'il y a un message d'erreur affiché et que le champ
      // est valide, on retire l'erreur
      error.innerHTML = ""; // On réinitialise le contenu
      error.className = "error"; // On réinitialise l'état visuel du message
    }
  }, false);

  function color() {
    var x = document.getElementById("demo");
         x.style.color = "red";}
