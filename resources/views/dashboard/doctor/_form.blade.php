@csrf
<div class="jumbotron">
   
    <div class="form-group mb-3">
        <label class="form-label" for="rut">RUT*</label>
        <input type="text" class="form-control" name="rut" id="rut">
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="user_name">Nombres*</label>
        <input type="text" class="form-control" name="user_name" id="user_name" >
    </div>

    
    <div class="form-group mb-3">
        <label class="form-label" for="user_last_name">Apellidos*</label>
        <input type="text" class="form-control" name="user_last_name" id="user_last_name" >
    </div>

    
    <div class="form-group mb-3">
        <label class="form-label" for="user_email">Email</label>
        <input type="text" class="form-control" name="user_email" id="user_email" >
    </div>
    
    <div class="form-group mb-3">
        <label class="form-label" for="direccion">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion">
    </div>

    

    <div class="mb-3">
        <label for="especialidad">Especialidad</label>
        <select class="custom-select" name="especialidad" id ="especialidad" aria-label="Default select example">
            <option selected >cardiologo</option>
            <option selected >neurologo</option>
            <option selected >anestesiologo</option>

        </select>
    </div> 

    <div class="row center">
        <div class="btn-group">
            <button type="submit" class="btn btn-outline-info btn-sn">Continuar</button>
        </div>

    </div>
</div>
