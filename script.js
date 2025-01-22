function fetchData()
{
    const url = './script.php'; // Définition de l'URL du fichier backend qui renvoie les données

    fetch(url) // Envoie une requête HTTP GET vers le backend (script.php)
        .then((response) => response.json()) // Récupère la réponse du serveur, qui est encodée en JSON, et la convertit en objet JavaScript
        .then((data) => { // Une fois les données décodées, elles sont accessibles via la variable `data`
            const tbody = document.querySelector('#tbody'); // Sélectionne l'élément `<tbody>` du tableau
    
            console.log(data); // Affiche les données récupérées dans la console pour le debug
    
            data.forEach(value => { // Parcourt chaque élément (film) du tableau `data`
                const tr = document.createElement('tr'); // Crée une nouvelle ligne `<tr>` pour le tableau
                const tdID = document.createElement('td'); // Crée une cellule `<td>` pour l'ID
                const tdTitle = document.createElement('td'); // Crée une cellule `<td>` pour le titre
    
                tdID.innerHTML = `${value.id}`; // Insère la valeur de l'ID du film dans la cellule
                tr.append(tdID); // Ajoute la cellule contenant l'ID à la ligne
    
                tdTitle.innerHTML = ` ${value.title}`; // Insère le titre du film dans la cellule
                tr.append(tdTitle); // Ajoute la cellule contenant le titre à la ligne
    
                tbody.append(tr); // Ajoute la ligne complète au `<tbody>` du tableau
            });
        })
        .catch((error) => { // Capture et gère les erreurs en cas de problème avec la requête
            console.log(error); // Affiche l'erreur dans la console pour le debug
        });
    

}

document.addEventListener('DOMContentLoaded', (e) => { // Attend que le DOM soit entièrement chargé avant d'exécuter le code
    fetchData(); // Appelle la fonction fetchData() pour récupérer et afficher les données
});