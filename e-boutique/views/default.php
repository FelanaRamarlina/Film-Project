<link rel="stylesheet" type="text/css" href="./ressources/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rechercher </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href='index.php?ctrl=user&action=films'>Films <span class="sr-only"></span></a></li>
            <li><a href='index.php?ctrl=user&action=series'>Séries</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">liste deroulante 1</a></li>
                <li><a href="#">liste deroulante 2</a></li>
                <li><a href="#">liste deroulante 3</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Valider</button>
          </form>
        </div><!-- navbar-collapse -->
  </div><!-- container-fluid -->
</nav>
        <div class="titreindex">
            <h2>Exclus</h2>
        </div>
    </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./images/JusticeLeague.jpeg" alt="Justice League" style="width:100%;">
      </div>

      <div class="item">
        <img src="./images/crime.jpeg" alt="Crime" style="width:100%;">
      </div>

      <div class="item">
        <img src="./images/jumanji.jpg" alt="Jumanji" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>

    <h2> Prochainement à télécharger...  </h2>

    <div class="col-xs-12 col-md-12 cinqphotos">
        <div class="col-xs-12 col-md-2">
            <img src="./images/strangerthings.jpg" alt="Stranger Things" style="width:85%;">
            <p> Stranger Things - HDRIP </p>
            <p> Disponnible : 2017</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=LA7893f-B_A"> Voir la bande-annonce</a></button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/normandie.jpg" alt="Normandie" style="width:90%;">
            <p> Normandie Nue - Full HD</p>
            <p>Disponnible : 2018</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=K_28848C_6U"> Voir la bande-annonce</a></button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/naked.jpg" alt="Naked" style="width:90%;">
            <p> Naked - 720p </p>
            <p>Disponnible : 2018</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=FbNVfnjxCtM"> Voir la bande-annonce</a></button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/ferdinand.jpg" alt="Ferdinand" style="width:86%;">
            <p> Ferdinand 1080p </p>
            <p>Disponnible : 2018</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=XDPdFX7AetU"> Voir la bande-annonce</a></button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/epouse.jpg" alt="Epouse" style="width:86%;">
            <p> Epouse moi mon pote HD </p>
            <p>Disponnible : 2017</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=0illlpw6TZ0"> Voir la bande-annonce</a></button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/bright.jpg" alt="Bright" style="width:84%;">
            <p> Bright </p>
            <p>Disponnible : 2018</p>
            <button type="button" class="btn btn-success" style="width:95%;"><a href="https://www.youtube.com/watch?v=ZKzvjeqmxuY"> Voir la bande-annonce</a></button>
        </div>
    </div>

    <br/>
</div>
