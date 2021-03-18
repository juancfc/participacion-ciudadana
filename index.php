<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejemplos </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://assets.adobedtm.com/extensions/EPbde2f7ca14e540399dcc1f8208860b7b/AppMeasurement.min.js" type="text/javascript"></script>
</head>

<body>

    <?php
    include("function.php");
    ?>

    <div align="center">
        <img src="img/logo.png"/>
    </div>
    <div >
        <a href="plantilla.php" ><img src="img/EXCEL-ICON.png" style="height: 15%; width: 15%"/></a>
    </div>


    <div>
        <table id="tblData" class="order-table" style="width: 100%">
            <tr style="color: #fff; background-color: #4CAF50">
                <th >Nombre(s)</th>
                <th >Apellido Paterno</th>
                <th >Apellido Materno</th>
                <th >
                    <select class="select-table-filter form-select form-select-sm" data-table="order-table" style="background-color: #4CAF50; border: none; color: #fff; width: 150PX"  >
                        <option value="">DEPENDENCIA</option>
                        <option value="H. Asamblea Municipal">H. Asamblea Municipal</option>
                        <option value="Secretaría Municipal">Secretaría Municipal</option>
                        <option value="Secretaría ejecutiva del Sistema Municipal de Protección Integral de Niñas, Niños y Adolescentes de Pachuca">Secretaría ejecutiva del Sistema Municipal de Protección Integral de Niñas, Niños y Adolescentes de Pachuca</option>
                        <option value="Secretaría General Municipal">Secretaría General Municipal</option>
                        <option value="Secretaría de planeación y evaluación">Secretaría de Planeación y Evaluación</option>
                        <option value="Secretaría de la Tesorería">Secretaría de la Tesorería</option>
                        <option value="Secretaría de Administración">Secretaría de Administración</option>
                        <option value="Secretaría de Contraloría y Transparencia">Secretaría de Contraloría y Transparencia</option>
                        <option value="Secretaría de Servicios Públicos Municipales">Secretaría de Servicios Públicos Municipales</option>
                        <option value="Secretaría de Obras Públicas Desarrollo Urbano, Vivienda y Movilidad">Secretaría de Obras Públicas Desarrollo Urbano, Vivienda y Movilidad</option>
                        <option value="Secretaría de Seguridad Pública, Tránsito y Vialidad">Secretaría de Seguridad Pública, Tránsito y Vialidad</option>
                        <option value="Secretaría de Desarrollo Económico">Secretaría de Desarrollo Económico</option>
                        <option value="Secretaría de Medio Ambiente y Desarrollo Sustentable">Secretaría de Medio Ambiente y Desarrollo Sustentable</option>
                        <option value="Secretaría de Desarrollo Humano y Social">Secretaría de Desarrollo Humano y Social</option>
                        <option value="Secretaría Municipal de las Mujeres">Secretaría Municipal de las Mujeres</option>
                        <option value="Sistema DIF Municipal">Sistema DIF Municipal</option>
                        <option value="Instituto Municipal de Investigación y Planeación">Instituto Municipal de Investigación y Planeación</option>
                        <option value="Instituto Municipal para la Prevención de Adicciones">Instituto Municipal para la Prevención de Adicciones</option>
                        <option value="Instituto Municipal del Deporte">Instituto Municipal del Deporte</option>
                        <option value="Instituto Municipal para la Juventud">Instituto Municipal para la Juventud</option>
                        <option value="Instituto Municipal para la Cultura">Instituto Municipal para la Cultura</option>
                        <option value="Primera Unidad De Rescate, Rehabilitación y Reubicación de Fauna Silvestre, Endémica Y Exótica De México">Primera Unidad De Rescate, Rehabilitación y Reubicación de Fauna Silvestre, Endémica Y Exótica De México</option>
                    </select>
                </th>
                <th >
                    <select class="select-table-filter form-select form-select-sm" data-table="order-table" style="background-color: #4CAF50; border: none; color: #fff;"  >
                        <option value="">SEXO</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>

                </th>
                <th >Rango Edad</th>
                <th >Télefono</th>
                <th >Correo</th>
                <th >
                    <select class="select-table-filter form-select form-select-sm" data-table="order-table" style="background-color: #4CAF50; border: none; color: #fff; width: 150PX"  >
                        <option value="">PROBLEMÁTICA</option>
                        <option value="Desarrollo urbano">Desarrollo urbano</option>
                        <option value="Desarrollo metropolitano">Desarrollo metropolitano</option>
                        <option value="Ordenamiento territorial">Ordenamiento territorial</option>
                        <option value="Mejoramiento de la infraestructura vial">Mejoramiento de la infraestructura vial</option>
                        <option value="Regulación de los usos de suelo">Regulación de los usos de suelo</option>
                        <option value="Vivienda">Vivienda</option>
                        <option value="Centro histórico">Centro histórico</option>
                        <option value="Barrios altos">Barrios altos</option>
                        <option value="Catastro urbano">Catastro urbano</option>
                        <option value="Movilidad sustentable e incluyente">Movilidad sustentable e incluyente</option>
                        <option value="Atlas de riesgo">Atlas de riesgo</option>
                        <option value="Parques y jardines">Parques y jardines</option>
                        <option value="Recolección y disposición de residuos sólidos">Recolección y disposición de residuos sólidos</option>
                        <option value="Alumbrado público">Alumbrado público</option>
                        <option value="Mercados, comercio y abasto">Mercados, comercio y abasto</option>
                        <option value="Panteón">Panteón</option>
                        <option value="Rastro">Rastro</option>
                        <option value="Ordenamiento ecológico">Ordenamiento ecológico</option>
                        <option value="Cuidado al medio ambiente">Cuidado al medio ambiente</option>
                        <option value="Sustentabilidad ambiental">Sustentabilidad ambiental</option>
                        <option value="Cambio climático">Cambio climático</option>
                        <option value="Reforestación">Reforestación</option>
                        <option value="Rescate y protección de animales">Rescate y protección de animales</option>
                        <option value="Control canino y felino">Control canino y felino</option>
                        <option value="Otros">Otros</option>

                    </select>
                </th>
                <th >Observación de la problematica</th>
                <th >Propuesta</th>

            </tr>

            <?php 
            $sql = "select * from fCiudadano";
            $result = db_query($sql);

            while($row = mysqli_fetch_object($result)){
                ?>

                <tr>
                   <td><?php echo $row->nombre;?></td>
                   <td><?php echo $row->ap;?></td>
                   <td><?php echo $row->am;?></td>
                   <td><?php echo $row->dependencia;?></td>
                   <td><?php echo $row->sexo;?></td>
                   <td><?php echo $row->rangoEdad;?></td>
                   <td><?php echo $row->telefono;?></td>
                   <td><?php echo $row->correo;?></td>
                   <td><?php echo $row->tpoProblematica;?></td>
                   <td><?php echo $row->problematicaObser;?></td>
                   <td><?php echo $row->propuesta;?></td>
               </tr>

           <?php } ?>
       </table>    
   </div>





<script type="text/javascript">
    (function(document) {
        'use strict';

        var LightTableFilter = (function(Arr) {

            var _input;
            var _select;

            function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }

            function _onSelectEvent(e) {
                _select = e.target;
                var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, _filterSelect);
                    });
                });
            }

            function _filter(row) {

                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

            }

            function _filterSelect(row) {

                var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
                row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    var selects = document.getElementsByClassName('select-table-filter');
                    Arr.forEach.call(inputs, function(input) {
                        input.oninput = _onInputEvent;
                    });
                    Arr.forEach.call(selects, function(select) {
                       select.onchange  = _onSelectEvent;
                   });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });

    })(document);
</script>
<script type="text/javascript">
    function exportProductDatabase($productResult) {

        $timestamp = time();
        $filename = 'Export_' . $timestamp . '.xls';

        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $isPrintHeader = false;

        foreach ($productResult as $row) {

            if (! $isPrintHeader ) {

                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;

            }

            echo implode("\t", array_values($row)) . "\n";

        }

        exit();

    }

</script>
</body>
</html>