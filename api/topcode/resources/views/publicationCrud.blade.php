<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD Publication</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
    var frameworks = {};
    var languages = {};
    var currentPage = 1;
    var publicationsPerPage = 5;

    loadFrameworks();
    loadLanguages();
    loadPublications();

    function loadFrameworks() {
        $.ajax({
            url: '/api/frameworks',
            type: 'GET',
            success: function(data) {
                data.forEach(function(framework) {
                    frameworks[framework.id] = framework.name;
                });
            }
        });
    }

    function loadLanguages() {
        $.ajax({
            url: '/api/languages',
            type: 'GET',
            success: function(data) {
                data.forEach(function(language) {
                    languages[language.id] = language.type;
                });
            }
        });
    }

    function loadPublications() {
        $.ajax({
            url: '/api/publications',
            type: 'GET',
            success: function(data) {
                totalPublications = data.length; // Actualizar totalPublications con la cantidad total de publicaciones
                var startIndex = (currentPage - 1) * publicationsPerPage;
                var endIndex = startIndex + publicationsPerPage;
                var publicationsToShow = data.slice(startIndex, endIndex);

                $('#publicationTable tbody').empty();

                publicationsToShow.forEach(function(publication) {
                    var languageType = languages[publication.language_id];

                    var frameworkType = frameworks[publication.framework_id];

                    $('#publicationTable tbody').append(`
                        <tr>
                            <td>${publication.id}</td>
                            <td>${publication.publication}</td>
                            <td>${publication.visibility}</td>
                            <td>${languageType}</td> <!-- Reemplazar language_id con el campo name -->
                            <td>${frameworkType}</td> <!-- Reemplazar framework_id con el campo type -->
                            <td>${publication.vote_range}</td>
                            <td>${publication.created}</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal" data-id="${publication.id}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="${publication.id}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    `);
                });

                updatePagination(totalPublications); // Pasar totalPublications a la función updatePagination
            }
        });
    }

    function updatePagination(totalPublications) {
        var totalPages = Math.ceil(totalPublications / publicationsPerPage);
        var paginationHtml = '';

        paginationHtml += '<li class="page-item ' + (currentPage == 1 ? 'disabled' : '') + '"><a class="page-link" href="#" data-page="prev">Previous</a></li>';

        for (var i = 1; i <= totalPages; i++) {
            paginationHtml += '<li class="page-item ' + (i == currentPage ? 'active' : '') + '"><a class="page-link" href="#" data-page="' + i + '">' + i + '</a></li>';
        }

        paginationHtml += '<li class="page-item ' + (currentPage == totalPages ? 'disabled' : '') + '"><a class="page-link" href="#" data-page="next">Next</a></li>';

        $('.pagination').html(paginationHtml);
    }

    // Manejar clics en la paginación
    $('.pagination').on('click', 'a.page-link', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        
        if (page === 'prev' && currentPage > 1) {
            currentPage--;
        } else if (page === 'next' && currentPage < Math.ceil(totalPublications / publicationsPerPage)) {
            currentPage++;
        } else if (typeof page === 'number') {
            currentPage = page;
        }

        loadPublications();
    });

    $('#deleteEmployeeModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var publicationId = button.data('id');
        $('#deleteEmployeeForm').data('publicationId', publicationId);
    });

    $('#deleteEmployeeForm').submit(function(e) {
        e.preventDefault();

        var publicationId = $(this).data('publicationId');

        $.ajax({
            url: 'http://localhost:8000/api/publications/delete/' + publicationId,
            type: 'DELETE',
            success: function(response) {
                alert('Publication deleted successfully!');
                $('#deleteEmployeeModal').modal('hide');
                loadPublications();
            },
            error: function(error) {
                alert('Error deleting publication: ' + error.responseJSON.message);
            }
        });
    });

    $('#addPublicationModal').on('shown.bs.modal', function () {
        // Cargar opciones para Language
        $.ajax({
            url: '/api/languages', // Ruta en tu backend para obtener la lista de lenguajes
            type: 'GET',
            success: function(data) {
                var languageSelect = $('[name="language"]');
                languageSelect.empty(); // Limpiar opciones existentes
                // Agregar opciones para cada lenguaje
                data.forEach(function(language) {
                    languageSelect.append('<option value="' + language.id + '">' + language.type + '</option>');
                });
            }
        });

        // Cargar opciones para Framework
        $.ajax({
            url: '/api/frameworks', // Ruta en tu backend para obtener la lista de frameworks
            type: 'GET',
            success: function(data) {
                var frameworkSelect = $('[name="framework"]');
                frameworkSelect.empty(); // Limpiar opciones existentes
                // Agregar opciones para cada framework
                data.forEach(function(framework) {
                    frameworkSelect.append('<option value="' + framework.id + '">' + framework.name + '</option>');
                });
            }
        });
    });

    // Enviar formulario al hacer clic en el botón "Add"
    $('#addPublicationForm').submit(function(e) {
        e.preventDefault(); // Prevenir envío de formulario por defecto
        // Obtener datos del formulario
        var formData = $(this).serialize();
        // Enviar datos del formulario al backend
        $.ajax({
            url: 'http://localhost:8000/api/publications/create', // Ruta en tu backend para crear una nueva publicación
            type: 'POST',
            data: formData,
            success: function(response) {
                // Manejar la respuesta del backend (p. ej., mostrar un mensaje de éxito)
                console.log(response);
                // Cerrar el modal después de agregar la publicación
                $('#addPublicationModal').modal('hide');
            },
            error: function(error) {
                // Manejar errores (p. ej., mostrar un mensaje de error)
                console.error(error);
            }
        });
    });

});
</script>




</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Publication</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addPublicationModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
					</div>
				</div>
			</div>
			<table id="publicationTable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Publication</th>
            <th>Visibily</th>
            <th>Language</th>
            <th>Framework</th>
            <th>Vote</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí se agregarán las filas de la tabla dinámicamente -->
    </tbody>
</table>

			<div class="clearfix">
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addPublicationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addPublicationForm">
                <div class="modal-header">						
                    <h4 class="modal-title">Add Publication</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Publication</label>
                        <input type="text" class="form-control" name="publication" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="form-group">
                        <label>Visibily (1 for Yes, 0 for No)</label>
                        <input type="number" class="form-control" name="visibily" min="0" max="1" step="1" required>
                    </div>
                    <div class="form-group">
                        <label>Language</label>
                        <select class="form-control" name="language" id="languageSelect" required>
                            <!-- Options for languages will be dynamically loaded here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Framework</label>
                        <select class="form-control" name="framework" id="frameworkSelect" required>
                            <!-- Options for frameworks will be dynamically loaded here -->
                        </select>
                    </div>					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteEmployeeForm">
                <div class="modal-header">                        
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                    
                    <p>Are you sure you want to delete this record?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" id="deleteEmployeeBtn">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>