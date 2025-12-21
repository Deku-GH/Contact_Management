<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <section>
        <div class="container py-5">
            <h3 class="text-center mb-4">Liste des contacts</h3>

            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dupont</td>
                        <td>Jean</td>
                        <td>jean.dupont@email.com</td>
                        <td>+33 6 12 34 56 78</td>
                        <td>Paris, France</td>
                    </tr>
                    <tr>
                        <td>Martin</td>
                        <td>Sara</td>
                        <td>sara.martin@email.com</td>
                        <td>+33 7 98 76 54 32</td>
                        <td>Lyon, France</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
               ajoute contact
            </button>
        </div>

        <!-- the modal of ajout the contact -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method ="post"   action ="../function/contactQueries.php">

                            <div  class=" col-12 mb-3"> 
                                <label for="exampleInputEmail1" class="fs-4  form-label">full name :</label>
                                <input type="name" placeholder="full name" class="form-control" id="fullname"
                                    name="full_name">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="fs-4 form-label">last name :</label>
                                <input type="name" placeholder="lastName" class="form-control" id="lastName"
                                    name="last_name">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="fs-4  form-label">Email:</label>
                                <input type="email" placeholder="email" class="form-control" id="email" name="email">

                            </div>
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="fs-4  form-label">telephone:</label>
                                <input type="numbre" placeholder="telephone" class="form-control" id="telephone" name="telephone">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class=" fs-4 form-label">address:</address></label>
                                <input type="text" placeholder="Addresse" class="form-control" id="Addresse" name="Addresse"></div>

                            <div class="d-flex justify-content-between text-light  mb-3"></div>
                            <button type="submit" class="btn btn-primary w-100" name="Submit">add</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>

</body>

</html>