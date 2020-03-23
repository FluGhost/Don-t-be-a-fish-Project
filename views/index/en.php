<?php
$nav1 = '<a href="">Begin now</a>';
$nav2 = '<a href="">About us / Contact</a>';
$nav3 = '<a href="https://github.com/FluGhost/Don-t-be-a-fish-Project" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1200px-Octicons-mark-github.svg.png" alt="GitHub logo"> GitHub Repository</a>';

ob_start() ?>
    <p>This project is created and invented by FluGhost.</p>
    <p>This project is <strong>free for all</strong>.</p>
    <div class="warn-section">
        <h3>WARNING !</h3>
        <p>This is a sensitization project, this will <strong>NOT</strong> hack you or anyone or anything !</p>
    </div>
    <p>I'm sure you have a friend or grand parents who doesn't be strong in computer science, maybe he calls you everytime when he wants to send an e-mail...
        This person says : <span class="citation-inline">"Internet is sure in 2020"</span>, but you <span class="italic">(and me)</span> know it's false and you <span class="italic">(and me again)</span> would like to show him that's the <strong>opposite</strong>.</p>
    <p>So this project is made for <span class="bold">you</span> ! <br>
        You arrive on this website, you enter your <strong>name</strong> and your <strong>friend's e-mail</strong>. In one minute, a <strong>fake</strong> phishing e-mail will be send in you friend's box.
        So your friend click and he arrives in this website who says a sensitization message : <br>
        <span class="citation-inline">"Hello, you have been 'sensitizated' by <span class="italic">[your name]</span> because you click on a fake e-mail ! If that was a true phishing e-mail, this website request your id or your password or, your CREDIT CARD ! Be prudent when you click on a link. Remember it."</span><br>
        Now, you are the <span class="bold">superhero</span> of the world, good job !
    </p>
<?php $body_main_content = ob_get_clean();

ob_start(); ?>

<a href="index.php?lang=fr" class="button">French</a>

<?php $footer_content = ob_get_clean();

require("templates/index.php");
