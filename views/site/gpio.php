<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'GPIO';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="gpio">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Este es el menú dónde puedes depurar los pines.
    </p>

    <table class="tablatodos">
        <tr>
            <th>TODO<br />ON</th>
            <th>TODO<br />OFF</th>
            <th>Parpadear<br />en orden</th>
            <th>Parpadear<br />aleatorio</th>
            <th>Parpadear<br />TODO</th>
        </tr>
        <tr>
            <td class="pulsador">
                <input class="activar" type="submit" name="todoON" value="todoON"/>
            </td>
            <td class="pulsador">
                <input class="desactivar" type="submit" name="todoOFF" value="todoOFF"/>
            </td>
            <td class="pulsador">
                <input class="activar" type="submit" name="parpadeoORDEN" value="parpadeoORDEN"/>
            </td>
            <td class="pulsador">
                <input class="activar" type="submit" name="parpadeoALEATORIO" value="parpadeoALEATORIO"/>
            </td>
            <td class="pulsador">
                <input class="activar" type="submit" name="parpadeoTODO" value="parpadeoTODO"/>
            </td>
        </tr>
    </table>

    <table class="tablaprincipal">
        <tr>
            <th>PIN</th>
            <th>ACTIVAR</th>
            <th>DESACTIVAR</th>
            <th>1PARPADEO</th>
            <th>PARPADEAR</th>
            <th>ESTADO</th>
        </tr>

        <?php foreach (range(1,40) as $n): ?>
        <tr>
            <?= Html::beginForm([
                'site/gpio',
            ],
            'post',
            [
                'enableAjaxValidation'=>false,
                'enctype' => 'multipart/form-data',
                'class' => 'form-horizontal col-lg-6 col-lg-offset-3 ',
                'id' => 'gpio'.$n.'-form',
                //'afterValidate'=>'js:enviar',
                //'onsubmit'=>"",
            ]); ?>

            <?= Html::hiddenInput('pin', $value = $n, []); ?>
                <td><?= $n; ?></td>

                <td class="pulsador">
                    <?= Html::button('', [
                        'class' => 'activar',
                        'name' => 'activar',
                        'value' => $n,
                    ]) ?>
                </td>

                <td class="pulsador">
                    <?= Html::button('', [
                        'class' => 'desactivar',
                        'name' => 'desactivar',
                        'value' => $n,
                    ]) ?>
                </td>

                <td class="pulsador">
                    <?= Html::button('', [
                        'class' => 'activar',
                        'name' => 'parpadear1',
                        'value' => $n,
                    ]) ?>
                </td>

                <td class="pulsador">
                    <?= Html::button('', [
                        'class' => 'activar',
                        'name' => 'parpadear10',
                        'value' => $n,
                    ]) ?>
                </td>

                <td>¿?</td>
            <?= Html::endForm() ?>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<script type="text/javascript">
    window.onload = function() {
        console.log('El documento está preparado completamente');
        $('button[type="button"]').click(function() {
            valor = $(this).val();
            nombre = $(this).attr('name');
            form_id = $(this).parent('form').append('<p>HOLA</p>');
            enviar(valor, nombre, form_id);

            console.log(form_id);
        });
    };

    /**
     * Comprueba el estado de un pin específico
     */

    function comprobarPin(pin) {
        estadoPin = false;
        return estadoPin
    }

    /**
     * Comprueba el estado de todos los pines y los devuelve en un array.
     */
    function comprobarPines() {
        estadoPines = [];
        return estadoPines;
    }


    /**
     * Envía la acción al pulsar un botón desde la tabla.
     * @param pin  El número de pin sobre el que se actúa
     * @param nombre El nombre de la acción
     * @returns {boolean} Devuelve true si se realiza correctamente.
     */
    function enviar(pin, nombre) {
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: "<?= Url::to(['site/gpio']); ?>",
            data: 'nombre='+nombre+'&pin='+pin,
            beforeSend : function() {
                // Modificando icono de estado (cambiar por bombillas)
            },
            success: function(data) {
                // Modificando icono de estado
                 if (nombre == 'encender') {
                     console.log('Se enciende el pin ' + pin);
                 } else if (nombre == 'apagar') {
                     console.log('Se apaga el pin ' + pin);
                 }

                // Mostrando por consola
                console.log('Se ha recibido: ' + data);
            },
            error: function(data) {
                alert('error');
                console.log('Ha ocurrido un error al enviar petición al ' +
                    'servidor, es necesario comprobar registros');
            }
        });
        return false;
    }
</script>
