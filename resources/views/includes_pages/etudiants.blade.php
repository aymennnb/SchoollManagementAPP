@extends('layout')

@section('title', 'Étudiants Page')

@section('content')
<div class="custom-container">
    <h4 class="mt-3 mb-4">Ajouter un Étudiant</h4>
    <div class="row">
        <style>
        .custom-container {
            max-width: 90%; /* Adaptez ici la largeur souhaitée */
            margin: 0 auto;
        }
        </style>
        <div class=" custom-container col-md-8 offset-md-2">
            <form method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="cin" class="form-label">CIN :</label>
                    <input type="text" class="form-control" id="cin" name="cin" required>
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nom Complet :</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Photo :</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Genre :</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" required>
                        <label class="form-check-label" for="male">Homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female" required>
                        <label class="form-check-label" for="female">Femme</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Téléphone :</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
                </div>
                <div class="mb-3">
                    <label for="date_birth" class="form-label">Date de Naissance :</label>
                    <input type="date" class="form-control" id="date_birth" name="date_birth" required>
                </div>
                <div class="mb-3">
                    <label for="maitre_class" class="form-label">Affecter un Class :</label>
                    <select class="form-select" id="maitre_class" name="maitre_class" required>
                        <option value="" selected disabled>Choisir un Maître Class</option>
                        <option value="class1">Classe 1</option>
                        <option value="class2">Classe 2</option>
                        <option value="class3">Classe 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="parent" class="form-label">Affecter un parent :</label>
                    <select class="form-select" id="parent" name="parent" required>
                        <option value="" selected disabled>Choisir un Parent</option>
                        <option value="parent1">Parent 1</option>
                        <option value="parent2">Parent 2</option>
                        <option value="parent3">Parent 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
            </form>
        </div>
    </div>

    <h4>Liste des Étudiants</h4>
    <table class="mt-3 table table-striped">
        <thead>
            <tr>
                <th>Nom Complet</th>
                <th>Email</th>
                <th>Genre</th>
                <th>Class</th>
                <th>Parent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Test Nom</td>
                <td>test@example.com</td>
                <td>Homme</td>
                <td>Classe 1</td>
                <td>Parent 1</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm">Éditer</a>
                    <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                    <a href="#" class="btn btn-info btn-sm">Détails</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
