
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Projetos</h1>
        <!-- <div class="row">    
            <fieldset >
                <form method="">
                    Nome:      <input type="text" name="Nome"> <br>
                    Endereco:  <input type="text" name="preco"> <br>
                    Descricao: <input type="text" name="descricao"> <br>
                    Data:      <input type="date" name="data"> <br>
                               <input type="submit" value="Enviar">           
                
                </form>
            </fieldset>
            <br>
        </div> -->
        <br>
        <div class="row">
            <table class="table"> 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Antonio</td>
                        <td>2020-01-01</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</body>
</html>
<script>
    window.onload = function(){
        const URL_TO_FETCH = 'http://127.0.0.1/mesa-projetinhos/matrix/cliente.php'; fetch(URL_TO_FETCH, { 
            method: 'post' // opcional
            })
            .then(function(response) { 
            response.text()
            .then(function(result){ 
                console.log(result); 
            })
            })
            .catch(function(err) { console.error(err); });
          
    }
</script>
