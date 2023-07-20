<!-------------------------------------------------------------------------------------------------------------->
                    <section class="row">

                            <!-- <aside class="col-4 col-md-2 d-flex justify-content-center align-items-center">ASIDE</aside> -->
                        <div class="col-12">
                                <div class="row justify-content-around">
                                        <article class="service1 col-12 col-md-3 d-flex flex-column align-items-center" onclick="window.location.href = 'services.php#mecanique';">
                                            <h2>MECANIQUE</h2>
                                            <!--<img class="service" src="img/MECA.jpg"/> -->
                                        </article>
                                        <article class="service2 col-12 col-md-3 d-flex flex-column align-items-center"onclick="window.location.href = 'services.php#carrosserie';">
                                            <h2>CARROSSERIE</h2>
                                            <!--<img class="service" src="img/CARRO2.jpg"/>-->
                                        </article>
                                        <article class="service3 col-12 col-md-3 d-flex flex-column align-items-center" onclick="window.location.href = 'services.php#entretien';">
                                            <h2>ENTRETIEN</h2>
                                            <!--<img class="service" src="img/ENTRETIEN.jpg"/>-->
                                        </article>
                                        <article class="service4 col-12 col-md-3 d-flex flex-column align-items-center" onclick="window.location.href = 'occasions.php';">
                                            <h2>OCCASION</h2>
                                            <!--<img class="service" src="img/OCCASION.jpg"/>-->
                                        </article>
                                </div>
                            
                <!-------------------------------------------------------------------------------------------------------------->               
                                
                                <article class="comments row align-items-center justify-content-center">
                                    <div class="comments-title row align-items-center justify-content-center">
                                        <h4>TEMOIGNAGES DE NOS CLIENTS</h4>
                                    </div>
                                    <span class="slider-html">
                                        <span class="slider-body">
                                            <div class="slider-container">
                                                <div class="testiSlide">
                                                    <div>
                                                        <figure class="testimonial">
                                                        <blockquote>Un espace occasion très vaste, très propre, élégamment décoré. J'adore y flâner tant le Feng Shui de cet endroit me fait oublier tout le stress que peut engendrer le choix d'un véhicule d'occasion. Mon mari et moi sommes fans du garage Parrot : le garage Parrot, un garage au top!
                                                            <div class="btn"></div>
                                                        </blockquote>
                                                        <img src="img/testimonies/brigitte.jpg" alt="Brigitte" />
                                                        <div class="peopl">
                                                            <h3>Brigitte T.</h3>
                                                            <p class="indentity">Décoratrice d'intérieur</p>
                                                        </div>
                                                        </figure>
                                                    </div>
                                                
                                                    <div>
                                                        <figure class="testimonial">
                                                        <blockquote>Un large choix de voitures sportives, des prix plus bas que chez la concurrence, que veut le peuple? La garage Parrot c'est le futur!
                                                            <div class="btn"></div>
                                                        </blockquote>
                                                        <img src="img/testimonies/shaan.jpeg" alt="Shaan Paul" />
                                                        <div class="peopl">
                                                            <h3>Shaan Paul</h3>
                                                            <p class="indentity">MC</p>
                                                        </div>
                                                        </figure>
                                                    </div>
                                                
                                                    <div>
                                                        <figure class="testimonial">
                                                        <blockquote>J'ai trouvé une jolie petite berline pour ma fille à un prix très raisonnable pour un premier véhicule, c'était il y a 5 ans. Depuis, je fais l'entretien des voitures de toute l'entreprise familiale chez V. Parrot et je n'ai jamais été déçu. Je recommande chaudement!
                                                            <div class="btn"></div>
                                                        </blockquote>
                                                        <img src="img/testimonies/brian.jpg" alt="Brian" />
                                                        <div class="peopl">
                                                            <h3>Brian Dufour</h3>
                                                            <p class="indentity">Boulanger</p>
                                                        </div>
                                                        </figure>
                                                    </div>
                                                
                                                    <div>
                                                        <figure class="testimonial">
                                                        <blockquote>Outre l'aspect professionnel qui est irréprochable chez Vincent Parrot, la convivialité présente dans son atelier est un atout majeur que l'on ne retrouve pas ailleurs. Lorsque la réparation est un peu plus longue que prévue, on vous propose un café gourmand dans le salon client. Un pur bonheur, j'aurais presque envie que ma voiture tombe en panne!
                                                            <div class="btn"></div>
                                                        </blockquote>
                                                        <img src="img/testimonies/sagmeister.jpg" alt="Sagmeister" />
                                                        <div class="peopl">
                                                            <h3>Stefan Sagmeister</h3>
                                                            <p class="indentity">Doublure Mains</p>
                                                        </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </span>
                                    </span>
                                </article>
                                <div class="container mt-5">
                            <!-- Bouton pour ouvrir le formulaire modal témoignage -->
                                <div class="testimony-button">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Laissez votre témoignage</button>
                                </div>

                            <!-- Le formulaire modal témoignage -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Laissez votre témoignage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="nom">Nom :</label>
                                                        <input type="text" class="form-control" id="nom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prenom">Prénom :</label>
                                                        <input type="text" class="form-control" id="prenom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="temoignage">Témoignage :</label>
                                                        <textarea class="form-control" id="temoignage" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Note (de 1 à 5) :</label>
                                                        <input type="text" class="form-control" id="note">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="button" class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                        <!-- Scripts formulaire témoignage -->
                                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                                    

                        </div> 
                    </section>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                <script src='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
                <script  src="function.js"></script>

<!-------------------------------------------------------------------------------------------------------------->          