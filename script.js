const apiKey = "MbHSDAPxupgsHgUZQkmNYWyqG_pnFkcoBnLTwqF3134"; // TMDb API yetkilendirme anahtarını buraya ekleyin

function searchMovies() {
  const searchInput = document.getElementById("searchInput").value;
  const apiUrl = `https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&query=${searchInput}`;

  // API'den verileri alacak fonksiyon
  fetch(apiUrl)
    .then(response => response.json())
    .then(data => showMovies(data.results))
    .catch(error => console.log("Hata oluştu:", error));
}

function showMovies(movies) {
  const moviesDiv = document.getElementById("movies");
  moviesDiv.innerHTML = ""; // Eski verileri temizle

  movies.forEach(function(movie) {
    const movieElement = document.createElement("div");
    movieElement.classList.add("movie");

    const titleElement = document.createElement("h2");
    titleElement.textContent = movie.title;

    const overviewElement = document.createElement("p");
    overviewElement.textContent = movie.overview;

    const posterElement = document.createElement("img");
    posterElement.src = `https://image.tmdb.org/t/p/w200${movie.poster_path}`;

    movieElement.appendChild(titleElement);
    movieElement.appendChild(overviewElement);
    movieElement.appendChild(posterElement);

    moviesDiv.appendChild(movieElement);
  });
}