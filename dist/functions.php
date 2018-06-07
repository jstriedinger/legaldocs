<?php 
require_once '../vendor/autoload.php';

if(isset($_POST['template']) && !empty($_POST['template'])) {
    $template = $_POST['template'];
    $vars = json_decode($_POST['vars']);
    //echo $vars;
    $status = false;
    $msg = "Lo siento. Hubo un problema y no se pudo crear el archivo:";

    //Work stuff
    try {
	    $doc = new \PhpOffice\PhpWord\TemplateProcessor('../modelos/'.$template.".docx");
	    foreach ($vars as $key => $value) {
			$doc->setValue($key, $value);
	    }
		$doc->saveAs($template.'.docx');
		$msg = "Perfecto. Tu archivo se debio haber descargado";
		$status = true;

    } catch (Exception $e) {
    	error_log($e->getMessage());
    	$msg .= $e->getMessage().". Por favor muestrale esto al desarrollador.";
    }
    $data = [
		'msg' => $msg,
		'status' => $status
	];
	$response = json_encode($data);
    echo $response;
}
?>