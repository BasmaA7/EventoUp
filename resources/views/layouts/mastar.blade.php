<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  

  <title>Evinto</title>
</head>
<body >
  @include('includes.nav')
  @yield('content')
  
  @include('includes.footer')
 
  <script>
    document.getElementById('dropdownDefaultButton').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdown');
        dropdownMenu.classList.toggle('hidden');
    });

    document.getElementById('dropdownDefaultButton2').addEventListener('click', function() {
        var dropdownMenu2 = document.getElementById('dropdown2');
        dropdownMenu2.classList.toggle('hidden');
    });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      // Récupérer les éléments du menu
      var userButton = document.querySelector('.group-hover\\:text-gray-800');
      var dropdown = document.querySelector('.group > ul');

      // Ajouter un écouteur d'événements au bouton utilisateur pour basculer la visibilité de la dropdown
      userButton.addEventListener('click', function () {
          dropdown.classList.toggle('hidden');
      });

      // Ajouter un écouteur d'événements pour fermer la dropdown lorsqu'on clique en dehors
      document.addEventListener('click', function (event) {
          if (!dropdown.contains(event.target) && !userButton.contains(event.target)) {
              dropdown.classList.add('hidden');
          }
      });
  });
</script>
</body>
</html>