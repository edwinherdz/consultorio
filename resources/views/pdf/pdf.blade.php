<style>

/* For other boilerplate styles, see: /docs/general-configuration-guide/boilerplate-content-css/ */
/*
* For rendering images inserted using the image plugin.
* Includes image captions using the HTML5 figure element.
*/

figure.image {
  display: inline-block;
  border: 1px solid gray;
  margin: 0 2px 0 1px;
  background: #f5f2f0;
}

figure.align-left {
  float: left;
}

figure.align-right {
  float: right;
}

figure.image img {
  margin: 8px 8px 0 8px;
}

figure.image figcaption {
  margin: 6px 8px 6px 8px;
  text-align: center;
}


/*
 Alignment using classes rather than inline styles
 check out the "formats" option
*/

img.align-left {
  float: left;
}

img.align-right {
  float: right;
}

/* Basic styles for Table of Contents plugin (toc) */
.mce-toc {
  border: 1px solid gray;
}

.mce-toc h2 {
  margin: 4px;
}

.mce-toc li {
  list-style-type: none;
}



</style>


<h2 style="text-align: center;">RECETA M&Eacute;DICA</h2>
<div style="text-align: center; line-height: 1.1;">DR. GABRIEL BUENFIL CAMPOS</div>
<div style="text-align: center; line-height: 1.1;">DIRECCI&Oacute;N CALLE XX NUM. 123 COL. NOMBRE COLONIA TEL. 99111064682</div>
<hr />
<table style="border-collapse: collapse; width: 99.9449%; height: 348.6px;" border="0">
<tbody>
<tr style="height: 39.2px;">
<td style="width: 28.2686%; height: 39.2px;">Nombre completo del paciente</td>
<td style="height: 39.2px; width: 71.5677%;" colspan="3">{{$consulta->Paciente->cnombre }} {{$consulta->Paciente->cprimerapellido }} {{$consulta->Paciente->csegundoapellido }}</td>
</tr>
<tr style="height: 19.6px;">
<td style="width: 28.2686%; height: 19.6px;">Edad : {{$consulta->eedad }} </td>
<td style="width: 21.6496%; height: 19.6px;">Sexo: {{$consulta->csexo }}</td>
<td style="width: 24.9591%; height: 19.6px;">Alergias: {{$consulta->calergias }}</td>
<td style="width: 24.9591%; height: 19.6px;">Talla: {{$consulta->dtalla}}</td>
</tr>
<tr style="height: 19.6px;">
<td style="width: 28.2686%; height: 19.6px;">Presi&oacute;n Arterial: {{$consulta->cpresion }}</td>
<td style="width: 21.6496%; height: 19.6px;">&nbsp;</td>
<td style="width: 24.9591%; height: 19.6px;">&nbsp;</td>
<td style="width: 24.9591%; height: 19.6px;">&nbsp;</td>
</tr>
<tr style="height: 19.6px;">
<td style="width: 28.2686%; height: 19.6px;">Diagnostico:</td>
<td style="width: 21.6496%; height: 19.6px;"></td>
<td style="width: 24.9591%; height: 19.6px;">{{$consulta->cdiagnostico }}</td>
</tr>
<tr style="height: 0px;">
<td style="width: 99.8362%; height: 152.4px;" colspan="4" rowspan="2">&nbsp;</td>
</tr>
<tr style="height: 152.4px;"></tr>
<tr style="height: 19.6px;">
<td style="height: 19.6px;" colspan="4">Tratamiento</td>
<td style="width: 24.9591%; height: 19.6px;">{{$consulta->ctratamiento}}</td>
</tr>
<tr style="height: 78.6px;">
<td style="height: 78.6px; border-color: #000000; border-style: solid;" colspan="4">&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="border-collapse: collapse; width: 100.056%; margin-left: auto; margin-right: auto; height: 45.8px;">
<tbody>
<tr style="height: 26.2px;">
<td style="width: 97.9155%; text-align: center; height: 26.2px;">
<p>____________________________________________________</p>
<p>Firma del M&eacute;dico</p>
</td>
</tr>
</tbody>
</table>
<p style="text-align: center;">&nbsp;</p>