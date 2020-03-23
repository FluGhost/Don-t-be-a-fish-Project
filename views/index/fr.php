<?php
$nav1 = '<a href="">Commencer maintenant</a>';
$nav2 = '<a href="">À propos / Contact</a>';
$nav3 = '<a href="https://github.com/FluGhost/Don-t-be-a-fish-Project" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1200px-Octicons-mark-github.svg.png" alt="GitHub logo"> Repository sur GitHub</a>';

ob_start() ?>
    <p>Ce projet est crée par FluGhost.</p>
    <p>Ce projet est <strong>gratuit pour tout le monde</strong>.</p>
    <div class="warn-section">
        <h3>ATTENTION !</h3>
        <p>C'est un projet de sensiblisation, cela ne va <strong>PAS</strong> vous hacker !</p>
    </div>
    <p>Je suis sûr que vous avez un ami ou des grands parents qui ne connaissent rien en informatique, peut-etre qu'il vous contacte à chaque fois qu'il veut vous envoyer un e-mail...
        Cette personne dit : <span class="citation-inline">"Internet est sûr en 2020"</span>, mais vous <span class="italic">(et moi)</span> savez que c'est faux et vous <span class="italic">(et moi encore)</span> voudriez lui montrer le <strong>contraire</strong>.</p>
    <p>Sachez que ce projet est fait pour <span class="blod">vous</span> ! <br>
        Vous arrivez sur ce site, vous entrez votre <strong>nom</strong> et l'<strong>e-mail de votre ami</strong>. Dans une minute, un <strong>faux</strong> e-mail de phishing va être envoyé dans la boite mail de votre ami.
        Donc votre ami clique sur le lien et arrive sur ce site qui va l'informer du phishing et le sensibliser ainsi : <br>
        <span class="citation-inline">"Bonjour, vous avez êté 'sensibilisé' par <span class="italic">[votre nom]</span> parce que vous avez cliqué sur un faux e-mail ! Si cela était un vrai e-mail de phishing, ce site vous aurait demandé vos identifiants, vos mots de passe, ou pire : votre CARTE BANCAIRE ! Soyez prudents quand vous cliquez sur un lien. Retenez ceci."</span> et maintenant, vous êtes un <span class="bold">super héros</span> ! Bien joué !
    </p>
<?php $body_main_content = ob_get_clean();

ob_start(); ?>

<a href="index.php?lang=en" class="button">Anglais</a>

<?php $footer_content = ob_get_clean();

require("templates/index.php");