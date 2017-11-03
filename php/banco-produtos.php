<?php include("conecta.php"); ?>
<!DOCTYPE html>
<html>

<?php
function ListaProdutos($conexao) {
	$resultado = mysqli_query($conexao, "select * from produtos");
	while ($produto = mysqli_fetch_assoc($resultado)) { ?>
			  	<div class="col-sm-6 col-md-4 col-lg-3">
					<figure class="thumbnail box-produto">
						<img src=" <?php echo $produto['capa']; ?>"  class="foto-produtos" alt="Carro preto">
						<figcaption class="caption">
							<h3 class="titulo-h3-produtos"> <?php echo $produto['nome']; ?> </h3>
							<p>Descrição: <?php echo $produto['descricao'];  ?></p>
							<p>Preço: <?php echo $produto['preco'];  ?></p>
							<p>Categoria: <?php echo $produto['categoria'];  ?></p>
							<div align="center">
								<button type="button" class="btn btn-danger">
									<a id="alt-del" href="remover-produtos.php?id=<?php echo($produto['albumid'])?> ">Remover</a>
								</button>
								<button type="button" class="btn btn-primary">
									<a id="alt-del" href="alterar-produtos.php?id=<?php echo($produto['albumid'])?> "> Alterar</a>
								</button>
							</div>
						</figcaption>
					</figure>
				</div>			

<?php } } 

function DeletaProduto($conexao, $id )
{
	$query = "delete from produtos where albumid= {$id}";
	return mysqli_query($conexao , $query);

}

function AlteraProduto($conexao,$nome,$descricao,$capa,$preco,$categoria,$albumid)
{
	$query = "UPDATE produtos SET nome = '{$nome}', descricao = '{$descricao}', capa ='{$capa}', preco = {$preco}, categoria ='{$categoria}'  where albumid = '{$albumid}'";
	return mysqli_query($conexao,$query);

}

function BuscaProduto($conexao , $id)
{
	$query = "select * from produtos where albumid = {$id}";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
?> 
</html>
