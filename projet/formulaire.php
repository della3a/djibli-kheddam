<!-- ;==========================================
     ; Title:  Djibli Kheddam project
     ; Author: Manel Kheffache, Anais Tinhinane Amara, Kenza Benbouabdellah & Bilal Si Said 
     ; Date:   1 Jul 2020
     ;========================================== -->
     
<div class="form">
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Nom<sup>*</sup></label>
                        <input type="text" placeholder="Votre nom" class="input" required></li>
                        <li class="listes"><label class="textg">Prénom<sup>*</sup></label>
                        <input type="text" placeholder="Votre prénom" class="input" required></li>
                    </ul></div>
                    <div>
                        <label class="textg adresse">Date de naissance</label>
                        <input type="date" class="date">
                        <label class="textg gen">Genre</label>
                        <input type="radio" name="genre" class="puce"><label class="textg">Femme</label>
                        <input type="radio" name="genre" class="puce"><label class="textg">Homme</label>
                    </div> 
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Métier<sup>*</sup></label>
                        <select class="wila" required>
                            <option value="1">Carreleur</option>
                            <option value="2">Chauffagiste</option>
                            <option value="3">Electricien</option>
                            <option value="4">Ferronier</option>
                            <option value="5">Jardinier</option>
                            <option value="6">Maçon</option>
                            <option value="7">Peintre</option>
                            <option value="8">Plombier</option>
                            <option value="9">Serrurier</option>
                            <option value="10">Vitrier</option>
                        </select></li>
                        <li class="listes"><label class="textg">Années d'éxpérience<sup>*</sup></label>
                        <input type="text" placeholder="années d'éxpérience" class="input" required></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Email<sup>*</sup></label>
                        <input type="text" placeholder="artisan@gmail.com" class="input" required></li>
                        <li class="listes"><label class="textg">N° de téléphone<sup></sup></label>
                        <input type="text" placeholder="N° de téléphone visible aux clients" class="input"></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Wilaya</label>
                        <?php 
                            include_once("wilaya.php");
                        ?></li>
                        <li class="listes"><label class="textg">Code postal</label>
                        <input type="text" placeholder="15000" class="input"></li>
                    </ul></div>
                    <div>
                        <label class="textg adresse">Adresse</label>
                        <input type="text" placeholder="Adresse" class="input ad">
                    </div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Mot de passe<sup>*</sup></label>
                        <input type="password" placeholder="8 caractères minimum" class="input" required></li>
                        <li class="listes"><label class="textg">Confirmation<sup>*</sup></label>
                        <input type="password" placeholder="Confirmer" class="input" required></li>
                    </ul></div>
                </div>