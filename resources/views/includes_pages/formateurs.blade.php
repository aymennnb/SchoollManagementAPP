@extends('layout')

@section('title', 'Formateurs Page')

@section('content')
<div class="custom-container ">
    <h4 class="mt-3 mb-4">Ajouter un Formateur</h4>
    <div class="row">
        <style>
        .custom-container {
            max-width: 90%; /* Adaptez ici la largeur souhaitée */
            margin: 0 auto;
        }
        </style>
        <div class="col-md-8 offset-md-2">
            <form method="POST" class=" p-4">
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

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <h4>Liste des Formateurs</h4>
        <table class="mt-3 table table-striped">
            <thead class="">
                <tr>
                    <th>cin</th>
                    <th>Nom Complet</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Genre</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Date de Naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123456</td>
                    <td>Test Nom</td>
                    <td></td>
                    <td>test@example.com</td>
                    <td>Homme</td>
                    <td>123 Rue Exemple</td>
                    <td>+212 123456789</td>
                    <td>01-01-1990</td>
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
