    <!-- Inicio de contenidos -->
    <div class="container-fluid py-5">
          <div class="row" id="cita">
            <div class="container mt-4">
              <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="POST">
                      <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Crea tu cita</h2>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Nombre:</label>
                            <input type="text" name="nombre" class="form-control mt-2"  placeholder="Nombre(s)" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control mt-2" placeholder="Apellidos" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Sexo:</label>
                            <select name="sexo" id="Sexo" class="form-control mt-2">
                              <option value="Selecciona">Sexo:</option>
                              <option value="Hombre">Hombre</option>
                              <option value="Mujer">Mujer</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Telefono:</label>
                            <input type="number" name="telefono" class="form-control mt-2" placeholder="Telefono" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Correo electronico:</label>
                            <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Fecha y hora:</label>
                            <input type="datetime-local" name="fecha_cita" class="form-control mt-2"
                            min="2021-07-31" max="2021-12-31"placeholder="Fecha y hora para la cita" required>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Servicios:</label>
                           <select name="servicio" id="servicio" class="form-control mt-2">
                              <option>Servicios:</option>
                              <option>Corte de cabello para mujer  $150.00</option>
                              <option>Corte de cabello para hombre  $125.00</option>
                              <option>Manicura  $190.00</option>
                              <option>Pedicura  $190.00</option>
                            </select>
                          </div>
                        </div>
                      </div>
                        <div class="col-lg-12">
                          <button class="btn btn-primary btn-block" type="submit" name="registrar" value="Enviar">Enviar</button>
                        </div>
                      </div>
                    </form>
                    <?php
                      include("conexiones/accion_ci.php"); 
                    ?>
                </div>
              </div>
            </div>
          </div> 
    </div>
    <!-- Fin de contenidos -->