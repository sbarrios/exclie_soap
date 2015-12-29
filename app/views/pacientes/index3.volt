<h1>Pacientes</h1>

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
                <span class="step_no">3</span>
                <span class="step_descr">Paso 3<br /><small>Añadir Foto</small></span>
            </a>
        </li>
         <li>
            <a href="#step-3">
                <span class="step_no">2</span>
                <span class="step_descr">Paso 2<br /><small>Antecedentes</small></span>
            </a>
        </li>
    </ul>
    
    <div id="step-1">
        <div class="col-md-12">
            <form method="post" id="pacForm">
            <br>
                <div class="row">
                    <div class="form-group col-md-3">
                    
                        {{ form.label('nombre',['class': 'control-label']) }}
                        {{ form.render("nombre") }}
                        
                    </div>
                    <div class="form-group col-md-3">
                        {{ form.label('apellido_paterno',['class': 'control-label']) }}
                        {{ form.render('apellido_paterno', ['class': 'form-control']) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ form.label('apellido_materno',['class': 'control-label']) }}
                        {{ form.render('apellido_materno', ['class': 'form-control']) }}
                    </div>
                    <div class="form-group col-md-3">
                        <div id="gender" >
                            {{ form.label('Sexo',['class': 'control-label']) }}
                            {{ form.render('Sexo', ['class': 'form-control']) }}
                        </div>
                    </div>
                </div>
               <!--  <div class="row">
                    <div class="form-group col-md-3">
                        {{ form.label('fecha_nacimiento',['class': 'control-label']) }}
                        {{ form.render('fecha_nacimiento', ['class': 'form-control','data-inputmask': "'alias':'dd/mm/yyyy'"]) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ form.label('ocupacion',['class': 'control-label']) }}
                        {{ form.render('ocupacion', ['class': 'form-control']) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ form.label('telefono',['class': 'control-label']) }}
                        {{ form.render('telefono', ['class': 'form-control','data-inputmask': "'mask':'(999) - 999 - 99 - 99'"]) }}
                    </div>
                    <div class="form-group col-md-3">
                        <div id="edo_civil" >
                            {{ form.label('Estado Civil',['class': 'control-label']) }}
                            {{ form.render('Estado Civil', ['class': 'form-control ']) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        {{ form.label('calle',['class': 'control-label']) }}
                        {{ form.render('calle', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('numero_ext',['class': 'control-label']) }}
                        {{ form.render('numero_ext', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('numero_int',['class': 'control-label']) }}
                        {{ form.render('numero_int', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('colonia',['class': 'control-label']) }}
                        {{ form.render('colonia', ['class': 'form-control ']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        {{ form.label('codigo_postal',['class': 'control-label']) }}
                        {{ form.render('codigo_postal', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Estados',['class': 'control-label']) }}
                        {{ form.render('Estados', ['class': 'form-control']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Municipios',['class': 'control-label']) }}
                        {{ form.render('Municipios', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('email',['class': 'control-label']) }}
                        {{ form.render('email', ['class': 'form-control ']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        {{ form.label('curp',['class': 'control-label']) }}
                        {{ form.render('curp', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('rfc',['class': 'control-label']) }}
                        {{ form.render('rfc', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('referido',['class': 'control-label']) }}
                        {{ form.render('referido', ['class': 'form-control ']) }}
                    </div>
                    
                </div>
                <br><hr>
                <div class="row">
                    <div class="form group col-md-3">
                        {{ form.label('Niveles Socioeconomicos',['class': 'control-label']) }}
                        {{ form.render('Niveles Socioeconomicos', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Religiones',['class': 'control-label']) }}
                        {{ form.render('Religiones', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Discapacidades',['class': 'control-label']) }}
                        {{ form.render('Discapacidades', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Grupos Etnicos',['class': 'control-label']) }}
                        {{ form.render('Grupos Etnicos', ['class': 'form-control ']) }}
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form group col-md-3">
                        {{ form.label('Tipo Sangre',['class': 'control-label']) }}
                        {{ form.render('Tipo Sangre', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('Vivienda',['class': 'control-label']) }}
                        {{ form.render('Vivienda', ['class': 'form-control ']) }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form group col-sm-3">
                        {{ form.label('Dependencia',['class': 'control-label']) }}
                        {{ form.render('Dependencia', ['class': 'form-control ']) }}
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
                        {{ form.label('nombre_c',['class': 'control-label']) }}
                        {{ form.render('nombre_c', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('apellidopaternoc',['class': 'control-label']) }}
                        {{ form.render('apellidopaternoc', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('apellidomaternoc',['class': 'control-label']) }}
                        {{ form.render('apellidomaternoc', ['class': 'form-control ']) }}
                    </div>
                    <div class="form group col-md-3">
                        {{ form.label('direccionc',['class': 'control-label']) }}
                        {{ form.render('direccionc', ['class': 'form-control ']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        {{ form.label('telefonoc',['class': 'control-label']) }}
                        {{ form.render('telefonoc', ['class': 'form-control','data-inputmask': "'mask':'(999) - 999 - 99 - 99'"]) }}
                        
                    </div>
                </div> -->
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
<!-- {{ javascript_include('public/Smart-Wizard/js/jquery.smartWizard.js') }} -->
<!-- DropZone -->
{{ javascript_include('public/downloads/dropzone.js') }} 

        

    <script type="text/javascript">
        // $(document).ready(function () {
        //     // Smart Wizard     
        //     $('#wizard').smartWizard({ 
        //         labelNext:'Siguiente',
        //         labelPrevious:'Atrás',
        //         labelFinish:'Terminar',
        //         hideButtonsOnDisabled: true,
        //         onFinish:onFinishCallback
        //     });

        //     function onFinishCallback() {
        //         $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        //         var formData = $("#pacForm").serialize();
        //         var formData2 = $("#pacForm2").serialize();
        //         console.log(formData);
        //         console.log('Forma 2 '+formData2);
        //     }

        //     // Smart Wizard 
        //     $('#wizard_verticle').smartWizard({
        //         transitionEffect: 'slide'
        //     });
        //     // Mascaras
        //     $(":input").inputmask();

        //    $("#Estados").change(function(event){
        //         var value = $(this).val();
        //         var getResultsUrl = 'pacientes/search';    
        //         console.log(value);
        //         $.ajax({
        //             type: "POST",
        //             url: getResultsUrl,
        //             data: {"estado_id": value},
        //             success: function(response){                    
        //                 $("#Municipios").empty();
        //                 parsed = $.parseJSON(response);
        //                 $.each(parsed, function(){
        //                    $("#Municipios").append('<option value="'+ this.ID +'">'+ this.NOMBRE +'</option>');
        //                 });  
        //                 console.log(response);               
        //             }
        //         });
        //     });



        // });

        // function irAntes(data) {
        //     var datos = {idPac:data};
        //     $.ajax({
        //             type: "POST",
        //             url: "<?php echo $this->basePath() ?>/pacientes/antecedentes",
        //              data: datos,
        //             dataType: "html",
        //             success: function(data) {
        //                $("#step2").html(data);   
        //             },
        //             error: function(){
        //                   alert('Ocurrió un error, inténtelo más tarde.');
        //             }
        //     });
        // }
    
    </script>

       