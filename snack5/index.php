<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
#paragrafo da dividere
$paragrafoIntero='Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis hic quisquam ducimus nihil, repudiandae alias? Animi error dolores, veniam libero, vel sint suscipit, obcaecati ipsa ea rem facere. Non deserunt exercitationem neque, quod rem, repudiandae accusantium iure amet temporibus distinctio dignissimos dolore, voluptate quis saepe ut unde explicabo maxime reprehenderit?';
#divisione paragrafo tramite explode
$arrayParagrafo= explode('.',$paragrafoIntero);
#test
var_dump($arrayParagrafo);
#ciclo for per stampare i paragrafi
for($i=0;$i<count($arrayParagrafo);$i++){
    echo '<p>';
    echo $arrayParagrafo[$i];
    echo '</p>';
}
?>