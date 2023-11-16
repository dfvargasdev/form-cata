<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="./dist/css/style.css">
    <script src="./dist/js/form-handler.js"></script>
</head>
<body>
<div class="row">

  <?php if (!empty($_SESSION['message'])): ?>
      <div class="<?php echo strpos($_SESSION['message'], 'Error') !== false ? 'message-error' : 'message-success' ?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
  <?php endif; ?>


    <!-- Div de carga oculto -->
    <div id="loading" style="display:none;">
        <img src="dist/img/loading.gif" alt="Cargando..." />
    </div>

    <form action="submitForm.php" method="post">
        <fieldset>

            <div class="category-radio">
                <input type="radio" id="material" name="category" value="caterynjor@gmail.com" class="category-radio-input">
                <label for="material" class="category-radio-label">VALORIZACIÓN DE MATERIALES</label>
            </div>
            <div class="category-radio">
                <input type="radio" id="tratamiento" name="category" value="diegovargasneiva@gmail.com" class="category-radio-input">
                <label for="tratamiento" class="category-radio-label">TRATAMIENTOS ESPECIALES</label>
            </div>
            <div class="category-radio">
                <input type="radio" id="comercial" name="category" value="cortega@ciudadlimpia.com.co" class="category-radio-input">
                <label for="comercial" class="category-radio-label">COMERCIAL</label>
            </div>


            <input type="hidden" id="emailDestino" name="emailDestino">

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="user_name" required>

            <label for="email">Email:</label>
            <input type="email" id="mail" name="user_email" required>

            <label>Teléfono</label>
            <input type="text" id="cel" name="user_cel" required>

        </fieldset>

        <fieldset>

            <label for="bio">Mensaje:</label>
            <textarea id="bio" name="user_bio"></textarea>

            <label for="job">Departamento</label>
            <select id="job" name="user_job">
                <optgroup label="Huila">
                    <option value="frontend_developer">Neiva</option>
                    <option value="php_developer">Rivera</option>
                    <option value="python_developer">Palermo</option>
                </optgroup>
                <optgroup label="Valle">
                    <option value="android_developer">Cali</option>
                    <option value="ios_developer">Cali</option>
                </optgroup>
                <optgroup label="Cundimanarca">
                    <option value="business_owner">Bogotá</option>
                </optgroup>
            </select>

        </fieldset>

        <button type="submit" id="submitBtn" disabled>Enviar</button>
    </form>
</div>
</body>
</html>
