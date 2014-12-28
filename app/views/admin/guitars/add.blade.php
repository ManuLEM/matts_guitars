@section('content')
    <section id="content">
        <form action="{{ route('postNewGuitar') }}" method="post" enctype="multipart/form-data">
            <p>Fiche crée le </p>
            <input type="submit">
            <section class="form_part">
                <h1>Titre de la fiche guitare</h1>
                <section class="info fa fa-info-circle">
                    <p>Indiquez le titre pour cette page guitare. De préférence la référence, le modèle de la guitare.</p>
                    <p>Ce titre sera utilisé dans l'identification, l'organisation de produits et la recherche par les utilisateurs du site.</p>
                </section>
                <input type="text" name="title">
            </section>
            <section class="form_part">
                <h1>Prix</h1>
                <input type="number" min="0" step="0.01" name="price">
            </section>
            <section class="form_part">
                <h1>Images</h1>
                <section class="info fa fa-info-circle">
                    <p>Noubliez pas d'opptimiser les dimensions et le poids des images avant l'importation (< 1Mo). Formats acceptés : .jpg, .png.</p>
                    <p>Importez une vidéo de présentation de la guitare (< 10Mo). Formats acceptés : .mov, .avi, .mp4.</p>
                </section>
                <input type="file" name="guitar_images[]" multiple>
                <input type="file" name="guitar_video">
            </section>
            <section class="form_part">
                <h1>A propos de cette guitare</h1>
                <section class="info fa fa-info-circle">
                    <p>Paragraphe de description de la guitare. Décrivez le modèle de guitare dont il s'agit, ainsi que des détails relatifs à cet exemplaire en particulier. L'utilisation de mots-clés peut aider au référencement naturel de la page.</p>
                </section>
                <textarea name="about" id="about" cols="50" rows="10"></textarea>
            </section>
            <section class="form_part">
                <h1>Caractéristiques de la guitare</h1>
                <section class="info fa fa-info-circle">
                    <p>Indiquez les caractéristiques techniques de la guitare telles que les pièces et leur date de fabrication/mise en circulation.</p>
                    <p>Utilisez des mots-clés pour rester concis et aider le référencement naturel de la page.</p>
                </section>
                <input type="text" name="caracteristics">
            </section>
            <section class="form_part">
                <h1>Informations additionnelles</h1>
                <label for="previous_owner">Ancien propriétaire</label>
                <input type="text" id="previous_owner" name="previous_owner" placeholder="Prénom et nom de l'ancien propriétaire">
                <label for="previous_owner_picture">Photo</label>
                <input type="file" name="previous_owner_picture" id="previous_owner_picture">

                <label for="year_production">Date de fabrication</label>
                <input type="text" id="year_production" name="year_production" placeholder="Année de fabrication">
                <label for="year_release">Date de commercialisation</label>
                <input type="text" id="year_release" name="year_release" placeholder="Année de commercialisation">

                <label for="guitar_type">Type de guitare</label>
                <input type="radio" name="guitar_type" value="Vintage" id="vintage"> <label for="vintage">Vintage</label>
                <input type="radio" name="guitar_type" value="Custom Shop" id="custom_shop"> <label for="custom_shop">Custom Shop</label>
                <input type="radio" name="guitar_type" value="Modern" id="modern"> <label for="modern">Modern</label>

                <label for="guitar_state">État de la guitare</label>
                <input type="radio" name="guitar_state" value="À rénover" id="a_renover"> <label for="a_renover">À rénover</label>
                <input type="radio" name="guitar_state" value="Endommagée" id="endommagee"> <label for="endommagee">Endommagée</label>
                <input type="radio" name="guitar_state" value="Bon état" id="bon_etat"> <label for="bon_etat">Bon état</label>
                <input type="radio" name="guitar_state" value="Excellent état" id="excellent_etat"> <label for="excellent_etat">Excellent état</label>
                <input type="radio" name="guitar_state" value="Neuve" id="neuve"> <label for="neuve">Neuve</label>
            </section>
        </form>
    </section>
@stop