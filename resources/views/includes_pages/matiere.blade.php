@extends('layout')

@section('title', 'Matière Page')

@section('content')
<style>
    .custom-container {
        max-width: 90%; /* Ajustez la largeur ici */
        margin: 0 auto;
    }
</style>

<div class="custom-container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Ajouter une Matière</h4>
            <form method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule de la Matière :</label>
                    <input type="text" class="form-control" id="matricule" name="matricule" required>
                </div>
                <div class="mb-3">
                    <label for="nom_matiere" class="form-label">Nom de la Matière :</label>
                    <input type="text" class="form-control" id="nom_matiere" name="nom_matiere" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description :</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Entrez une description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formateur" class="form-label">Affecter un Formateur :</label>
                    <select class="form-select" id="formateur" name="formateur" required>
                        <option value="" disabled selected>Choisissez un formateur</option>
                        <option value="formateur1">Formateur 1</option>
                        <option value="formateur2">Formateur 2</option>
                        <option value="formateur3">Formateur 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <div class="mt-5 custom-container">
        <h4>Liste des Matières</h4>
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
                    <td>MAT001</td>
                    <td>Mathématiques</td>
                    <td>Formateur 1</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm">Éditer</a>
                        <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                        <a href="#" class="btn btn-info btn-sm">Détails</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
