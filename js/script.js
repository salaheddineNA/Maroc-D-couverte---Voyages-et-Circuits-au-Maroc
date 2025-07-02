// Navigation mobile

  const navToggle = document.getElementById("nav-toggle")
  const navMenu = document.getElementById("nav-menu")
  const navbar = document.getElementById("navbar")

  // Toggle menu mobile
  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active")

    // Animation du hamburger
    const bars = navToggle.querySelectorAll(".bar")
    bars.forEach((bar, index) => {
      if (navMenu.classList.contains("active")) {
        if (index === 0) bar.style.transform = "rotate(-45deg) translate(-5px, 6px)"
        if (index === 1) bar.style.opacity = "0"
        if (index === 2) bar.style.transform = "rotate(45deg) translate(-5px, -6px)"
      } else {
        bar.style.transform = "none"
        bar.style.opacity = "1"
      }
    })
  })


