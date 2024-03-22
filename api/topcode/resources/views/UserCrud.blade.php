<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD USERS</title>
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
$(document).ready(function() {
    var currentPage = 1;
    var usersPerPage = 5;
    var totalUsers = 0;

    // Función para obtener la lista de usuarios y mostrarla en la tabla
    function getUsers() {
        $.ajax({
            url: 'https://rico.terrabyteco.com/api/users', // Ruta para obtener la lista de usuarios desde tu controlador
            type: 'GET',
            success: function(response) {
    totalUsers = response.length;
    var startIndex = (currentPage - 1) * usersPerPage;
    var endIndex = startIndex + usersPerPage;
    var usersToShow = response.slice(startIndex, endIndex);
                
    // Limpiar la tabla antes de actualizarla
    $('#userTableBody').empty();
                
    // Iterar sobre la lista de usuarios y agregar cada uno a la tabla
    $.each(usersToShow, function(index, user) {
        var fullName = user.name + ' ' + user.surname; // Concatenar nombre y apellido
        var row = '<tr>' +
            '<td>' + fullName + '</td>' +
            '<td>' + user.email + '</td>' +
            '<td>' + user.phone + '</td>' +
            '<td>' + user.image + '</td>' +
            '<td>' +
            '<a href="#editEmployeeModal" class="edit" data-toggle="modal" data-id="' + user.id + '"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>' +
            '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="' + user.id + '"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>' +
            '</td>' +
            '</tr>';
        $('#userTableBody').append(row);
    });

    // Actualizar la paginación después de obtener los usuarios
    updatePagination();
},

            error: function(error) {
                console.log(error);
            }
        });
    }
    
    // Función para actualizar la paginación
    function updatePagination() {
        var totalPages = Math.ceil(totalUsers / usersPerPage);
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
        } else if (page === 'next' && currentPage < Math.ceil(totalUsers / usersPerPage)) {
            currentPage++;
        } else if (typeof page === 'number') {
            currentPage = page;
        }
        
        getUsers();
    });
    
    // Llamar a la función getUsers al cargar la página para mostrar la lista de usuarios
    getUsers();

    // Manejar evento submit del formulario de agregar empleado
    $('#addEmployeeForm').submit(function(e) {
        e.preventDefault(); // Evitar el envío del formulario por defecto

        // Obtener los valores de los campos del formulario
        var name = $('#name').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var password = $('#password').val(); // Obtener valor del campo de contraseña
        var phone = $('#phone').val();
        var image = $('#image').val();

        // Realizar la solicitud AJAX para crear un nuevo usuario
        $.ajax({
            url: 'https://rico.terrabyteco.com/api/create',
            type: 'POST',
            data: {
                name: name,
                surname: surname,
                email: email,
                password: password, // Incluir contraseña en los datos enviados al backend
                phone: phone,
                image: image
            },
            success: function(response) {
                // Mostrar mensaje de éxito
                alert('Employee added successfully!');
                // Cerrar el modal
                $('#addEmployeeModal').modal('hide');
                // Volver a cargar la lista de usuarios
                getUsers();
            },
            error: function(error) {
                // Mostrar mensaje de error
                alert('Error adding employee: ' + error.responseJSON.message);
            }
        });
    });
    // Manejar evento de apertura del modal de eliminación
$('#deleteEmployeeModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botón que activó el modal
    var userId = button.data('id'); // Extraer el ID del usuario de los datos del botón
    $('#deleteEmployeeForm').data('userId', userId); // Guardar el ID del usuario en el formulario
});

// Manejar evento submit del formulario de eliminación
$('#deleteEmployeeForm').submit(function(e) {
    e.preventDefault(); // Evitar el envío del formulario por defecto

    var userId = $(this).data('userId'); // Obtener el ID del usuario a eliminar

    // Realizar la solicitud AJAX para eliminar el usuario
    $.ajax({
        url: 'https://rico.terrabyteco.com/api/delete/' + userId,
        type: 'DELETE',
        success: function(response) {
            // Mostrar mensaje de éxito
            alert('Employee deleted successfully!');
            // Cerrar el modal
            $('#deleteEmployeeModal').modal('hide');
            // Volver a cargar la lista de usuarios
            getUsers();
        },
        error: function(error) {
            // Mostrar mensaje de error
            alert('Error deleting employee: ' + error.responseJSON.message);
        }
    });
});
  // Manejar evento de apertura del modal de edición
  $('#editEmployeeModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Botón que activó el modal
        var userId = button.data('id'); // Extraer el ID del usuario de los datos del botón
        
        // Realizar una solicitud AJAX para obtener la información del usuario
        $.ajax({
            url: 'https://rico.terrabyteco.com/api/users/' + userId, // Reemplaza esta URL con la correcta para obtener la información del usuario
            type: 'GET',
            success: function(response) {
                // Llenar los campos del formulario con la información del usuario
                $('#editUserId').val(response.id);
                $('#editName').val(response.name);
                $('#editSurname').val(response.surname);
                $('#editPhone').val(response.phone);
                $('#editEmail').val(response.email);
                $('#editImage').val(response.image);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    // Manejar evento submit del formulario de edición
    $('#editEmployeeForm').submit(function(e) {
        e.preventDefault(); // Evitar el envío del formulario por defecto

        // Obtener los valores de los campos del formulario de edición
        var id = $('#editUserId').val(); // Obtener el ID del usuario a editar
        var name = $('#editName').val();
        var surname = $('#editSurname').val();
        var phone = $('#editPhone').val();
        var email = $('#editEmail').val();
        var image = $('#editImage').val();

        // Realizar la solicitud AJAX para actualizar el usuario
        $.ajax({
            url: 'https://rico.terrabyteco.com/api/update/' + id,
            type: 'POST', // Utilizar POST para actualizar datos
            data: {
                name: name,
                surname: surname,
                phone: phone,
                email: email,
                image: image
                // Incluir más campos según sea necesario
            },
            success: function(response) {
                // Mostrar mensaje de éxito
                alert('Employee updated successfully!');
                // Cerrar el modal
                $('#editEmployeeModal').modal('hide');
                // Volver a cargar la lista de usuarios
                getUsers();
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Error desconocido al actualizar el empleado.";
                alert('Error updating employee: ' + errorMessage);
            }
        });
    });

    // Función para leer la imagen seleccionada y mostrarla en la vista previa
function readURL(input, previewElement) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(previewElement).attr('src', e.target.result).show();
        }

        reader.readAsDataURL(input.files[0]); // Lee la imagen como una URL base64
    } else {
        $(previewElement).hide();
    }
}

// Manejar cambio en el campo de imagen de agregar empleado
$('#imageInput').change(function() {
    readURL(this, '#imagePreview');
});

// Manejar cambio en el campo de imagen de edición de empleado
$('#editImageInput').change(function() {
    readURL(this, '#editImagePreview');
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
						<h2>Manage <b>User</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>image</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="userTableBody">
                <tr>
    <td>...</td>
    <td>...</td>
    <td>...</td>
    <td><img src="#" alt="Employee Image" class="employee-image" style="max-width: 100px;"></td> <!-- Agrega esta columna para la imagen -->
    <td>...</td>
</tr></tbody>

			</table>
			<div class="clearfix">
<div class="hint-text" id="pagination-info"></div>
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
<!-- Modal de agregar empleado -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addEmployeeForm">
                <div class="modal-header">						
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" id="surname" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" id="imageInput">
    <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100px; max-height: 100px; margin-top: 10px; display: none;">
</div>			
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" id="addEmployeeBtn">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Editar Empleado -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editEmployeeForm">
                <div class="modal-header">                        
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body"> 
                    <div class="form-group">
                        <input type="hidden" id="editUserId">
                    </div>                   
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="editName" required>
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" id="editSurname" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="editPhone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="editEmail" required>
                    </div>
                    <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" id="editImageInput">
    <img id="editImagePreview" src="#" alt="Image Preview" style="max-width: 100px; max-height: 100px; margin-top: 10px; display: none;">
</div>
                    <!-- Agregar más campos según sea necesario -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info" id="editEmployeeBtn">Save Changes</button>
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