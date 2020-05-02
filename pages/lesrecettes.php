<main class="main">
    <h1 class="point3">Trier les recettes</h1>
    <button>Filtrer les recettes</button><br>
    <input type="checkbox" id="Entrée" name="Entrée" checked><label for="Entrée">Entrée</label><br>
    <input type="checkbox" id="Plat" name="Plat" checked><label for="Plat">Plat</label><br>
    <input type="checkbox" id="Dessert" name="Dessert" checked><label for="Dessert">Dessert</label><br>
    <input type="checkbox" id="Rapide" name="Rapide" checked><label for="Rapide">Rapide</label><br>
    <br>
    <h1 class="point3">Par ingrédient(s)</h1>
    <button>Filtrer les recettes</button><br>
    <input type="checkbox" id="Pomme_de_terre" name="Pomme_de_terre"><label for="Pomme_de_terre">Pomme de terre</label><br>
    <input type="checkbox" id="Navet" name="Navet"><label for="Navet">Navet</label><br>
    <input type="checkbox" id="Courge" name="Courge"><label for="Courge">Courge</label><br>
    <input type="checkbox" id="Salade" name="Salade"><label for="Salade">Salade</label><br>
    <input type="checkbox" id="Blette" name="Blette"><label for="Blette">Blette</label><br>
    <div id="listlegume"></div>
    <br>

    <input list="legume" type="text" id="choix_legume" placeholder="Un ingrédient en plus ?">
    <datalist id="legume">
        <option value="Carotte">
        <option value="Oignon">
        <option value="Betterave">
        <option value="Epinard">
    </datalist>
    <button onclick="AjoutLegume()">Ajouter</button>

    <script>
        function AjoutLegume() {
            var AjoutLegume = document.getElementById("choix_legume").value;
            document.getElementById("listlegume").innerHTML += '<input type="checkbox" id="' + AjoutLegume + '" name="' + AjoutLegume + '" checked><label for="' + AjoutLegume + '">' + AjoutLegume + '</label><br>';
        }
    </script>
</main>

<aside class="sidebar-Droit" style="width:60%">
    <div class="data-container"></div>
    <div id="pagination-recette"></div>
</aside>

<script>
    $divrecette='<div class="boxDroit"><h1 class="point2">Couscous Hivernal</h1><table cellpadding=5 cellspacing=2><tr><td><a href="?page=recette"><img src="PhotoRecette/pic01.jpg" width="250"></a></td><td><b>Une phrase pour donner résumé le plat</b> <br>Préparation : 20min <br>Ingrédients : <br>Épinards, deux belles poignées <br>Ricotta, un pot <br>Parmesan, 60g + 30g <br>lait 1/2 litre + 5 à 10cl <br>beurre 23g <br>Farine 20g <br>Des lasagnes sèches ou fraîches <br>Sel poivre, muscade <br><a href="?page=recette">En cuisine !! =></a></td></tr></table></div>'

    $(function() {
        (function(name) {
            var container = $('#pagination-' + name);
            var sources = function() {
                var result = [];
                for (var i = 1; i < 10; i++) {
                    result.push($divrecette);
                }
                return result;
            }();

            var options = {
                dataSource: sources,
                pageSize: 5,
                callback: function(response, pagination) {
                    window.console && console.log(response, pagination);
                    var dataHtml = '<ul>';
                    $.each(response, function(index, item) {
                        dataHtml += '<li>' + item + '</li>';
                    });
                    dataHtml += '</ul>';
                    container.prev().html(dataHtml);
                }
            };

            container.addHook('beforeInit', function() {
                window.console && console.log('beforeInit...');
            });
            container.pagination(options);
            container.addHook('beforePageOnClick', function() {
                window.console && console.log('beforePageOnClick...');
            });
        })('recette');
    })
</script>

<style type="text/css">
        ul, li {
            list-style: none;
        }
        .data-container {
            margin-top: 20px;
        }

        .data-container ul {
            padding: 0;
            margin: 0;
        }

        .data-container li {
            margin-bottom: 5px;
            padding: 5px 10px;
        }
    </style>