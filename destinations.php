<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations du Maroc - Maroc Découverte</title>
    <meta name="description" content="Découvrez toutes les destinations du Maroc : Marrakech, Fès, Sahara, Atlas et bien plus encore.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/destinations.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php"><h1>Maroc Découverte</h1></a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="destinations.php" class="nav-link active">Destinations</a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="destinations-header">
        <div class="container">
            <h1>Destinations du Maroc</h1>
            <p>Découvrez les merveilles du Royaume, des villes impériales aux paysages époustouflants</p>
        </div>
    </section>

    <!-- Filtres -->
    <section class="filters">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Toutes</button>
                <button class="filter-btn" data-filter="villes">Villes Impériales</button>
                <button class="filter-btn" data-filter="nature">Nature</button>
                <button class="filter-btn" data-filter="cote">Côte</button>
                <button class="filter-btn" data-filter="desert">Désert</button>
            </div>
        </div>
    </section>

    <!-- Destinations détaillées -->
    <section class="destinations-detailed">
        <div class="container">
            <!-- Marrakech -->
            <div class="destination-detail" id="marrakech" data-category="villes">
                <div class="destination-content">
                    <div class="destination-images">
                        <div class="main-image">
                            <img src="./img/2.jpg" alt="Marrakech">
                        </div>
                        <div class="image-gallery">
                            <img src="./img/6.jpg" alt="Jemaa el-Fna">
                            <img src="./img/7.jpg" alt="Souks">
                            <img src="./img/8.jpg" alt="Palais">
                        </div>
                    </div>
                    <div class="destination-info">
                        <div class="destination-header">
                            <h2>Marrakech</h2>
                            <div class="destination-badges">
                                <span class="badge badge-region">Centre</span>
                                <span class="badge badge-difficulty">Facile</span>
                            </div>
                        </div>
                        <p class="destination-subtitle">La ville rouge aux mille couleurs</p>
                        
                        <div class="destination-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>3-5 jours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-sun"></i>
                                <span>Octobre - Avril</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-euro-sign"></i>
                                <span>À partir de 350€</span>
                            </div>
                        </div>

                        <p class="destination-description">
                            Marrakech, surnommée la "Ville Rouge", est l'une des destinations les plus emblématiques du Maroc. 
                            Avec ses souks colorés, ses palais somptueux et sa célèbre place Jemaa el-Fna, elle offre une 
                            expérience authentique et inoubliable au cœur de la culture marocaine.
                        </p>

                        <div class="highlights-section">
                            <h3>Points d'intérêt</h3>
                            <div class="highlights-grid">
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Place Jemaa el-Fna</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Palais Bahia</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Jardins Majorelle</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Souks de la Médina</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Mosquée Koutoubia</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Palais El Badi</span>
                                </div>
                            </div>
                        </div>

                        <div class="activities-section">
                            <h3>Activités recommandées</h3>
                            <div class="activities-tags">
                                <span class="activity-tag">Shopping</span>
                                <span class="activity-tag">Gastronomie</span>
                                <span class="activity-tag">Architecture</span>
                                <span class="activity-tag">Photographie</span>
                            </div>
                        </div>

                        <div class="tips-section">
                            <h3>Conseils pratiques</h3>
                            <ul class="tips-list">
                                <li>Négociez toujours les prix dans les souks</li>
                                <li>Visitez la place Jemaa el-Fna au coucher du soleil</li>
                                <li>Goûtez au thé à la menthe traditionnel</li>
                                <li>Portez des chaussures confortables pour marcher</li>
                            </ul>
                        </div>

                        <div class="destination-actions">
                            <button class="btn btn-primary" onclick="window.location.href='reservation_modal.php'">
                                Réserver un circuit
                            </button>
                            <button class="btn btn-outline" onclick="window.location.href='index.php#contact'">
                                Demander des infos
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fès -->
            <div class="destination-detail" id="fes" data-category="villes">
                <div class="destination-content">
                    <div class="destination-images">
                        <div class="main-image">
                            <img src="./img/3.jpg" alt="Fès">
                        </div>
                        <div class="image-gallery">
                            <img src="./img/9.jpg" alt="Médina">
                            <img src="./img/10.jpg" alt="Tanneries">
                            <img src="./img/11.jpg" alt="Architecture">
                        </div>
                    </div>
                    <div class="destination-info">
                        <div class="destination-header">
                            <h2>Fès</h2>
                            <div class="destination-badges">
                                <span class="badge badge-region">Nord</span>
                                <span class="badge badge-difficulty moderate">Modérée</span>
                            </div>
                        </div>
                        <p class="destination-subtitle">Capitale spirituelle et culturelle du Maroc</p>
                        
                        <div class="destination-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>2-4 jours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-sun"></i>
                                <span>Mars - Mai, Sept - Nov</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-euro-sign"></i>
                                <span>À partir de 280€</span>
                            </div>
                        </div>

                        <p class="destination-description">
                            Fès est considérée comme la capitale spirituelle du Maroc. Sa médina, classée au patrimoine 
                            mondial de l'UNESCO, abrite la plus ancienne université du monde et des trésors architecturaux 
                            exceptionnels qui témoignent de la richesse de l'histoire marocaine.
                        </p>

                        <div class="highlights-section">
                            <h3>Points d'intérêt</h3>
                            <div class="highlights-grid">
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Médina de Fès el-Bali</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Université Al Quaraouiyine</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Tanneries Chouara</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Palais Royal</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Medersa Bou Inania</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Quartier des potiers</span>
                                </div>
                            </div>
                        </div>

                        <div class="activities-section">
                            <h3>Activités recommandées</h3>
                            <div class="activities-tags">
                                <span class="activity-tag">Culture</span>
                                <span class="activity-tag">Artisanat</span>
                                <span class="activity-tag">Histoire</span>
                                <span class="activity-tag">Architecture</span>
                            </div>
                        </div>

                        <div class="tips-section">
                            <h3>Conseils pratiques</h3>
                            <ul class="tips-list">
                                <li>Prenez un guide pour naviguer dans la médina</li>
                                <li>Visitez les tanneries le matin</li>
                                <li>Respectez les lieux de culte</li>
                                <li>Goûtez à la pastilla, spécialité locale</li>
                            </ul>
                        </div>

                        <div class="destination-actions">
                            <button class="btn btn-primary" onclick="window.location.href='reservation_modal.php'">
                                Réserver un circuit
                            </button>
                            <button class="btn btn-outline" onclick="window.location.href='index.php#contact'">
                                Demander des infos
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sahara -->
            <div class="destination-detail" id="sahara" data-category="desert">
                <div class="destination-content">
                    <div class="destination-images">
                        <div class="main-image">
                            <img src="./img/12.jpg" alt="Sahara">
                        </div>
                        <div class="image-gallery">
                            <img src="./img/14.webp" alt="Dunes">
                            <img src="./img/13.webp" alt="Caravane">
                            <img src="./img/15.jpg" alt="Coucher de soleil">
                        </div>
                    </div>
                    <div class="destination-info">
                        <div class="destination-header">
                            <h2>Désert du Sahara</h2>
                            <div class="destination-badges">
                                <span class="badge badge-region">Sud</span>
                                <span class="badge badge-difficulty moderate">Modérée</span>
                            </div>
                        </div>
                        <p class="destination-subtitle">L'immensité dorée du plus grand désert du monde</p>
                        
                        <div class="destination-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>2-4 jours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-sun"></i>
                                <span>Octobre - Avril</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-euro-sign"></i>
                                <span>À partir de 450€</span>
                            </div>
                        </div>

                        <p class="destination-description">
                            Le Sahara marocain offre une expérience unique avec ses dunes de sable doré, ses nuits étoilées 
                            et ses traditions nomades. Merzouga et M'Hamid sont les portes d'entrée vers cette aventure 
                            extraordinaire qui marquera votre voyage à vie.
                        </p>

                        <div class="highlights-section">
                            <h3>Points d'intérêt</h3>
                            <div class="highlights-grid">
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Dunes d'Erg Chebbi</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Nuit sous les étoiles</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Caravanes de chameaux</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Villages berbères</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Oasis de Merzouga</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Lever de soleil sur les dunes</span>
                                </div>
                            </div>
                        </div>

                        <div class="activities-section">
                            <h3>Activités recommandées</h3>
                            <div class="activities-tags">
                                <span class="activity-tag">Trekking</span>
                                <span class="activity-tag">Camping</span>
                                <span class="activity-tag">Astronomie</span>
                                <span class="activity-tag">Culture berbère</span>
                            </div>
                        </div>

                        <div class="tips-section">
                            <h3>Conseils pratiques</h3>
                            <ul class="tips-list">
                                <li>Apportez des vêtements chauds pour la nuit</li>
                                <li>Protégez-vous du soleil et du sable</li>
                                <li>Respectez l'environnement désertique</li>
                                <li>Hydratez-vous régulièrement</li>
                            </ul>
                        </div>

                        <div class="destination-actions">
                            <button class="btn btn-primary" onclick="window.location.href='reservation_modal.php'">
                                Réserver un circuit
                            </button>
                            <button class="btn btn-outline" onclick="window.location.href='index.php#contact'">
                                Demander des infos
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2>Prêt à partir à l'aventure ?</h2>
            <p>Nos experts vous aident à créer le voyage parfait selon vos envies</p>
            <div class="cta-buttons">
                <a href="index.php#contact" class="btn btn-primary">Demander un devis</a>
                <a href="index.php#circuits" class="btn btn-outline">Voir nos circuits</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Maroc Découverte</h3>
                    <p>Votre partenaire de confiance pour découvrir les merveilles du Maroc</p>
                </div>
                <div class="footer-section">
                    <h4>Destinations</h4>
                    <ul>
                        <li><a href="#marrakech">Marrakech</a></li>
                        <li><a href="#fes">Fès</a></li>
                        <li><a href="#sahara">Sahara</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="index.php#circuits">Circuits organisés</a></li>
                        <li><a href="index.php#activites">Guides privés</a></li>
                        <li><a href="index.php#contact">Transport</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li>info@marocdecouvert.com</li>
                        <li>+212 5XX XX XX XX</li>
                        <li>Marrakech, Maroc</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Maroc Découverte. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    

    <script src="js/script.js"></script>
    <script src="js/destinations.js"></script>
</body>
</html>
