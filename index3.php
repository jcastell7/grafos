
<?php
include("grafo.php");
session_start();
if (isset($_SESSION["grafo"])) {
    $_SESSION["grafo"];
} else {
    $_SESSION["grafo"] = new Grafo(false);
}
print_r($_SESSION["grafo"]->getMatrizA());
?>
<html class="supernova"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Formulario" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="HandheldFriendly" content="true" />
        <title>Grafos</title>
        <link href="ArchivosFrame/formCss.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="ArchivosFrame/nova.css" />
        <link type="text/css" media="print" rel="stylesheet" href="ArchivosFrame/printForm.css" />
        <link type="text/css" rel="stylesheet" href="ArchivosFrame/566a91c2977cdfcd478b4567.css"/>
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
                padding-top:0px;
                width:690px;
                color:#555 !important;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
                font-size:15px;
            }
            .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
                color: #555;
            }

        </style>

        <style type="text/css" id="form-designer-style">
            /* Injected CSS Code */
            @import "ArchivosFrame/form-submit-button-simple_carolina_blue.css";
            .form-all {
                font-family: "Lucida Grande", sans-serif;
            }
            .form-all {
                width: 690px;
                width: 100%;
                max-width: 690px;
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
                font-size: 15px;
            }
            .form-label {
                position: relative;
            }
            .form-label:after {
                content: 'This label will not be seen on the form.';
                background: #FFFFE0;
                position: absolute;
                left: 0;
                top: 110%;
                width: 90px;
                opacity: 0;
                padding: 6px 9px 8px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                font-size: 10px;
                font-weight: normal;
                border: 1px solid rgba(0, 0, 0, 0.2);
            }
            .form-label:hover:after {
                opacity: 0.8;
            }
            .supernova .form-label:after {
                display: none;
            }
            .jotform-form .form-line[data-type="control_textbox"] .form-label,
            .jotform-form .form-line[data-type="control_textarea"] .form-label,
            .jotform-form .form-line[data-type="control_fullname"] .form-label,
            .jotform-form .form-line[data-type="control_email"] .form-label,
            .jotform-form .form-line[data-type="control_address"] .form-label,
            .jotform-form .form-line[data-type="control_phone"] .form-label {
                display: none;
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
            [data-type="control_radio"] .form-input,
            [data-type="control_checkbox"] .form-input,
            [data-type="control_radio"] .form-input-wide,
            [data-type="control_checkbox"] .form-input-wide {
                width: 100%;
                max-width: 184px;
            }
            .form-radio-item,
            .form-checkbox-item {
                width: 100%;
                max-width: 184px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-textbox.form-radio-other-input,
            .form-textbox.form-checkbox-other-input {
                width: 80%;
                margin-left: 3%;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-multiple-column {
                width: 100%;
            }
            .form-multiple-column .form-radio-item,
            .form-multiple-column .form-checkbox-item {
                width: 10%;
            }
            .form-multiple-column[data-columncount="1"] .form-radio-item,
            .form-multiple-column[data-columncount="1"] .form-checkbox-item {
                width: 100%;
            }
            .form-multiple-column[data-columncount="2"] .form-radio-item,
            .form-multiple-column[data-columncount="2"] .form-checkbox-item {
                width: 50%;
            }
            .form-multiple-column[data-columncount="3"] .form-radio-item,
            .form-multiple-column[data-columncount="3"] .form-checkbox-item {
                width: 33.33333333%;
            }
            .form-multiple-column[data-columncount="4"] .form-radio-item,
            .form-multiple-column[data-columncount="4"] .form-checkbox-item {
                width: 25%;
            }
            .form-multiple-column[data-columncount="5"] .form-radio-item,
            .form-multiple-column[data-columncount="5"] .form-checkbox-item {
                width: 20%;
            }
            .form-multiple-column[data-columncount="6"] .form-radio-item,
            .form-multiple-column[data-columncount="6"] .form-checkbox-item {
                width: 16.66666667%;
            }
            .form-multiple-column[data-columncount="7"] .form-radio-item,
            .form-multiple-column[data-columncount="7"] .form-checkbox-item {
                width: 14.28571429%;
            }
            .form-multiple-column[data-columncount="8"] .form-radio-item,
            .form-multiple-column[data-columncount="8"] .form-checkbox-item {
                width: 12.5%;
            }
            .form-multiple-column[data-columncount="9"] .form-radio-item,
            .form-multiple-column[data-columncount="9"] .form-checkbox-item {
                width: 11.11111111%;
            }
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
                background-image: url("ArchivosFrame/grafos.jpg");
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
                margin-top: 0px;
                margin-bottom: 0px;
            }
            .form-line {
                padding: 12px 11px;
            }
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }
            .form-all .form-sub-label {
                margin-left: 3px;
            }
            .form-all .qq-upload-button,
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {
                height: 40px;
                font-size: 1em;
                padding: 9px 15px;
                font-family: "Lucida Grande", sans-serif;
                font-size: 15px;
                font-weight: 400;
                border: none;
                border-width: 1px !important;
                border-style: dashed !important;
            }
            .form-all .qq-upload-button,
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {

            }
            .form-all .form-pagebreak-back,
            .form-all .form-pagebreak-next {
                font-size: 1em;
                padding: 9px 15px;
                font-family: "Lucida Grande", sans-serif;
                font-size: 15px;
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
            .form-line {
                zoom: 1;
            }
            .form-line:before,
            .form-line:after {
                display: table;
                content: '';
                line-height: 0;
            }
            .form-line:after {
                clear: both;
            }
            .form-sub-label-container {
                margin-right: 0;
                float: left;
                white-space: nowrap;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-sub-label-container .date-separate {
                visibility: hidden;
            }
            .form-captcha input,
            .form-spinner input {
                width: 184px;
            }
            .form-textbox,
            .form-textarea {
                width: 100%;
                max-width: 184px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-input,
            .form-address-table,
            .form-matrix-table {
                width: 100%;
                max-width: 184px;
            }
            .form-radio-item,
            .form-checkbox-item {
                width: 100%;
                max-width: 184px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-textbox.form-radio-other-input,
            .form-textbox.form-checkbox-other-input {
                width: 80%;
                margin-left: 3%;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-multiple-column {
                width: 100%;
            }
            .form-multiple-column .form-radio-item,
            .form-multiple-column .form-checkbox-item {
                width: 10%;
            }
            .form-multiple-column[data-columncount="1"] .form-radio-item,
            .form-multiple-column[data-columncount="1"] .form-checkbox-item {
                width: 100%;
            }
            .form-multiple-column[data-columncount="2"] .form-radio-item,
            .form-multiple-column[data-columncount="2"] .form-checkbox-item {
                width: 50%;
            }
            .form-multiple-column[data-columncount="3"] .form-radio-item,
            .form-multiple-column[data-columncount="3"] .form-checkbox-item {
                width: 33.33333333%;
            }
            .form-multiple-column[data-columncount="4"] .form-radio-item,
            .form-multiple-column[data-columncount="4"] .form-checkbox-item {
                width: 25%;
            }
            .form-multiple-column[data-columncount="5"] .form-radio-item,
            .form-multiple-column[data-columncount="5"] .form-checkbox-item {
                width: 20%;
            }
            .form-multiple-column[data-columncount="6"] .form-radio-item,
            .form-multiple-column[data-columncount="6"] .form-checkbox-item {
                width: 16.66666667%;
            }
            .form-multiple-column[data-columncount="7"] .form-radio-item,
            .form-multiple-column[data-columncount="7"] .form-checkbox-item {
                width: 14.28571429%;
            }
            .form-multiple-column[data-columncount="8"] .form-radio-item,
            .form-multiple-column[data-columncount="8"] .form-checkbox-item {
                width: 12.5%;
            }
            .form-multiple-column[data-columncount="9"] .form-radio-item,
            .form-multiple-column[data-columncount="9"] .form-checkbox-item {
                width: 11.11111111%;
            }
            [data-type="control_dropdown"] .form-dropdown {
                width: 100% !important;
                max-width: 184px;
            }
            [data-type="control_fullname"] .form-sub-label-container {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                width: 48%;
            }
            [data-type="control_fullname"] .form-sub-label-container:first-child {
                margin-right: 4%;
            }
            [data-type="control_phone"] .form-sub-label-container {
                width: 65%;
            }
            [data-type="control_phone"] .form-sub-label-container:first-child {
                width: 32.5%;
                margin-right: 2.5%;
            }
            [data-type="control_birthdate"] .form-sub-label-container {
                width: 22%;
                margin-right: 3%;
            }
            [data-type="control_birthdate"] .form-sub-label-container:first-child {
                width: 50%;
            }
            [data-type="control_birthdate"] .form-sub-label-container:last-child {
                margin-right: 0;
            }
            [data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
                width: 100%;
            }
            [data-type="control_time"] .form-sub-label-container {
                width: 37%;
                margin-right: 3%;
            }
            [data-type="control_time"] .form-sub-label-container:last-child {
                width: 20%;
                margin-right: 0;
            }
            [data-type="control_time"] .form-sub-label-container .form-dropdown {
                width: 100%;
            }
            [data-type="control_datetime"] .form-sub-label-container {
                width: 28%;
                margin-right: 4%;
            }
            [data-type="control_datetime"] .form-sub-label-container:last-child {
                width: 4%;
                margin-right: 0;
            }
            [data-type="control_datetime"].allowTime .form-sub-label-container {
                width: 12%;
                margin-right: 3%;
            }
            [data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
                width: 4%;
                margin-right: 0;
            }
            [data-type="control_datetime"].allowTime .allowTime-container {
                float: right;
                width: 51%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
                width: 27%;
                margin-right: 4%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
                width: 4%;
                margin-left: 3%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
                width: 27%;
                margin-right: 0;
            }
            [data-type="control_datetime"].allowTime .form-dropdown {
                width: 100%;
            }
            [data-type="control_payment"] .form-sub-label-container {
                width: auto;
            }
            [data-type="control_payment"] .form-sub-label-container .form-dropdown {
                width: 100%;
            }
            .form-address-table td .form-dropdown {
                width: 100%;
            }
            .form-address-table td .form-sub-label-container {
                width: 96%;
            }
            .form-address-table td:last-child .form-sub-label-container {
                margin-left: 4%;
            }
            .form-address-table td[colspan="2"] .form-sub-label-container {
                width: 100%;
                margin: 0;
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
                padding: 16px 3px 14px 3px;
            }
            .form-textbox,
            .form-textarea,
            .form-radio-other-input,
            .form-checkbox-other-input,
            .form-captcha input,
            .form-spinner input {
                background-color: #ffffff;
            }
            .form-textbox {
                height: 21px;
            }
            .form-textarea {
                height: 88px;
            }
            .form-textbox,
            .form-textarea {
                width: 100%;
                max-width: 184px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            [data-type="control_textbox"] .form-input,
            [data-type="control_textarea"] .form-input,
            [data-type="control_fullname"] .form-input,
            [data-type="control_phone"] .form-input,
            [data-type="control_datetime"] .form-input,
            [data-type="control_address"] .form-input,
            [data-type="control_email"] .form-input,
            [data-type="control_passwordbox"] .form-input,
            [data-type="control_autocomp"] .form-input,
            [data-type="control_textbox"] .form-input-wide,
            [data-type="control_textarea"] .form-input-wide,
            [data-type="control_fullname"] .form-input-wide,
            [data-type="control_phone"] .form-input-wide,
            [data-type="control_datetime"] .form-input-wide,
            [data-type="control_address"] .form-input-wide,
            [data-type="control_email"] .form-input-wide,
            [data-type="control_passwordbox"] .form-input-wide,
            [data-type="control_autocomp"] .form-input-wide {
                width: 100%;
                max-width: 184px;
            }
            [data-type="control_fullname"] .form-sub-label-container {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                width: 48%;
            }
            [data-type="control_fullname"] .form-sub-label-container:first-child {
                margin-right: 4%;
            }
            [data-type="control_phone"] .form-sub-label-container {
                width: 65%;
            }
            [data-type="control_phone"] .form-sub-label-container:first-child {
                width: 32.5%;
                margin-right: 2.5%;
            }
            [data-type="control_phone"] .form-sub-label-container .date-separate {
                visibility: hidden;
            }
            [data-type="control_datetime"] .form-sub-label-container {
                width: 28%;
                margin-right: 4%;
            }
            [data-type="control_datetime"] .form-sub-label-container:last-child {
                width: 4%;
                margin-right: 0;
            }
            [data-type="control_datetime"] .form-sub-label-container .date-separate {
                visibility: hidden;
            }
            [data-type="control_datetime"].allowTime .form-sub-label-container {
                width: 12%;
                margin-right: 3%;
            }
            [data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
                width: 4%;
                margin-right: 0;
            }
            [data-type="control_datetime"].allowTime .allowTime-container {
                float: right;
                width: 51%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
                width: 27%;
                margin-right: 4%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
                width: 4%;
                margin-left: 3%;
            }
            [data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
                width: 27%;
                margin-right: 0;
            }
            [data-type="control_datetime"].allowTime .form-dropdown {
                width: 100%;
            }
            .form-matrix-table {
                width: 100%;
                max-width: 184px;
            }
            .form-address-table {
                width: 100%;
                max-width: 184px;
            }
            .form-address-table td .form-dropdown {
                width: 100%;
            }
            .form-address-table td .form-sub-label-container {
                width: 96%;
            }
            .form-address-table td:last-child .form-sub-label-container {
                margin-left: 4%;
            }
            .form-address-table td[colspan="2"] .form-sub-label-container {
                width: 100%;
                margin: 0;
            }
            [data-type="control_dropdown"] .form-input,
            [data-type="control_birthdate"] .form-input,
            [data-type="control_time"] .form-input,
            [data-type="control_dropdown"] .form-input-wide,
            [data-type="control_birthdate"] .form-input-wide,
            [data-type="control_time"] .form-input-wide {
                width: 100%;
                max-width: 184px;
            }
            [data-type="control_dropdown"] .form-dropdown {
                width: 100% !important;
                max-width: 184px;
            }
            [data-type="control_birthdate"] .form-sub-label-container {
                width: 22%;
                margin-right: 3%;
            }
            [data-type="control_birthdate"] .form-sub-label-container:first-child {
                width: 50%;
            }
            [data-type="control_birthdate"] .form-sub-label-container:last-child {
                margin-right: 0;
            }
            [data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
                width: 100%;
            }
            [data-type="control_time"] .form-sub-label-container {
                width: 37%;
                margin-right: 3%;
            }
            [data-type="control_time"] .form-sub-label-container:last-child {
                width: 20%;
                margin-right: 0;
            }
            [data-type="control_time"] .form-sub-label-container .form-dropdown {
                width: 100%;
            }
            .form-label {
                margin-right: 0px;
                margin-bottom: 0;
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
            .form-submit-button {
                border-color : #14A989;
            }

            .form-line.form-line-column.form-col-2 {

            }

            #input_5 {
                color : #D05340;
            }


            /* Injected CSS Code */
        </style>

        <script src=ArchivosFrame/prototype.forms.js" type="text/javascript"></script>
        <script src="ArchivosFrame/jotform.forms.js" type="text/javascript"></script>
        <script type="text/javascript"></script>
    </head>
    <body>
        <input type="hidden" name="formID" value="60753967971673" />
        <div class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group">
                        <div class="header-text httac">
                            <h1 id="header_1" class="form-header">
                                Grafos
                            </h1>
                        </div>
                    </div>
                </li>
                <form action="AgregarVertice.php" method="post">
                    <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_4">
                        <div id="cid_4" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="AgregarVertice" type="submit" class="form-submit-button" name="AgregarVertice">
                                    Agregar Vertice
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_3">
                        <div id="cid_3" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice1" name="idVertice1" size="20" placeholder="id vertice" />
                        </div>
                    </li>
                </form>
                <form action="AgregarArista.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_9">
                        <div id="cid_9" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="AgregarArista" type="submit" class="form-submit-button" name="AgregarArista">
                                    Agregar arista
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_7">
                        <div id="cid_7" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="VerticeOrigen1" name="VerticeOrigen" size="20" placeholder="Vertice origen"/>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_8">
                        <div id="cid_8" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="input_8" name="VerticeDestino" size="20" placeholder="Vertice Destino" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_7">
                        <div id="cid_7" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="Peso" name="Peso" size="20" placeholder="Peso"/>
                        </div>
                    </li>
                </form>
                <form id="MostrarGrafo" action="GraficaGrafos.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_5">
                        <div id="cid_5" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="VerGrafo" type="submit" class="form-submit-button" name="VerGrafo">
                                    Ver grafo
                                </button>
                            </div>
                        </div>
                    </li>
                </form>

                <form action="MostrarVertice.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_10">
                        <div id="cid_10" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="VerVertice" type="submit" class="form-submit-button" name="VerVertice">
                                    Ver vertice
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_17">
                        <div id="cid_17" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice2" name="idVertice2" size="20" placeholder="id Vertice" />
                        </div>
                    </li>
                </form>
                <form action="Adyacentes.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_11">
                        <div id="cid_11" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="VerAdyacentes" type="submit" class="form-submit-button" name="VerAdyacentes">
                                    Ver adyacentes
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice3" name="idVertice3" size="20" placeholder="id Vertice" />
                        </div>
                    </li>
                </form>
                <form action="verGrado.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_18">
                        <div id="cid_18" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="VerGrado" type="submit" class="form-submit-button" name="VerGrado">
                                    Ver grado
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_14">
                        <div id="cid_14" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice5" name="idVertice5" size="20" placeholder="id Vertice" />
                        </div>
                    </li>
                </form>
                <form action="EliminarVertice.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_12">
                        <div id="cid_12" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarVertice" type="submit" class="form-submit-button" name="EliminarVertice">
                                    Eliminar vertice
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_20">
                        <div id="cid_20" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice6" name="idVertice6" size="20" placeholder="id Vertice" />
                        </div>
                    </li>
                </form>
                <form action="EliminarArista.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_19">
                        <div id="cid_19" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarAdyacente" type="submit" class="form-submit-button" name="EliminarAdyacente">
                                    Eliminar arista
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice7" name="idVertice7" size="20" placeholder="id Vertice 1" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice8" name="idVertice8" size="20" placeholder="id Vertice 2" />
                        </div>
                    </li>
                </form>
                <form action="MostrarAdyacentes.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_19">
                        <div id="cid_19" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarAdyacente" type="submit" class="form-submit-button" name="EliminarAdyacente">
                                    Verificar si son adyacentes
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice10" name="idVertice10" size="20" placeholder="id Vertice A" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice9" name="idVertice9" size="20" placeholder="id Vertice B" />
                        </div>
                    </li>

                </form>
                <form id="MostrarMayor" action="VerMayor.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_5">
                        <div id="cid_5" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="VerMayor" type="submit" class="form-submit-button" name="VerMayor">
                                    Ver mayor
                                </button>
                            </div>
                        </div>
                    </li>
                </form>
                    <form action="AgregarMateria.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_12">
                        <div id="cid_12" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarVertice" type="submit" class="form-submit-button" name="AgregarMateria">
                                    Agregar Materia
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_20">
                        <div id="cid_20" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice6" name="idMateria" size="20" placeholder="id materia" />
                        </div>
                    </li>
                </form>
                  <form action="RecorridoProfundidad.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_12">
                        <div id="cid_12" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarVertice" type="submit" class="form-submit-button" name="RecorridoProfundidad">
                                    Recorrido de profundidad
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_20">
                        <div id="cid_20" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="comienzo" name="comienzoP" size="20" placeholder="Id comienzo" />
                        </div>
                    </li>
                </form>
                <form action="RecorridoAnchura.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_12">
                        <div id="cid_12" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarVertice" type="submit" class="form-submit-button" name="RecorridoAnchura">
                                    Recorrido de anchura
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_20">
                        <div id="cid_20" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="comienzo" name="comienzoA" size="20" placeholder="Id comienzo" />
                        </div>
                    </li>
                </form>
                <form action="Dijkstra.php" method="post">
                    <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_19">
                        <div id="cid_19" class="form-input-wide">
                            <div style="text-align:left" class="form-buttons-wrapper">
                                <button id="EliminarAdyacente" type="submit" class="form-submit-button" name="MasCorto">
                                    Camino mas corto
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice7" name="comienzoD" size="20" placeholder="id comienzo" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_15">
                        <div id="cid_15" class="form-input-wide jf-required">
                            <input type="text" class=" form-textbox" data-type="input-textbox" id="idVertice8" name="finalD" size="20" placeholder="id final" />
                        </div>
                    </li>
                </form>
                <li style="clear:both">
                </li>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="" />
                </li>
            </ul>
        </div>
        <input type="hidden" id="simple_spc" name="simple_spc" value="60753967971673" />
        <script type="text/javascript">
            document.getElementById("si" + "mple" + "_spc").value = "60753967971673-60753967971673";
        </script>
    </body>
</html>
<?php
echo "<hr><br>";

echo "<hr><br>";
?>
