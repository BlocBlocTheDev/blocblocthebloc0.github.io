<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>La Blotik - Twitch</title>
        <link rel="icon" type="image/png" href="SRC/ico.png"/>
        <link rel="stylesheet" href="CSS/Lexend.css">
        <meta name="description" content="Le site de bloc !">
        <meta name="author" content="BlocBlocTheBloc">
        <link rel="stylesheet" type="text/css" href="CSS/twitch.css">
        <link rel="stylesheet" type="text/css" href="CSS/buttons.css">
    </head>
    <body>
        <header>
            <?php include "header.php"?>
        </header>
        <main>
        <h2 class="titre">Tu veux participer au live ?</h2>
        <center>
            <button class="twitch-rules-button">Cette page va t'aider !</button>
        </center>
        <br>
        <h2 class="titre">Suivez le live de Bloc en direct !</h2>
        <br>
        <center>
        <div class="iframe-container">
        <iframe src="https://player.twitch.tv/?channel=blocblocthebloc0&parent=blocsite.test" frameborder="0" allowfullscreen="true" scrolling="no" height="504" width="896"></iframe> <iframe id="chat_embed" src="https://www.twitch.tv/embed/blocblocthebloc0/chat?parent=blocsite.test" height="504" width="504"></iframe>
        </div>
        </center>
        <h2 class="titre">Soutenez le stream de Bloc</h2>
        <br>
        <center>
        <div class="soutien">
            <img src="SRC/heart.svg" alt="Un coeur symbolisant le fait de suivre un streamer">
            <h3 class="titre">Suivre Bloc</h3>
            <h4 class="titre">Le fait de suivre Bloc est déjà un énorme soutien !<br>En plus votre serez remercier tout en étant notifier des prochains lives !<br>Ah et vous aurez 300 Blokos <img src="SRC/BLOKOS.png" style="width: 1%;" alt="Blokos" > en cadeau.</h4>
            <button class="index-twitch-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2.149 0l-1.612 4.119v16.836h5.731v3.045h3.224l3.045-3.045h4.657l6.269-6.269v-14.686h-21.314zm19.164 13.612l-3.582 3.582h-5.731l-3.045 3.045v-3.045h-4.836v-15.045h17.194v11.463zm-3.582-7.343v6.262h-2.149v-6.262h2.149zm-5.731 0v6.262h-2.149v-6.262h2.149z" fill-rule="evenodd" clip-rule="evenodd"/></svg><br>Devenez un bloc</button>
            <br>
            <br>
            <img src="SRC/subs.svg" alt="Une courrone symbolisant le fait de soutenir le créateur avec un abonnement">
            <h3 class="titre">Acheter un abonnement</h3>
            <h4 class="titre">Acheter un abonnement chez Bloc est le plus grand soutien que vous pouvez lui octroyé !<br>Vous pouvez choisir entre 3 abonnement : Tier 1 (3,99€ (<b>SUR PC</b>) ou 0€ avec Prime), Tier 2 (7,99€ (<b>SUR PC</b>)) ou Tier 3 (19,99€ (<b>SUR PC</b>))<br>Vous aurez plein de bonus fun et sympatique !</h4>
            <button class="twitch-twitch-sub-button"><img src="SRC/sub button.svg" style="width: 15%;"><br>Devenez un bloc</button>
            <br>
            <br>
            <img src="SRC/bits.png" alt="Un Euro">
            <h3 class="titre">Donner des Bits</h3>
            <h4 class="titre">Ceux qui n'ont pas trop d'argent peuvent donner des Bits avec les Cheers !<br>C'est un moyen de soutenir le streamer pour pas grand chose !<br>Pensez à utiliser les extentions pour bannir des gens ou lancer un son sur le live !</h4>
            <button class="twitch-twitch-bits-button"><img src="SRC/bits.svg" style="width: 15%;"><br>Voir votre portemonnaie</button>
            <br>
        </div>
        </center>
        <br>
        <h2 class="titre">Règlement du chat Twitch</h2>
        <center>
            <button class="twitch-rules-button">Consulter le règlement</button>
        </center>
        </main>
        <footer>
            <?php include "footer.php"?>
        </footer>
    <body>
</html>