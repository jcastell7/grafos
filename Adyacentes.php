<?php
include './grafo.php';
session_start();
if (isset($_SESSION["grafo"])) {
    $_SESSION["grafo"];
} else {
    $_SESSION["grafo"] = new Grafo(false);
}
$idVertice1 = $_POST["idVertice3"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Formulario" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="HandheldFriendly" content="true" />
        <title>Adyacentes</title>
        <link href="ArchivosFrame/formCss.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="ArchivosFrame/nova.css" />
        <link type="text/css" media="print" rel="stylesheet" href="ArchivosFrame/printForm.css" />
        <link type="text/css" rel="stylesheet" href="ArchivosFrame/566a91c2977cdfcd478b4567.css?"/>
        <style type="text/css">
            .form-label-left{
                width:150px !important;
            }
            .form-line{
                padding-top:12px;
                padding-bottom:12px;
            }
            .form-label-right{
                width:150px !important;
            }
            body, html{
                margin:0;
                padding:0;
                background:#fff;
            }

            .form-all{
                margin:0px auto;
                padding-top:20px;
                width:690px;
                color:#555 !important;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
                font-size:14px;
            }
        </style>

        <style type="text/css" id="form-designer-style">
            /* Injected CSS Code */
            @import "ArchivosFrame/form-submit-button-blue.css";
            .form-all {
                font-family: "Lucida Grande", sans-serif;
            }
            .form-all {
                width: 690px;
            }
            .form-label-left,
            .form-label-right {
                width: 150px;
            }
            .form-label {
                white-space: normal;
            }
            .form-label.form-label-auto {
                display: inline-block;
                float: left;
                text-align: left;
                width: 150px;
            }
            .form-label-left {
                display: inline-block;
                white-space: normal;
                float: left;
                text-align: left;
            }
            .form-label-right {
                display: inline-block;
                white-space: normal;
                float: left;
                text-align: right;
            }
            .form-label-top {
                white-space: normal;
                display: block;
                float: none;
                text-align: left;
            }
            .form-all {
                font-size: 14px;
            }
            .form-label {
                font-weight: bold;
            }
            .form-checkbox-item label,
            .form-radio-item label {
                font-weight: normal;
            }
            .supernova {
                background-color: #ffffff;
                background-color: #f5f5f5;
            }
            .supernova body {
                background-color: transparent;
            }
            /*
            @width30: (unit(@formWidth, px) + 60px);
            @width60: (unit(@formWidth, px)+ 120px);
            @width90: (unit(@formWidth, px)+ 180px);
            */
            /* | */
            @media screen and (min-width: 480px) {
                .supernova .form-all {
                    border: 1px solid #dcdcdc;
                    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
                    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
                    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
                }
            }
            /* | */
            /* | */
            @media screen and (max-width: 480px) {
                .jotform-form {
                    padding: 10px 0;
                }
            }
            /* | */
            /* | */
            @media screen and (min-width: 480px) and (max-width: 768px) {
                .jotform-form {
                    padding: 30px 0;
                }
            }
            /* | */
            /* | */
            @media screen and (min-width: 480px) and (max-width: 689px) {
                .jotform-form {
                    padding: 30px 0;
                }
            }
            /* | */
            /* | */
            @media screen and (min-width: 768px) {
                .jotform-form {
                    padding: 60px 0;
                }
            }
            /* | */
            /* | */
            @media screen and (max-width: 689px) {
                .jotform-form {
                    padding: 0;
                }
            }
            /* | */
            .supernova .form-all,
            .form-all {
                background-color: #ffffff;
                border: 1px solid transparent;
            }
            .form-header-group {
                border-color: #e6e6e6;
            }
            .form-matrix-table tr {
                border-color: #e6e6e6;
            }
            .form-matrix-table tr:nth-child(2n) {
                background-color: #f2f2f2;
            }
            .form-all {
                color: #555555;
            }
            .form-header-group .form-header {
                color: #555555;
            }
            .form-header-group .form-subHeader {
                color: #6f6f6f;
            }
            .form-sub-label {
                color: #6f6f6f;
            }
            .form-label-top,
            .form-label-left,
            .form-label-right,
            .form-html {
                color: #555555;
            }
            .form-checkbox-item label,
            .form-radio-item label {
                color: #6f6f6f;
            }
            .form-line.form-line-active {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -ms-transition-property: all;
                -o-transition-property: all;
                transition-property: all;
                -webkit-transition-duration: 0.3s;
                -moz-transition-duration: 0.3s;
                -ms-transition-duration: 0.3s;
                -o-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-timing-function: ease;
                -moz-transition-timing-function: ease;
                -ms-transition-timing-function: ease;
                -o-transition-timing-function: ease;
                transition-timing-function: ease;
                background-color: #ffffe0;
            }
            /* ömer */
            .form-radio-item,
            .form-checkbox-item {
                padding-bottom: 0px !important;
            }
            .form-radio-item:last-child,
            .form-checkbox-item:last-child {
                padding-bottom: 0;
            }
            /* ömer */
            .form-single-column .form-checkbox-item,
            .form-single-column .form-radio-item {
                width: 100%;
            }
            .supernova {
                height: 100%;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center top;
                background-repeat: repeat;
            }
            .supernova {
                background-image: none;
            }
            #stage {
                background-image: none;
            }
            /* | */
            .form-all {
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center top;
                background-repeat: repeat;
            }
            .form-header-group {
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center top;
            }
            .form-line {
                margin-top: 12px;
                margin-bottom: 12px;
            }
            .form-line {
                padding: 12px 36px;
            }
            .form-all .qq-upload-button,
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {
                font-size: 1em;
                padding: 9px 15px;
                font-family: "Lucida Grande", sans-serif;
                font-size: 14px;
                font-weight: normal;
            }
            .form-all .form-pagebreak-back,
            .form-all .form-pagebreak-next {
                font-size: 1em;
                padding: 9px 15px;
                font-family: "Lucida Grande", sans-serif;
                font-size: 14px;
                font-weight: normal;
            }
            /*
            & when ( @buttonFontType = google ) {
                    @import (css) "@{buttonFontLink}";
            }
            */
            h2.form-header {
                line-height: 1.618em;
                font-size: 1.714em;
            }
            h2 ~ .form-subHeader {
                line-height: 1.5em;
                font-size: 1.071em;
            }
            .form-header-group {
                text-align: left;
            }
            /*.form-dropdown,
            .form-radio-item,
            .form-checkbox-item,
            .form-radio-other-input,
            .form-checkbox-other-input,*/
            .form-captcha input,
            .form-spinner input,
            .form-error-message {
                padding: 4px 3px 2px 3px;
            }
            .form-header-group {
                font-family: "Lucida Grande", sans-serif;
            }
            .form-section {
                padding: 0px 0px 0px 0px;
            }
            .form-header-group {
                margin: 12px 36px 12px 36px;
            }
            .form-header-group {
                padding: 24px 0px 24px 0px;
            }
            .form-textbox,
            .form-textarea {
                padding: 4px 3px 2px 3px;
            }
            .form-textbox,
            .form-textarea,
            .form-radio-other-input,
            .form-checkbox-other-input,
            .form-captcha input,
            .form-spinner input {
                background-color: #ffffff;
            }
            [data-type="control_dropdown"] .form-input,
            [data-type="control_dropdown"] .form-input-wide {
                width: 150px;
            }
            .form-label {
                font-family: "Lucida Grande", sans-serif;
            }
            li[data-type="control_image"] div {
                text-align: left;
            }
            li[data-type="control_image"] img {
                border: none;
                border-width: 0px !important;
                border-style: solid !important;
                border-color: false !important;
            }
            .form-line-column {
                width: auto;
            }
            .form-line-error {
                overflow: hidden;
                -webkit-transition-property: none;
                -moz-transition-property: none;
                -ms-transition-property: none;
                -o-transition-property: none;
                transition-property: none;
                -webkit-transition-duration: 0.3s;
                -moz-transition-duration: 0.3s;
                -ms-transition-duration: 0.3s;
                -o-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-timing-function: ease;
                -moz-transition-timing-function: ease;
                -ms-transition-timing-function: ease;
                -o-transition-timing-function: ease;
                transition-timing-function: ease;
                background-color: #fff4f4;
            }
            .form-line-error .form-error-message {
                background-color: #ff3200;
                clear: both;
                float: none;
            }
            .form-line-error .form-error-message .form-error-arrow {
                border-bottom-color: #ff3200;
            }
            .form-line-error input:not(#coupon-input),
            .form-line-error textarea,
            .form-line-error .form-validation-error {
                border: 1px solid #ff3200;
                -webkit-box-shadow: 0 0 3px #ff3200;
                -moz-box-shadow: 0 0 3px #ff3200;
                box-shadow: 0 0 3px #ff3200;
            }
            .ie-8 .form-all {
                margin-top: auto;
                margin-top: initial;
            }
            .ie-8 .form-all:before {
                display: none;
            }
            /* | */
            @media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
                .jotform-form {
                    padding: 0;
                }
                .form-all {
                    border: 0;
                    width: 100% !important;
                    max-width: initial;
                }
                .form-sub-label-container {
                    width: 100%;
                    margin: 0;
                }
                .form-input {
                    width: 100%;
                }
                .form-label {
                    width: 100%!important;
                }
                .form-line {
                    padding: 2% 5%;
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }
                input[type=text],
                input[type=email],
                input[type=tel],
                textarea {
                    width: 100%;
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    max-width: initial !important;
                }
                .form-input,
                .form-input-wide,
                .form-textarea,
                .form-textbox,
                .form-dropdown {
                    max-width: initial !important;
                }
                div.form-header-group {
                    padding: 24px 0px !important;
                    margin: 0 12px 2% !important;
                    margin-left: 5% !important;
                    margin-right: 5% !important;
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }
                [data-type="control_button"] {
                    margin-bottom: 0 !important;
                }
                .form-buttons-wrapper {
                    margin: 0!important;
                }
                .form-buttons-wrapper button {
                    width: 100%;
                }
                table {
                    width: 100%!important;
                    max-width: initial !important;
                }
                table td + td {
                    padding-left: 3%;
                }
                .form-checkbox-item input,
                .form-radio-item input {
                    width: auto;
                }
                .form-collapse-table {
                    margin: 0 5%;
                }
            }
            /* | */

            /*__INSPECT_SEPERATOR__*/

            /* Injected CSS Code */
        </style>

        <script src="ArchivosFrame/prototype.forms.js" type="text/javascript"></script>
        <script src="ArchivosFrame/jotform.forms.js" type="text/javascript"></script>
        <script type="text/javascript">
            JotForm.init(function () {
                JotForm.alterTexts({"alphabetic": "Este campo solo puede contener letras", "alphanumeric": "Este campo solo puede contener letras y números.", "ccInvalidCVC": "El número CVC no es válido.", "ccInvalidExpireDate": "La fecha de expiración no es válida", "ccInvalidNumber": "su número de terjeta de crédito no es válido", "ccMissingDetails": "Por favor rellene los datos de su Tarjeta de Crédito", "ccMissingDonation": "Ingresa por favor una cantidad a donar", "ccMissingProduct": "Por favor seleccione al menos un producto.", "characterLimitError": "Too many Characters.  The limit is", "characterMinLimitError": "Too few characters. The minimum is", "confirmClearForm": "¿Está seguro de querer borra el formulario?", "confirmEmail": "Correo electrónico no coincide", "currency": "Este campo sólo puede contener valores de moneda", "cyrillic": "Este campo solo puede contener caracteres cirílicos", "dateInvalid": "Esta fecha no es valida. El formato de fecha es {format}", "dateLimited": "Esta fecha no se encuentra disponible.", "disallowDecimals": "Por favor, introduzca un número entero.", "email": "Introduzca una dirección e-mail válida", "fillMask": "El valor de campo debe llenar la mascara", "freeEmailError": "Cuentas de correos gratis no se permiten", "generalError": "Existen errores en el formulario, por favor corríjalos antes de continuar.", "generalPageError": "Hay errores en esta página. Por favor, corríjalos antes de continuar.", "gradingScoreError": "El puntaje total debería ser sólo \"menos que\" o \"igual que\"", "incompleteFields": "Existen campos requeridos incompletos. Por favor complételos.", "inputCarretErrorA": "El valor introducido no puede ser menor que el mínimo especificado:", "inputCarretErrorB": "Entrada no debe ser mas grande que el valor maximo:", "lessThan": "Tu cuenta debería ser menor o igual que", "maxDigitsError": "El máximo de dígitos permitido es", "maxSelectionsError": "El número máximo de selecciones es", "minSelectionsError": "El número mínimo de selección requerido es", "multipleFileUploads_emptyError": "El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.", "multipleFileUploads_fileLimitError": "Solo {fileLimit} carga de archivos permitida.", "multipleFileUploads_minSizeError": "{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.", "multipleFileUploads_onLeave": "Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.", "multipleFileUploads_sizeError": "{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.", "multipleFileUploads_typeError": "El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.", "numeric": "Este campo sólo admite valores numéricos", "pastDatesDisallowed": "La fecha debe ser futura", "pleaseWait": "Por favor, espere ...", "required": "Campo requerido.", "requireEveryCell": "Todas las celdas son requeridas.", "requireEveryRow": "Todas las filas son obligatorias.", "requireOne": "Por lo menos un campo requerido", "submissionLimit": "¡Lo siento! Sólo se permite una entrada. Múltiples envíos están desactivados para este formulario.", "uploadExtensions": "Solo puede subir los siguientes archivos:", "uploadFilesize": "Tamaño del archivo no puede ser mayor que:", "uploadFilesizemin": "Tamañao de archivo no puede ser menos de:", "url": "This field can only contain a valid URL", "wordLimitError": "Too many words. The limit is", "wordMinLimitError": "Too few words.  The minimum is"});
                JotForm.clearFieldOnHide = "disable";
                JotForm.onSubmissionError = "jumpToFirstError";
            });
        </script>
    </head>
    <body>

    <input type="hidden" name="formID" value="60758672869677" />
    <div class="form-all">
        <ul class="form-section page-section">
            <li class="form-line" data-type="control_text" id="id_3">
                <div id="cid_3" class="form-input-wide">
                    <div id="text_3" class="form-html">
                        <p><span style="font-size: 12pt; font-family: 'arial black', sans-serif; color: #000000; background-color: #ffffff;"><strong>El vertice seleccionado es:&nbsp;</strong></span>

                            <br>
                            <span style="font-size: 12pt; font-family: 'arial black', sans-serif; color: #000000; background-color: #ffffff;">
                                <?php
                                echo"<hr><br>";
                                if ($_SESSION["grafo"]->getAdyacentes($idVertice1) != null) {
                                    print_r($_SESSION["grafo"]->getAdyacentes($idVertice1));
                                } else {
                                    echo "este nodo no tiene adyacentes";
                                }
                                echo"<hr><br>";
                                ?>

                            </span>
                        </p>
                    </div>
                </div>
            </li>
            <form action="index.php" >
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="margin-left:156px" class="form-buttons-wrapper">
                            <button id="input_2" type="submit" class="form-submit-button">
                                Vovler
                            </button>
                        </div>
                    </div>
                </li>
            </form>
            <li style="display:none">
                Should be Empty:
                <input type="text" name="website" value="" />
            </li>
        </ul>
    </div>
    <input type="hidden" id="simple_spc" name="simple_spc" value="60758672869677" />
    <script type="text/javascript">
        document.getElementById("si" + "mple" + "_spc").value = "60758672869677-60758672869677";
    </script>
</body>
</html>
