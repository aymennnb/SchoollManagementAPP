@extends("layout")

@section('title', 'Classes Page')

@section('content')
<style>
    .custom-container {
        max-width: 90%; /* Permet d'élargir la largeur de la page */
        margin: 0 auto;
    }
</style>
<div class="custom-container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Ajouter une Classe</h2>
            <form method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="matricule_classe" class="form-label">Matricule de la Classe :</label>
                    <input type="text" class="form-control" id="matricule_classe" name="matricule_classe" required>
                </div>
                <div class="mb-3">
                    <label for="nom_classe" class="form-label">Nom de la Classe :</label>
                    <input type="text" class="form-control" id="nom_classe" name="nom_classe"  required>
                </div>
                <div class="mb-3">
                    <label for="formateur" class="form-label">Affecter un Formateur :</label>
                    <select id="formateur" name="formateur" class="form-select" required>
                        <option value="" selected disabled>Choisir un formateur</option>
                        <option value="1">Formateur 1</option>
                        <option value="2">Formateur 2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Liste des Classes</h2>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Formateur</th>
                        <th>created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CL001</td>
                        <td>Classe 1</td>
                        <td>Formateur 1</td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Éditer</a>
                            <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
