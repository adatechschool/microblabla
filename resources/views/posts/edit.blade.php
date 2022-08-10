<h1>Créer un post</h1>

<!-- L'enregistrement est géré par la route posts.store -->
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

    @csrf

    <p>
        <label for="img_url">Lien de l'image à enregistrer</label>
        <input type="text" name="img_url"  id="img_url" placeholder="Lien vers l'image" >
    
        @error("img_url")
			<div>{{ $message }}</div>
		@enderror
    </p>

    <p>
        <label for="description">Contenu de votre publication</label>
        <input type="text" name="description"  id="description" placeholder="Le contenu de votre publication" >
    
        @error("description")
			<div>{{ $message }}</div>
		@enderror
    </p>

    <input type="submit" name="valider" value="Valider" >

</form>