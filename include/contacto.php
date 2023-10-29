   <!-- Inicio de contenidos -->
    <div class="container-fluid">
          <div class="row mt-5" id="contacto">
            <div class="container mt-5">
              <div class="row" style="height: 500px;">
                <div class="col-md-6 maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1902.0935354156704!2d-101.27885304213476!3d17.546277954413814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8434863cd14d5281%3A0x2c7c0791c9c5ea49!2sTamarindos%2C%20Olivo%2C%2040855%20Petatl%C3%A1n%2C%20Gro.!5e0!3m2!1ses!2smx!4v1655183056130!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                  <h2 class="text-uppercase mt-3 font-weight-bold text-white">Contactanos</h2>
                    <form method="POST">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" name="nombre" class="form-control mt-2"  placeholder="Nombre(s)" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" name="apellidos" class="form-control mt-2" placeholder="Apellidos" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="number" name="telefono" class="form-control mt-2" placeholder="Telefono" required>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <textarea class="form-control" name="mensaje" id="exampleFomrControlTextarea1" placeholder="Escriba aqui su mensaje" cols="3" required></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">Acepta las condiciones de uso. <a href="#">Leer condiciones</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <button class="btn btn-primary btn-block" type="submit" name="registrar" value="Enviar">Enviar</button>
                        </div>
                      </div>
                    </form>
                      <?php
                        include("conexiones/accion_co.php"); 
                      ?>
                    <div class="text-white">
                        <h2 class="text-uppercase mt-4 font-weight-bold">Ubicanos en:</h2>
                          <i class="fas fa-phone mt-3"></i> <a href="tel:+">Teléfono Fijo: (+755) 123456</a><br>
                          <i class="fas fa-mobile mt-3"></i> <a href="tel:+">Teléfono Móvil y What's App: (+758) 1038045</a><br>
                          <i class="fa fa-envelope mt-3"></i> <a href="">info@test.com</a><br>
                          <i class="fas fa-globe mt-3"></i> Domicilio 1, CP.40855 Petatlan<br>
                          <i class="fas fa-globe mt-3"></i> Domicilio 2, CP.40855 Petatlan<br>
                    </div>
                </div>
              </div>
            </div>
          </div> 
    </div>
    <!-- Fin de contenidos -->