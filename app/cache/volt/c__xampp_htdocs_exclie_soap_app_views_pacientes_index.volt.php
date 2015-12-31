<div id="wizard" class="form_wizard wizard_horizontal">
    <ul class="wizard_steps">
        <li>
            <a href="#step-1">
                <span class="step_no">1</span>
                <span class="step_descr">Paso 1<br /><small>Datos Personales</small></span>
            </a>
        </li>
        <li>
            <a href="#step-2">
                <span class="step_no">2</span>
                <span class="step_descr">Paso 2<br /><small>Añadir Foto</small></span>
            </a>
        </li>
         <li>
            <a href="#step-3">
                <span class="step_no">3</span>
                <span class="step_descr">Paso 3<br /><small>Antecedentes</small></span>
            </a>
        </li>
    </ul>
    <div id="step-1">
        <div class="col-md-12">
            <form method="post" id="pacForm">
            <br>
                <div class="row">
                    <div class="form-group col-md-3">
                    
                        <?php echo $form->label('nombre', array('class' => 'control-label')); ?>
                        <?php echo $form->render('nombre', array('class' => 'form-control')); ?>
                        
                    </div>
                    <div class="form-group col-md-3">
                        <?php echo $form->label('apellido_paterno', array('class' => 'control-label')); ?>
                        <?php echo $form->render('apellido_paterno', array('class' => 'form-control')); ?>
                    </div>
                    <div class="form-group col-md-3">
                        <?php echo $form->label('apellido_materno', array('class' => 'control-label')); ?>
                        <?php echo $form->render('apellido_materno', array('class' => 'form-control')); ?>
                    </div>
                    <div class="form-group col-md-3">
                        <div id="gender" >
                            <?php echo $form->label('Sexo', array('class' => 'control-label')); ?>
                            <?php echo $form->render('Sexo', array('class' => 'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <?php echo $form->label('fecha_nacimiento', array('class' => 'control-label')); ?>
                        <?php echo $form->render('fecha_nacimiento', array('class' => 'form-control', 'data-inputmask' => '\'alias\':\'dd/mm/yyyy\'')); ?>
                    </div>
                    <div class="form-group col-md-3">
                        <?php echo $form->label('ocupacion', array('class' => 'control-label')); ?>
                        <?php echo $form->render('ocupacion', array('class' => 'form-control')); ?>
                    </div>
                    <div class="form-group col-md-3">
                        <?php echo $form->label('telefono', array('class' => 'control-label')); ?>
                        <?php echo $form->render('telefono', array('class' => 'form-control', 'data-inputmask' => '\'mask\':\'(999) - 999 - 99 - 99\'')); ?>
                    </div>
                    <div class="form-group col-md-3">
                        <div id="edo_civil" >
                            <?php echo $form->label('Estado Civil', array('class' => 'control-label')); ?>
                            <?php echo $form->render('Estado Civil', array('class' => 'form-control ')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        <?php echo $form->label('calle', array('class' => 'control-label')); ?>
                        <?php echo $form->render('calle', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('numero_ext', array('class' => 'control-label')); ?>
                        <?php echo $form->render('numero_ext', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('numero_int', array('class' => 'control-label')); ?>
                        <?php echo $form->render('numero_int', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('colonia', array('class' => 'control-label')); ?>
                        <?php echo $form->render('colonia', array('class' => 'form-control ')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        <?php echo $form->label('codigo_postal', array('class' => 'control-label')); ?>
                        <?php echo $form->render('codigo_postal', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Estados', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Estados', array('class' => 'form-control')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Municipios', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Municipios', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('email', array('class' => 'control-label')); ?>
                        <?php echo $form->render('email', array('class' => 'form-control ')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        <?php echo $form->label('curp', array('class' => 'control-label')); ?>
                        <?php echo $form->render('curp', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('rfc', array('class' => 'control-label')); ?>
                        <?php echo $form->render('rfc', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('referido', array('class' => 'control-label')); ?>
                        <?php echo $form->render('referido', array('class' => 'form-control ')); ?>
                    </div>
                    
                </div>
                <br><hr>
                <div class="row">
                    <div class="form group col-md-3">
                        <?php echo $form->label('Niveles Socioeconomicos', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Niveles Socioeconomicos', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Religiones', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Religiones', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Discapacidades', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Discapacidades', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Grupos Etnicos', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Grupos Etnicos', array('class' => 'form-control ')); ?>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        <?php echo $form->label('Tipo Sangre', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Tipo Sangre', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('Vivienda', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Vivienda', array('class' => 'form-control ')); ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form group col-sm-3">
                        <?php echo $form->label('Dependencia', array('class' => 'control-label')); ?>
                        <?php echo $form->render('Dependencia', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-sm-3">
                        <label># de Afiliación</label>
                        <input type="text" id="cAfiliacion1" class="form-control">  
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3>Contacto Emergencia: </h3>
                    <div class="form group col-md-3">
                        <?php echo $form->label('nombre_c', array('class' => 'control-label')); ?>
                        <?php echo $form->render('nombre_c', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('apellidopaternoc', array('class' => 'control-label')); ?>
                        <?php echo $form->render('apellidopaternoc', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('apellidomaternoc', array('class' => 'control-label')); ?>
                        <?php echo $form->render('apellidomaternoc', array('class' => 'form-control ')); ?>
                    </div>
                    <div class="form group col-md-3">
                        <?php echo $form->label('direccionc', array('class' => 'control-label')); ?>
                        <?php echo $form->render('direccionc', array('class' => 'form-control ')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <?php echo $form->label('telefonoc', array('class' => 'control-label')); ?>
                        <?php echo $form->render('telefonoc', array('class' => 'form-control', 'data-inputmask' => '\'mask\':\'(999) - 999 - 99 - 99\'')); ?>
                        
                    </div>
                </div>
            </form>
           
        </div>
    </div>
    <div id="step-2">
        <div class="col-md-12">
           <br>
            <h2>Añadir Foto</h2>
            <form action="pacientes/foto" class="dropzone" style="border: 1px solid #e5e5e5; height: 300px; " id="pacForm2">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form> 
        </div>
    </div>
    <div id="step-3">
        <br>
        <h2>Antecedentes</h2>
        <form id="pacForm3" class="form-horizontal form-label-left">
            <div class="row">
                <div class="form group col-md-4">
                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" checked=""> Toggle button
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- wizard -->
<?php echo $this->tag->javascriptInclude('public/Smart-Wizard/js/jquery.smartWizard.js'); ?>
<!-- DropZone -->
<?php echo $this->tag->javascriptInclude('public/downloads/dropzone.js'); ?> 

<script>
        $(document).ready(function () {
            // Smart Wizard     
            $('#wizard').smartWizard({ 
                labelNext:'Siguiente',
                labelPrevious:'Atrás',
                labelFinish:'Terminar',
                hideButtonsOnDisabled: true,
                onFinish: onFinishCallback
            });

            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                var formData = $("#pacForm").serialize();
                var formData2 = $("#pacForm2").serialize();
                console.log(formData);
                console.log('Forma 2 '+formData2);
            }

            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

            $(":input").inputmask();

            $("#Estados").change(function(event){
                var value = $(this).val();
                var getResultsUrl = 'pacientes/traemunicipios';    
                console.log(value);
                $.ajax({
                    type: "POST",
                    url: getResultsUrl,
                    data: {"estado_id": value},
                    
                    success: function(data){      
                        //console.log(data);               
                        $("#Municipios").empty();
                        parsed = $.parseJSON(data);
                        $.each(parsed, function(){
                           $("#Municipios").append('<option value="'+ this.ID +'">'+ this.NOMBRE +'</option>');
                        });  
                                      
                    }
                });
            });

        });

    </script>