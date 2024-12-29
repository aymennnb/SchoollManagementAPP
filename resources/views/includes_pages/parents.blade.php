@extends("layout")

@section('title', 'Parents Page')

@section('content')
<style>
    .custom-container {
        max-width: 90%; /* Élargir la largeur de la page */
        margin: 0 auto;
    }
</style>

<div class="custom-container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Ajouter un Parent</h2>
            <form method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nom Complet :</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
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
                    <label for="address" class="form-label">Adresse :</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Liste des Parents</h2>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nom Complet</th>
                        <th>Email</th>
                        <th>Genre</th>
                        <th>Adresse</th>
                        <th>Étudiants</th>
                        <th>created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jean Dupont</td>
                        <td>jean.dupont@example.com</td>
                        <td>Homme</td>
                        <td>123 Rue Exemple</td>
                        <td>
                            <ul>
                                <li>Étudiant 1</li>
                                <li>Étudiant 2</li>
                            </ul>
                        </td>
                        <td>12/23/2023</td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Éditer</a>
                            <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                            <a href="#" class="btn btn-info btn-sm">Détails</a>
                        </td>
                    </tr>
                    <!-- Ajouter dynamiquement les parents ici -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
