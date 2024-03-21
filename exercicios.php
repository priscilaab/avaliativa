<?php
$artigos = array(
    array(
        'id_artigo' => 1,
        'titulo' => 'Introdução ao TensorFlow',
        'nome_autor' => 'João Silva',
        'corpo_artigo' => 'O TensorFlow é uma biblioteca de código aberto desenvolvida pela Google para facilitar a criação e treinamento de modelos de aprendizado de máquina. Neste artigo, vamos explorar os conceitos básicos do TensorFlow e criar um modelo simples para classificar imagens.'
    ),
    array(
        'id_artigo' => 2,
        'titulo' => 'TensorFlow vs PyTorch: Qual usar?',
        'nome_autor' => 'Maria Santos',
        'corpo_artigo' => 'TensorFlow e PyTorch são duas das bibliotecas mais populares para aprendizado de máquina. Neste artigo, vamos comparar essas duas bibliotecas em termos de facilidade de uso, desempenho e comunidade de suporte.'
    ),
    array(
        'id_artigo' => 3,
        'titulo' => 'Como usar o TensorFlow para reconhecimento de voz',
        'nome_autor' => 'Pedro Souza',
        'corpo_artigo' => 'Reconhecimento de voz é uma tarefa importante em muitas aplicações, como assistentes virtuais e carros autônomos. Neste artigo, vamos mostrar como usar o TensorFlow para criar um modelo de reconhecimento de voz com alta precisão.'
    ),
    array(
        'id_artigo' => 4,
        'titulo' => 'Usando TensorFlow para detecção de objetos em imagens',
        'nome_autor' => 'Ana Oliveira',
        'corpo_artigo' => 'Detecção de objetos em imagens é uma tarefa fundamental em muitas áreas, como vigilância e monitoramento. Neste artigo, vamos mostrar como usar o TensorFlow para criar um modelo de detecção de objetos com alta precisão.'
    )
);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Artigos</title>

    <!-- Adicionando Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra Lateral -->
            <div class="col-md-3 bg-light py-3">
                <h5>Comentários Recentes</h5>
                <ul class="list-unstyled">
                    <li>Comentário 1</li>
                    <li>Comentário 2</li>
                    <li>Comentário 3</li>
                </ul>
            </div>

            <!-- Listagem de Artigos -->
            <div class="col-md-9 py-3">
                <h2>Listagem de Artigos</h2>

                <!-- Com base no modelo abaixo, liste os artigos do array::  -->
                <?php foreach ($artigos as $v) { ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $v['titulo']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $v['nome_autor']; ?></h6>
                            <p class="card-text"><?= $v['corpo_artigo']; ?></p>
                            <a href="ler.php?id=1">Ler mais...</a>
                        </div>
                    </div>
                <?php } ?>

                <hr>


                <hr>
            </div>
        </div>
    </div>

    <!-- Adicionando JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<ul class="list-group">

    <tbody>
    <?php

$tipos = ["Administrador", "Moderador", "Membro"];

$usuarios = array(
    array(
        'id' => 1,
        'username' => 'robson123',
        'nome_completo' => 'Robson Carlos',
        'email' => 'user1@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 2,
        'username' => 'marcelocarlos',
        'nome_completo' => 'Marcelo Carlos Soares',
        'email' => 'user2@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 3,
        'username' => 'mariaapjunqueira',
        'nome_completo' => 'Maria Aparecida Pereira',
        'email' => 'user3@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 3
    ),
    array(
        'id' => 4,
        'username' => 'otavioneves',
        'nome_completo' => 'Otavio Neves Lara',
        'email' => 'user4@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 5,
        'username' => 'thierrycouto',
        'nome_completo' => 'Thierry Couto',
        'email' => 'user5@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 6,
        'username' => 'matheusbpereira',
        'nome_completo' => 'Matheus Barros Pereira',
        'email' => 'user6@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 7,
        'username' => 'julianocmiranda',
        'nome_completo' => 'Juliano Coelho Miranda',
        'email' => 'user7@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 8,
        'username' => 'rosaneborges',
        'nome_completo' => 'Rosane Borges',
        'email' => 'user8@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 9,
        'username' => 'paulocoelho',
        'nome_completo' => 'Paulo Coelho',
        'email' => 'user9@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 10,
        'username' => 'antoniomapa3',
        'nome_completo' => 'Antonio Mapa 3',
        'email' => 'user10@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    )
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Gamers</title>
    <!-- Link para o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
        }

        table {
            background-color: #2d2d2d;
            color: #fff;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;
            color: white;
        }

        th {
            background-color: #bf6a1f;
            color: #fff;
        }

        td {
            background-color: #4c4c4c;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-5">Tabela de Usuários</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Foto</th>
                    <th scope="col">ID Tipo</th>
                </tr>
            </thead>
            <tbody>
                <!-- Com base no modelo abaixo, exiba os usuários contidos
                no array.. -->
<?php foreach($usuarios as $v){ ?>
                <tr>
                    <td><?=$v['id'];?></td>
                    <td><?=$v['username'];?></td>
                    <td><?=$v['nome_completo'];?></td>
                    <td><?=$v['email'];?></td>
                    <td><img src="<?=$v['foto'];?>" alt="Foto do usuário username"></td>
                    <td><?=$tipos[$v['id_tipo']-1];?></td>
                </tr>
<?php }?>
            </tbody>
        </table>
    </div>
    <!-- Link para o JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php

/* 
    O array abaixo será listado no formato de tabela no corpo do
    documento HTML::
*/
$fornecedores = array(
    array(
        'id' => 1,
        'razao_social' => 'Empresa A',
        'cnpj' => '11.111.111/0001-01',
        'telefone' => '(11) 1111-1111',
        'cidade' => 'São Paulo'
    ),
    array(
        'id' => 2,
        'razao_social' => 'Empresa B',
        'cnpj' => '22.222.222/0001-02',
        'telefone' => '(22) 2222-2222',
        'cidade' => 'Rio de Janeiro'
    ),
    array(
        'id' => 3,
        'razao_social' => 'Empresa C',
        'cnpj' => '33.333.333/0001-03',
        'telefone' => '(33) 3333-3333',
        'cidade' => 'Belo Horizonte'
    ),
    array(
        'id' => 4,
        'razao_social' => 'Empresa D',
        'cnpj' => '44.444.444/0001-04',
        'telefone' => '(44) 4444-4444',
        'cidade' => 'Curitiba'
    ),
    array(
        'id' => 5,
        'razao_social' => 'Empresa E',
        'cnpj' => '55.555.555/0001-05',
        'telefone' => '(55) 5555-5555',
        'cidade' => 'Porto Alegre'
    ),
    array(
        'id' => 6,
        'razao_social' => 'Empresa F',
        'cnpj' => '66.666.666/0001-06',
        'telefone' => '(66) 6666-6666',
        'cidade' => 'Recife'
    ),
    array(
        'id' => 7,
        'razao_social' => 'Empresa G',
        'cnpj' => '77.777.777/0001-07',
        'telefone' => '(77) 7777-7777',
        'cidade' => 'Fortaleza'
    ),
    array(
        'id' => 8,
        'razao_social' => 'Empresa H',
        'cnpj' => '88.888.888/0001-08',
        'telefone' => '(88) 8888-8888',
        'cidade' => 'Salvador'
    ),
    array(
        'id' => 9,
        'razao_social' => 'Empresa I',
        'cnpj' => '99.999.999/0001-09',
        'telefone' => '(99) 9999-9999',
        'cidade' => 'Brasília'
    ),
    array(
        'id' => 10,
        'razao_social' => 'Empresa J',
        'cnpj' => '10.000.000/0001-10',
        'telefone' => '(10) 1010-1010',
        'cidade' => 'Belém'
    ),
    array(
        'id' => 11,
        'razao_social' => 'Empresa K',
        'cnpj' => '11.111.111/0001-11',
        'telefone' => '(11) 1111-1111',
        'cidade' => 'Belém'
    ),
    array(
        'id' => 12,
        'razao_social' => 'Empresa L',
        'cnpj' => '12.121.212/0001-12',
        'telefone' => '(12) 1212-1212',
        'cidade' => 'Florianópolis'
    ),
    array(
        'id' => 13,
        'razao_social' => 'Empresa M',
        'cnpj' => '13.131.313/0001-13',
        'telefone' => '(13) 1313-1313',
        'cidade' => 'Natal'
    ),
    array(
        'id' => 14,
        'razao_social' => 'Empresa N',
        'cnpj' => '14.141.414/0001-14',
        'telefone' => '(14) 1414-1414',
        'cidade' => 'Vitória'
    ),
    array(
        'id' => 15,
        'razao_social' => 'Empresa O',
        'cnpj' => '15.151.515/0001-15',
        'telefone' => '(15) 1515-1515',
        'cidade' => 'Cuiabá'
    )
);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Tabela de Fornecedores</title>
    <!-- Importação do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <style type="text/css">
        body {
            background-color: #292b2c;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Tabela de Fornecedores</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                </tr>
            </thead>
            <tbody>
                <!-- Com base no modelo abaixo, liste os dados do
                array do topo desse documento: -->
                <?php foreach($fornecedores as $v){ ?>
                <tr>
                    <td><?=$v['id'];?></td>
                    <td><?=$v['razao_social'];?></td>
                    <td><?=$v['cnpj'];?></td>
                    <td><?=$v['telefone'];?></td>
                    <td><?=$v['cidade'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <!-- Importação do jQuery e do Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>