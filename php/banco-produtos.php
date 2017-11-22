<?php include("conecta.php"); ?>
<!DOCTYPE html>
<html>

<?php
function ListaProdutos($conexao) {
	$resultado = mysqli_query($conexao, "select * from produtos");
	while ($produto = mysqli_fetch_assoc($resultado)) { ?>
			  	<div class="col-sm-6 col-md-4 col-lg-3">
					<figure class="thumbnail box-produto">
						<img src='upload/<?php echo  $produto['capa']; ?>' > 
						<figcaption class="caption">
							<h3 class="titulo-h3-produtos"> <?php echo $produto['nome']; ?> </h3>
							<p>Descrição: <?php echo $produto['descricao'];  ?></p>
							<p>Preço: <?php echo $produto['preco'];  ?></p>
							<p>Categoria: <?php echo $produto['categoria'];  ?></p>
							<div align="center">
								<button type="button" class="btn btn-danger">
									<a id="alt-del" href="remover-produtos.php?id=<?php echo($produto['albumid']) ?>">X</a>
								</button>
								<button type="button" class="btn btn-primary">
									<a id="alt-del" href="alterar-produtos.php?id=<?php echo($produto['albumid']) ?>">Alterar</a>
								</button>
								<button type="button" class="btn btn-primary">
									<a id="alt-del" href="adiciona-fotos.php?id=<?php echo($produto['albumid']) ?>">Album</a>
								</button>
							</div>
						</figcaption>
					</figure>
				</div>			

<?php } } 

function DeletaProduto($conexao, $id )
{
	$del = "delete from detalhesproduto where albumid= {$id}";
	mysqli_query($conexao , $del);
	$query = "delete from produtos where albumid= {$id}";
	return mysqli_query($conexao , $query);

}

function AlteraProduto($conexao,$nome,$descricao,$preco,$categoria,$capa,$albumid)
{
	$query = "UPDATE produtos SET nome = '{$nome}', descricao = '{$descricao}', preco = {$preco}, categoria ='{$categoria}',  capa ='{$capa}'  where albumid = '{$albumid}'";
	return mysqli_query($conexao,$query);

}


function ListaLogin($conexao) {
	$users = mysqli_query($conexao, "select * from usuario");
	while ($tot = mysqli_fetch_assoc($users)) { ?>
			  	<div class="col-sm-6 col-md-4 col-lg-3">
					<figure class="thumbnail box-produto">
						<img src=" https://n6-img-fp.akamaized.net/icones-gratis/imagem-do-usuario-com-fundo-preto_318-34564.jpg?size=338&ext=jpg "  class="foto-produtos" >
						<figcaption class="caption">
							<h3 class="titulo-h3-produtos"> <?php echo $tot['usuario']; ?> </h3>
							<p>Senha: <?php
										 $string = $tot['senha'];
											$string = substr("$string", 0, 10);
											echo "$string";  ?></p>

							<p>Email:  <?php
										 $string = $tot['email'];
											$string = substr("$string", 0, 10);
											echo "$string...";  ?></p>
							<div align="center">
								<button type="button" class="btn btn-danger">
									<a id="alt-del" href="remover-login.php?id=<?php echo($tot['id'])?> ">X</a>
								</button>
								<button type="button" class="btn btn-primary">
									<a id="alt-del" href="alterar-login.php?id=<?php echo($tot['id'])?> "> Alterar</a>
								</button>
							</div>
						</figcaption>
					</figure>
				</div>			

<?php } } 

function DeletaUsuario($conexao, $id )
{
	$query = "delete from usuario where id= {$id}";
	return mysqli_query($conexao , $query);

}

function AlteraUsuario($conexao,$usuario,$senha,$email,$id)
{
	$query = "UPDATE usuario SET usuario = '{$usuario}', senha = '{$senha}', email ='{$email}'  where id = '{$id}'";
	return mysqli_query($conexao,$query);

}

function BuscaProduto($conexao , $id)
{
	$query = "select * from produtos where albumid = {$id}";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
 
function BuscaUsuario($conexao , $id)
{
	$query = "select * from usuario where id = {$id}";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
?> 
</html>
