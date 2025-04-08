(function () {
  console.log("destination.js");

  // Dynamically calculate the WordPress root URL
  const domaine = window.location.origin + window.location.pathname.split('/wp-content')[0] + '/';
  const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
  console.log(categorie__ul__li.length);
  
  categorie__ul__li.forEach((li) => {
    li.addEventListener("click", function () {
      let categoryId = li.getAttribute("data-category-id");
      const container = document.querySelector(".destination__list");
  

      if (li.classList.contains("active")) {

        container.innerHTML = "";
        li.classList.remove("active");
      } else {
  
        categorie__ul__li.forEach(btn => btn.classList.remove("active"));
        li.classList.add("active");
  
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        mon_fetch(apiUrl);
      }
    });
  });
  

  function mon_fetch(apiUrl) {
    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        const destinationList = document.querySelector(".destination__list");
        destinationList.innerHTML = "";
        console.log(data);
        data.forEach((article) => {
          const articleElement = document.createElement("div");
          articleElement.innerHTML = `
            <h3>${article.title.rendered}</h3>
            <a href="${article.link}" class="carte__bouton">Lire plus</a>
          `;
          destinationList.appendChild(articleElement);
        });
      })
      .catch((error) =>
        console.error("Erreur lors de la récupération des articles:", error)
      );
  }

  // Témoignages
  fetch(`${domaine}wp-json/wp/v2/posts?categories=17`)
    .then(res => res.json())
    .then(data => {
      const container = document.querySelector('.temoignages__list');
      data.forEach(post => {
        const el = document.createElement('div');
        el.classList.add('temoignage__item');
        el.innerHTML = `<strong>${post.title.rendered}</strong><p>${post.excerpt.rendered}</p>`;
        container.appendChild(el);
      });
    });

  // Promotions
  fetch(`${domaine}wp-json/wp/v2/posts?categories=18`)
    .then(res => res.json())
    .then(data => {
      const container = document.querySelector('.promotions__list');
      data.forEach(post => {
        const el = document.createElement('div');
        el.classList.add('promotion__item');
        el.innerHTML = `<h3>${post.title.rendered}</h3><p>${post.excerpt.rendered}</p>`;
        container.appendChild(el);
      });
    });

    
    document.getElementById('filtrerBtn').addEventListener('click', function () {
      const maxPrix = parseInt(document.getElementById('filtreInput').value);
      fetch(`${domaine}wp-json/wp/v2/posts?per_page=100`)
        .then(res => res.json())
        .then(data => {
          const container = document.querySelector(".destination__list");
          container.innerHTML = "";
          data.forEach(post => {
            const prix = parseInt(post.prix);
            if (!isNaN(prix) && prix <= maxPrix) {
              const el = document.createElement('div');
              el.innerHTML = `<h3>${post.title.rendered}</h3><p>Prix : ${prix}</p>`;
              container.appendChild(el);
            }
          });
        });
    });
    
    

})();
