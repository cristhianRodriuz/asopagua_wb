<div class="container">

    <!-- Outer Row -->
    <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">

                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Sistema de Administración</h1>
                                    <h3 class="h4 text-gray-900 mb-4">Asociación Asopagua</h3>
                                </div>
                                <div id="contentSearchEmail">
                                    <form class="user" method="POST" id="formSearchEmail">
                                        <div class="form-group">
                                            <label for="">Em@il:</label>
                                            <input type="email" class="form-control form-control-user" id="searchEmail" aria-describedby="searchEmail" placeholder="em@il" name="searchEmail" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Recibir código
                                        </button>
                                    </form>
                                </div>
                                <div id="contentChangePassword">
                                    <form class="user" method="POST" id="formChangePassword">
                                        <div class="form-group">
                                            <label for="">Código de recuperación:</label>
                                            <input type="text" class="form-control form-control-user" id="codeRecuperacion" aria-describedby="codeRecuperacion" placeholder="<code/>" name="codeRecuperacion" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nueva contraseña</label>
                                            <input type="text" class="form-control form-control-user" id="nuevaPassword" placeholder="Contraseña" name="nuevaPassword" disabled required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block btnChangePassword"  disabled>
                                            Cambiar contraseña
                                        </button>
                                    </form>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $().ready(function(){
        $("#contentChangePassword").hide();
        let code;
        if($("#formSearchEmail")){
            $("#formSearchEmail").on("submit",function(e){
                e.preventDefault();
                let userEmailPassword = $("#searchEmail").val();
                console.log(userEmailPassword);
                $.ajax({
                    type: "POST",
                    url: "ajax/administrador.php",
                    data: {
                        userEmailPassword
                    },
                    success: function(response) {
                        console.log(response);
                        let dataVerificated = JSON.parse(response);
                        Swal.fire({
                            title: "Verificando email",
                            html: "Esperando a que el sistema verifique su email. Esto puede tardar un momento",
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                timeInterval = setInterval(() => {
                                    const content = Swal.getHtmlContainer()
                                    if (content) {
                                        const b = content.querySelector('b');
                                        if (b) {
                                            b.textContent = Swal.getTimerLeft()
                                        }
                                    }
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timeInterval)
                            }
                        }).then(() => {
                            if(dataVerificated["nombre"]){
                               Swal.fire({
                                   icon: "success",
                                   title: "Verificación completada",
                                   text: "El equipo de ASOPAGUA le enviará un email con el código de recuperación"
                               }).then((result) => {
                                   if(result.isConfirmed){
                                       $("#contentSearchEmail").hide();
                                       $("#contentChangePassword").show();
                                       $(".btnChangePassword").attr('id',dataVerificated["id"]);
                                       $.ajax({
                                           type: "POST",
                                           url: "ajax/administrador.php",
                                           data: {
                                               dataVerificated
                                           },
                                           success: function (response) {
                                                 let dataJson = JSON.parse(response);
                                                 code = dataJson["code"];
                                           }
                                       });
                                   }
                               })
                            }
                        })
                    }
                });
            })
            $("#codeRecuperacion").on("change",function(e){
                let inputPassword = e.target.value;
                if(inputPassword == code){
                    Swal.fire({
                        "icon": 'success',
                        "title": 'El código es válido'
                    }).then((result) => {
                        if(result.isConfirmed){
                            $("#codeRecuperacion").attr('disabled',true);
                            $("#nuevaPassword").attr('disabled',false);
                            $(".btnChangePassword").attr("disabled",false);
                        }
                    })
                }else{
                    Swal.fire({
                        "icon": 'error',
                        "title": 'El código es inválido'
                    })
                }
            })
            $("#formChangePassword").on("submit",function(e){
                e.preventDefault();
                let nuevaPassword = $("#nuevaPassword").val();
                let idChange = $(".btnChangePassword").attr('id');
                $.ajax({
                    type: "POST",
                    url: "ajax/administrador.php",
                    data: {
                        nuevaPassword,
                        idChange
                    },
                    success: function (response) {
                        let jsonRes = JSON.parse(response);
                        if(jsonRes.verificado == true){
                            Swal.fire({
                                icon: "success",
                                title: "Proceso completado",
                                text: "Se ha cambiando su contraseña. Ahora puede iniciar sesión"
                            }).then((result) => {
                                if(result.isConfirmed){
                                    window.location.href = "admin";
                                }
                            })
                        }
                    }
                });
            })
        }
    })
</script>

