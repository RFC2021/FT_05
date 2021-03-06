<?php 
$erro = false;

if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Digite um nome valido.';
}

foreach ( $_POST as $chave => $valor ) {
	
	$$chave = trim( strip_tags( $valor ) );
	
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}


if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
	$erro = 'A idade deve ser um valor número.';
}


if ( ( ! isset( $site ) || ! filter_var( $site, FILTER_VALIDATE_URL ) ) && !$erro ) {
	$erro = 'Envie um site válido.';
}


if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}


if ( $erro ) {
	echo $erro;
} else {

	echo "<h1> Veja os dados enviados para o Fórum Temático 05 - ADS </h1>";
	
	foreach ( $_POST as $chave => $valor ) {
		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
	}
}