<header>
  <div class="container">
    <div class="header-left">
      <a href="{{ route('movies.index') }}"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png" alt="Ipercoop Logo"></a>
    </div>
    <div class="header-right">
      <div class="container_homepage">
        <a href="{{ route('movies.index') }}"><strong>Homepage</strong></a>
        <input class="input_search_movie" type="text" name="" value="" placeholder="Digita il film da cercare">
        <a class="search" onclick="return false" href="#">Cerca</a>
      </div>
    </div>
  </div>
</header>
