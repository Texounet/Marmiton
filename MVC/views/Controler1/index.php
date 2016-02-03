<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>
    <body>
    	<?php foreach ($sql as $key => $value) { ?>
    	<a href="<?php echo WEBROOT; ?>controler1/view/<?php echo $value['id']; ?> "> <?php echo($value['nom'])?> </a><br/>
    	<?php } ?>
    </body>
</html>