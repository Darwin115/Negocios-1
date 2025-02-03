<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || PERFIL</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4M2DHVY2HW');
  </script>

    <!-- Aplicación de los estilos css de Boostrap -->
  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/TestStyle.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

  <script src="./scriptnav.js"></script>
  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">
</head>

<style>
  .text-justify {
    text-align: justify;
  }

  .custom-text-color {
      color: rgb(27, 152, 206) !important; 
  }

  .btn-custom {
      background-color: #238ac7;
      border: 2px solid #238ac7;
      color: black;
      padding: 10px 20px;
      border-radius: 5px;
      transition: all 0.3s ease; 
  }

  .btn-custom:hover {
      background-color: black;
      border-color: black;
      color: white;
  }
</style>

<body>
    <?php include '../Header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="assets/img/profile-img.jpg" alt="Perfil" class="rounded-circle">
                        <h2>Kevin Anderson</h2>
                        <h3>Estudiante</h3>
                    </div>
                </div>
            </div>

        <div class="col-xl-8">
            <div class="card mb-5">
                <div class="card-body">
                  <ul class="nav nav-tabs nav-tabs-bordered"> 
                    <li class="nav-item">
                        <button class="nav-link active custom-text-color" id="profile-overview-tab" data-bs-toggle="tab" data-bs-target="#profile-overview">Resumen</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link custom-text-color" id="profile-edit-tab" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link custom-text-color" id="profile-settings-tab" data-bs-toggle="tab" data-bs-target="#profile-settings">Configuración</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link custom-text-color" id="profile-change-password-tab" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar Contraseña</button>
                    </li>
                  </ul>
                  <!-- Contenido de las pestañas -->
                  <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="profile-overview">
                      <!-- Información del Resumen -->
                      <h5 class="card-title fw-bold text-start">Acerca de</h5>

                      <p class="small fst-italic text-justify">Soy un apasionado por la tecnología, la innovación y el aprendizaje continuo. Actualmente, curso estudios en el Instituto Tecnológico de Aguascalientes, con un enfoque en Desarrollo de Software. Mi interés en software me a llevado a explorar nuevas formas de aplicar los conocimientos adquiridos en proyectos prácticos que contribuyan a la comunidad.</p>
                      <br>
                      <h5 class="card-title fw-bold text-start">Detalles del Perfil</h5>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Nombre Completo</div>
                          <div class="col-lg-9 col-md-8 text-start">Kevin Anderson</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Escuela</div>
                          <div class="col-lg-9 col-md-8 text-start">Instituto Tecnológico de Aguascalientes</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Trabajo</div>
                          <div class="col-lg-9 col-md-8 text-start">Diseñador Web</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">País</div>
                          <div class="col-lg-9 col-md-8 text-start">México</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Dirección</div>
                          <div class="col-lg-9 col-md-8 text-start">C. Cultura Pame 108, Mirador de las Culturas II, 20174 Aguascalientes, Ags.</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Teléfono</div>
                          <div class="col-lg-9 col-md-8 text-start">(+52) 449-187-3457</div>
                      </div>
                      <br>
                      <div class="row mb-2">
                          <div class="col-lg-3 col-md-4 label fw-semibold text-start">Correo Electrónico</div>
                          <div class="col-lg-9 col-md-8 text-start">k.anderson@gmail.com</div>
                      </div>
                  </div>
                      <div class="tab-pane fade" id="profile-edit">
                          <!-- Formulario para editar perfil -->
                          <form>
                              <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Foto de Perfil</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/profile-img.jpg" alt="Foto de Perfil" class="rounded-circle me-3" style="width: 100px; height: 100px; object-fit: cover;">
                                        <div>
                                            <input type="file" class="form-control mb-2" id="profilePhoto" accept="image/*">
                                            <button type="button" class="btn btn-primary btn-sm">Subir</button>
                                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nombre Completo</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Acerca de</label>
                                  <div class="col-md-8 col-lg-9">
                                      <textarea name="about" class="form-control" id="about" style="height: 100px">Soy un apasionado por la tecnología, la innovación y el aprendizaje continuo. Actualmente, curso estudios en el Instituto Tecnológico de Aguascalientes, con un enfoque en Desarrollo de Software. Mi interés en software me a llevado a explorar nuevas formas de aplicar los conocimientos adquiridos en proyectos prácticos que contribuyan a la comunidad.</textarea>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="school" class="col-md-4 col-lg-3 col-form-label">Escuela</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="school" type="text" class="form-control" id="school" value="Instituto Tecnológico de Aguascalientes">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="job" class="col-md-4 col-lg-3 col-form-label">Trabajo</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="job" type="text" class="form-control" id="job" value="Diseñador Web">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="country" class="col-md-4 col-lg-3 col-form-label">País</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="country" type="text" class="form-control" id="country" value="México">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="address" class="col-md-4 col-lg-3 col-form-label">Dirección</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="address" type="text" class="form-control" id="address" value="C. Cultura Pame 108, Mirador de las Culturas II, 20174 Aguascalientes, Ags.">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="phone" class="col-md-4 col-lg-3 col-form-label">Teléfono</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="phone" type="text" class="form-control" id="phone" value="(+52) 449-187-3457">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="email" class="col-md-4 col-lg-3 col-form-label">Correo Electrónico</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="email" type="email" class="form-control" id="email" value="k.anderson@gmail.com">
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-custom">Guardar Cambios</button>
                              </div>
                          </form>
                      </div>

                      <div class="tab-pane fade" id="profile-settings">
                          <!-- Configuración de notificaciones -->
                          <form>
                              <div class="row mb-3">
                                  <label for="emailNotifications" class="col-md-4 col-lg-3 col-form-label">Notificaciones por Correo Electrónico</label>
                                  <div class="col-md-8 col-lg-9">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                          <label class="form-check-label" for="changesMade">Cambios realizados en tu cuenta</label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                          <label class="form-check-label" for="newProducts">Información sobre nuevas universidades y cursos</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="text-center">
                              <button type="submit" class="btn btn-custom">Guardar Cambios</button>
                              </div>
                          </form>
                      </div>

                      <div class="tab-pane fade" id="profile-change-password">
                          <!-- Formulario para cambiar contraseña -->
                          <form>
                              <div class="row mb-3">
                                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña Actual</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="newPassword" type="password" class="form-control" id="newPassword">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Reingresa la Nueva Contraseña</label>
                                  <div class="col-md-8 col-lg-9">
                                      <input name="renewPassword" type="password" class="form-control" id="renewPassword">
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-custom">Cambiar Contraseña</button>
                              </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <!-- Vinculando Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
</body>

</html>