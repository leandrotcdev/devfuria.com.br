<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('REGEXP');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Vários resultados - preg&#95;match&#95;all()</h1>
                <p>Dissecando a função do PHP</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">22/07/2013</span>, escrito em <span class="label label-warning">22/07/2013</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <p>Se olharmos o primeiro exemplo da matéria anterior:</p>

                        <pre><code>assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
regexp: "/ca.a/"
</code></pre>

                        <p>Notamos que a ER casa com mais de um resultado.</p>

                        <p><em>Como trabalhamos com mais de um resultado?</em> Bom, vejamos o código...</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre>&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match($pattern, $subject, $retorno);</em>

if ($resultado === 1) {

    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {

    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {

    print "ocorreu um erro";

}
?&gt;</pre>
                        </div>

                        <p>...podemos notar que o resultado retornado pela função preg_math() foi o primeiro valor que casou no caso a sttring "casa",
                            veja a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-thumbnail" alt="Resultado do primeiro exemplo em PHP" src="php-preg-math.png" />
                        </div>                         

                        <p>Mas, se observarmos o exemplo lá no começo da matéria, a expressão casa com outras partes da string:</p>

                        <pre><code>"casa, cana, cama, casa, cava"
</code></pre>

                        <p>Como fazer para obter esse resultados?</p>

                        <p>Uma saída é utilizar a função <em>preg&#95;math&#95;all()</em>, ela carregará a varirável <em>$retorno</em> com todos os resultados possíveis,
                            veja a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-thumbnail" alt="Resultado do primeiro exemplo em PHP" src="php-preg-math-all.png" />
                        </div>                          

                        <p>Segue o código alterado para a função preg&#95;math&#95;all():</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre>&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match_all($pattern, $subject, $retorno);</em>

if ($resultado >= 1) {

    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {

    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {

    print "ocorreu um erro";

}
?&gt;</pre>
                        </div>

                        <p>Obsever que eu também alterei o "primeiro if" de:</p>

                        <pre><code>if ($resultado === 1) {</code></pre>

                        <p>para:</p>

                        <pre><code>if ($resultado &gt;= 1) {</code></pre>

                        <p>Isso se deve ao fato de que a função preg&#95;math&#95;all() retorna um número inteiro com a quantidade de ocorrências
                            encontradas, no exemplo o valor da variável <em>$resultado</em> =e igual a 5 (pois temos cinco resultados).</p>

                        <p>Para saber mais, inclusive sobre os demais parâmetros não comentados, veja a documentação oficial:</p>

                        <p><a href="http://www.php.net/manual/pt_BR/function.preg-match-all.php">http://www.php.net/manual/pt_BR/function.preg-match-all.php</a></p>
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>RegExp</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_ER);
                        $core->lista->link_ativo = "/regexp/basico/varios-resultados-preg-match-all/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
