<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Lien vers un fichier JavaScript, actuellement commenté -->
    <!-- <script src="./script.js"></script> -->
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php
                require './config.php'; // Inclusion du fichier de configuration de la base de données

                // Exécution de la requête SQL pour récupérer les 10 premiers films
                $requete = $bdd->query('SELECT id, title FROM movie LIMIT 10');
                
                // Récupère tous les résultats de la requête sous forme de tableau associatif
                $movies = $requete->fetchAll(PDO::FETCH_ASSOC);
                
                // Affiche la structure et le contenu détaillé du tableau $movies pour le debug
                var_dump($movies);

                // Parcours des résultats pour afficher les films
                foreach ($movies as $movie):
            ?>
                <tr>
                    <!-- Affiche l'ID du film en protégeant -->
                    <td><?php echo $movie['id']; ?></td>
                    
                    <!-- Affiche le titre du film -->
                    <td><?php echo $movie['title']; ?></td>
                </tr>
            <?php endforeach; // ici on ferme le ForEach ?>
        </tbody>
    </table>
</body>
</html>
