<div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li  data-target="" data-slide-to="0" class="active"></li>
            <li  data-target="#myCarousel" data-slide-to="1"></li>
            <li  data-target="#myCarousel" data-slide-to="2"></li>
            <li  data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/carousel/actualizacion-android.jpg" alt="Chania" width="460" height="345">
              <div class="carousel-caption">
                <h3></h3>
                {foreach from=$noticias item=noticia}
                <p>{$noticias['noticia']}</p>
                {/foreach}
              </div>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-12 encabezado">
          <h3> Planes </h3>
        </div>
      </div>
             <div class="row">
             <div class="col-sm-6 col-lg-3 ">
              <div class="thumbnail">
                <h3> 1 Giga</h3>
                <img src="images/planes/1gb.jpg" alt="Gatito en Manta" class="img-responsive img-circle">
                <div class="caption">
                <p><a href="#" class="btn btn-primary" role="button">Ver detalle</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 ">
              <div class="thumbnail">
                <h3>2 GB</h3>
                <img src="images/planes/2gb.jpg" alt="Gatito en Manta" class="img-responsive img-circle">
                <div class="caption">
                <p><a href="#" class="btn btn-primary" role="button">Ver detalle</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail">
                <h3>3 GB</h3>
                <img src="images/planes/3gb.jpg" alt="Gatito en Manta" class="img-responsive img-circle">
                <div class="caption">
                <p><a href="#" class="btn btn-primary" role="button">Ver detalle</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail">
                <h3>4 GB</h3>
                <img src="images/planes/4gb.jpg" alt="Gatito en Manta" class="img-responsive img-circle">
                <div class="caption">
                <p><a href="#" class="btn btn-primary" role="button">Ver detalle</a>
                </div>
              </div>
            </div>
          </div>
