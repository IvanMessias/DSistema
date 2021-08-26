
<!DOCTYPE html>
<html>
  <head>
      <title>Registar Unidade Sanitaria</title>

      <body style="background-color:powderblue;">

  </head>

  <body>

    <table align="center" border="1">

      <img src="img/Logo.png" id="logo" >

    
            <fieldset enable>
            <legend>Registar Unidade Sanitaria</legend>
        
            <form action="conexao.php" method="POST">

            <label>Designação: </label><input type="text" name="nome"></br></p>
            <label>Localização</label></br>
              <label>Provincia:</label>
              <select name="provincia">
              <option value="Mprovincia">Maputo provincia</option>
              <option value="Maputo">Maputo Cidade</option>
              <option value="Gaza">Gaza</option>
              <option value="Inhambane">Inhambane</option>
              </select>
            <label>Codico da Unidade Sanitaria:</label><input type="text" name="codicous"></br></p>
            <label>Avenida:   </label><input type="text" name="avenida"></br></p>
           
           
            <label>Bairro: </label> <input type="text" name="bairro">
           
           
            <label>Rua, Nr da rua: </label><input type="text" name="rua"></br></p>
           
          

            <label>Telefone (+258): </label><input type="text" name="telefone">
            <label>Telefone Alternativo: </label><input type="text" name="telefone1"></br></p>


            <label>Email:</label><input type="email" name="email"</input>
            <label>Website: </label><input type="text" name="website"></br></p>
            
            <input type="submit" name="btn cadastrar" value="Registar">

   </form>

  </body>

</html>