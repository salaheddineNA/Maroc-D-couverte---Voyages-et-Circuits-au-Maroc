// Script spécifique à la page destinations
document.addEventListener("DOMContentLoaded", () => {
  // Gestion des filtres
  const filterButtons = document.querySelectorAll(".filter-btn")
  const destinations = document.querySelectorAll(".destination-detail")

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const filter = this.getAttribute("data-filter")

      // Mettre à jour les boutons actifs
      filterButtons.forEach((btn) => btn.classList.remove("active"))
      this.classList.add("active")

      // Filtrer les destinations
      destinations.forEach((destination) => {
        const category = destination.getAttribute("data-category")

        if (filter === "all" || category === filter) {
          destination.style.display = "block"
          destination.style.animation = "fadeInUp 0.5s ease-out"
        } else {
          destination.style.display = "none"
        }
      })
    })
  })

  // Galerie d'images
  const mainImages = document.querySelectorAll(".main-image img")
  const galleryImages = document.querySelectorAll(".image-gallery img")

  galleryImages.forEach((img) => {
    img.addEventListener("click", function () {
      const mainImg = this.closest(".destination-images").querySelector(".main-image img")
      const tempSrc = mainImg.src
      mainImg.src = this.src
      this.src = tempSrc
    })
  })

  // Animation au scroll pour les destinations
  const observerOptions = {
    threshold: 0.2,
    rootMargin: "0px 0px -100px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in")
      }
    })
  }, observerOptions)

  destinations.forEach((destination) => {
    observer.observe(destination)
  })

  // Smooth scroll vers les destinations spécifiques
  if (window.location.hash) {
    setTimeout(() => {
      const target = document.querySelector(window.location.hash)
      if (target) {
        target.scrollIntoView({ behavior: "smooth", block: "start" })
      }
    }, 100)
  }
})

// Fonction pour afficher le formulaire de contact spécifique
function showContactForm(destination) {
  // Créer une modal de contact personnalisée
  const modal = document.createElement("div")
  modal.className = "modal"
  modal.id = "contactModal"
  modal.innerHTML = `
        <div class="modal-content">
            <span class="close" onclick="closeContactModal()">&times;</span>
            <h2>Demande d'informations - ${destination.charAt(0).toUpperCase() + destination.slice(1)}</h2>
            <form id="contactDestinationForm" action="php/contact.php" method="POST">
                <input type="hidden" name="destination" value="${destination}">
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="telephone" placeholder="Votre téléphone">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Votre message ou questions spécifiques" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-full">Envoyer la demande</button>
            </form>
        </div>
    `

  document.body.appendChild(modal)
  modal.style.display = "block"

  // Fermer en cliquant à l'extérieur
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeContactModal()
    }
  })

  // Gérer la soumission du formulaire
  const form = document.getElementById("contactDestinationForm")
  form.addEventListener("submit", function (e) {
    e.preventDefault()

    const formData = new FormData(this)
    const nom = formData.get("nom")
    const email = formData.get("email")
    const message = formData.get("message")

    if (!nom || !email || !message) {
      alert("Veuillez remplir tous les champs obligatoires.")
      return
    }

    const isValidEmail = (email) => {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      return re.test(email)
    }

    if (!isValidEmail(email)) {
      alert("Veuillez entrer une adresse email valide.")
      return
    }

    alert("Envoi en cours...")

    setTimeout(() => {
      alert("Votre demande a été envoyée avec succès!")
      closeContactModal()
    }, 2000)
  })
}

function closeContactModal() {
  const modal = document.getElementById("contactModal")
  if (modal) {
    modal.remove()
  }
}

// Fonction de recherche dans les destinations
function searchDestinations(query) {
  const destinations = document.querySelectorAll(".destination-detail")
  const searchQuery = query.toLowerCase()

  destinations.forEach((destination) => {
    const title = destination.querySelector("h2").textContent.toLowerCase()
    const description = destination.querySelector(".destination-description").textContent.toLowerCase()
    const highlights = Array.from(destination.querySelectorAll(".highlight-item span"))
      .map((item) => item.textContent.toLowerCase())
      .join(" ")

    if (title.includes(searchQuery) || description.includes(searchQuery) || highlights.includes(searchQuery)) {
      destination.style.display = "block"
    } else {
      destination.style.display = "none"
    }
  })
}

// Ajouter une barre de recherche dynamique
function addSearchBar() {
  const filtersSection = document.querySelector(".filters .container")
  const searchBar = document.createElement("div")
  searchBar.className = "search-bar"
  searchBar.innerHTML = `
        <div class="search-input-container">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Rechercher une destination...">
            <button type="button" id="clearSearch" style="display: none;">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `

  filtersSection.appendChild(searchBar)

  const searchInput = document.getElementById("searchInput")
  const clearButton = document.getElementById("clearSearch")

  searchInput.addEventListener("input", function () {
    const query = this.value.trim()

    if (query.length > 0) {
      clearButton.style.display = "block"
      searchDestinations(query)
    } else {
      clearButton.style.display = "none"
      // Réafficher toutes les destinations
      document.querySelectorAll(".destination-detail").forEach((dest) => {
        dest.style.display = "block"
      })
    }
  })

  clearButton.addEventListener("click", function () {
    searchInput.value = ""
    this.style.display = "none"
    document.querySelectorAll(".destination-detail").forEach((dest) => {
      dest.style.display = "block"
    })
  })
}

// Ajouter la barre de recherche au chargement
document.addEventListener("DOMContentLoaded", () => {
  addSearchBar()
})
