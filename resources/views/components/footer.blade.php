<footer class="site-footer">

    <div class="container">

        <div class="footer-main">

            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    <strong>CDL</strong>
                    <span>CORSICA DIGITAL LAB</span>
                </a>

                <p>
                    Création web & solutions numériques<br>
                    pour les professionnels.
                </p>
            </div>


            <div class="footer-column">
                <p class="footer-title">NAVIGATION</p>

                <a href="{{ route('home') }}">Accueil</a>
                <a href="#">Services</a>
                <a href="#">Réalisations</a>
                <a href="#">À propos</a>
                <a href="#">Contact</a>
            </div>


            <div class="footer-column">
                <p class="footer-title">SERVICES</p>

                <a href="#">Sites vitrines</a>
                <a href="#">E-commerce</a>
                <a href="#">Développement sur mesure</a>
                <a href="#">Maintenance</a>
            </div>


            <div class="footer-column">
                <p class="footer-title">CONTACT</p>

                <a href="mailto:contact@corsicadigitallab.fr">
                    contact@corsicadigitallab.fr
                </a>

                <p>Corse · France</p>
            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} Corsica Digital Lab
            </p>

            <div>
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
            </div>

        </div>

    </div>

</footer>