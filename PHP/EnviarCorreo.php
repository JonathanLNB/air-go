<?
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/07/2018
 * Time: 06:30 PM
 */
include("class.phpmailer.php");
include("class.smtp.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com"; //mail.google
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true; //enable SMTP authentication

    $mail->Username = "15030089@itcelaya.edu.mx"; // SMTP account username
    $mail->Password = "fsd74123"; // SMTP account password

    if($_POST['tipo'] == '0') {
        $mail->From = "14030536@itcelaya.edu.mx";
        $mail->FromName = "Hola " . $_POST['nombre'] . " esta es la información sobre Air Go!";
        $mail->Subject = "Air Go! #LOVETHEOUTSIDE";
        $salida = "<h1>AIR GO</h1>
               <p>#LOVETHEOUTSIDE</p>
               <p>Un chaleco para el uso profesional, con la facilidad del trabajo de día a día. </p>
               <p>Con este practico y novedoso chaleco podrán tener la opción de tener 13 extras tales como: cargador de teléfono, impermeable, bolsa para guardar tarjetas y dinero, bolígrafo, lentes, audífonos, etc. </p>
               <p>En el chaleco incorpora bolsillos interiores y exteriores con la siguiente capacidad de almacenamiento:</p>
               <ul>
                    <li>Bolsillo para botella de agua.</li>     
                    <li>Bolsillo para cargador portátil para celular.</li>     
                    <li>Colgador para diferentes usos.</li>     
                    <li>Compartimiento para audífonos.</li>     
                    <li>Bolsillo para tarjetero.</li>     
                    <li>Bolsillo para papel higiénico.</li>     
                    <li>Bolsa para documentos y dinero.</li>     
                    <li>Bolsillo para bolígrafo.</li>     
                    <li>Bolsillo para lentes de Sol.</li>     
                    <li>Un limpiador de Gafas.</li>     
                    <li>Un impermeable.</li>     
                    <li>Bolsillo para cámara</li>     
               </ul>                
               <button>Comprar 💸</button>";
    }
    else{
        $mail->From = "14030536@itcelaya.edu.mx";
        $mail->FromName = "Hola " . $_POST['nombre'] . " felicidades por adquir tú Air Go!";
        $mail->Subject = "Air Go! #LOVETHEOUTSIDE";
        $salida = "<h1>AIR GO</h1>
               <p>#LOVETHEOUTSIDE</p>
               <p>Iniciamos su proceso de ".$_POST['cant']." chalecos Air Go! para su envió. Por un total de $".($_POST['cant']*1500)." pesos al domicilio ".$_POST['domicilio']."</p>
               <p>Con este practico y novedoso chaleco podrán tener la opción de tener 13 extras tales como: cargador de teléfono, impermeable, bolsa para guardar tarjetas y dinero, bolígrafo, lentes, audífonos, etc. </p>
               <p>En el chaleco incorpora bolsillos interiores y exteriores con la siguiente capacidad de almacenamiento:</p>
               <ul>
                    <li>Bolsillo para botella de agua.</li>     
                    <li>Bolsillo para cargador portátil para celular.</li>     
                    <li>Colgador para diferentes usos.</li>     
                    <li>Compartimiento para audífonos.</li>     
                    <li>Bolsillo para tarjetero.</li>     
                    <li>Bolsillo para papel higiénico.</li>     
                    <li>Bolsa para documentos y dinero.</li>     
                    <li>Bolsillo para bolígrafo.</li>     
                    <li>Bolsillo para lentes de Sol.</li>     
                    <li>Un limpiador de Gafas.</li>     
                    <li>Un impermeable.</li>     
                    <li>Bolsillo para cámara</li>     
               </ul>";
    }
    $mail->isHTML(true);
    $mail->MsgHTML($salida);
    $mail->AddAddress($_POST['email']);
    try {
        if (!$mail->Send()) {
            echo "Error: " . $mail->ErrorInfo;
        } else {
            header("location: ../index.php");
            exit();
        }
    } catch (phpmailerException $e) {
    }
?>