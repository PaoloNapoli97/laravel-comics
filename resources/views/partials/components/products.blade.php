<main>
    <div class="container">
      <div class="products">
        <div class="tag">
          <h2>CURRENT SERIES</h2>
        </div>
        
        @foreach ($comics as $comic)
          <div class="cards product">
            <div class="card">
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
              <a href="">{{ $comic['series'] }}</a>
            </div>
          </div>
        @endforeach

        <div class="load-more">
          <button type="button">Load More</button>
        </div>
      </div>
    </div>
  </main>