<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(5);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => $materia->resumo,
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_PHP . "exercícios de lógica; prica de lógica; prática da lógica; ".
                           "algoritmos; "
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = "php";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo ROOT_PATH; ?>">Home</a> <span class="divider">/</span></li>
                            <li><a href="<?php echo BASE_PATH; ?>php/">PHP</a> <span class="divider">/</span></li>
                            <li class="active"><?php echo $materia->titulo; ?></li>
                        </ul>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>

                    <article>
                        <h1>Estudos de lógica com respostas (1 ao 5)</h1>

                        <p>Você já sabe o que é PHP, conhece a sintaxe básica, lêu o artigo “pé na jáca”, já conseguiu “subir’ o ambiente de
                            desenvolvimento. Agora só falta começar a programar. Para isso vamos começar exercitando a lógica de programação. <em>Não
                                vamos criar programas completos e profissionais, nada disso. Construiremos apenas pequenos trechos de códigos para
                                exercitar o raciocínio e desenvolver uma intimidade com a linguagem.</em></p>

                        <p>Os exercícios iniciais foram adaptados para a realidade do desenvolvimento web. Em programas desktop a simples instrução
                            “leia o valor digitado do usuário” significa que o sistema fará uma pausa é esperará o usuário digitar alguma coisa.
                            Já em programas para web (aplicações web) pedir para o usuário digitar algo significa ter que construir um formulário
                            HTML, enviar esses dados para um script, receber esses dados “via protocolo HTTP”, e finalmente, processar a informação.
                            Pensando nisso e com o objetivo de facilitar a vida do iniciante em programação, optei por trabalhar com valores
                            arbitrários, ou seja, valores são definidos pelo programador e atribuídos diretamente no código fonte sem a interferência
                            ddo usuário.</p>

                        <p>Alguns profissionais (principalmente os acadêmicos) confundem “lógica de programação” com “conhecimento alheio”. Por
                            exemplo, o enunciado do problema pede para resolver o metro quadrado de um espaço. Se a pessoa não saber como calcular
                            o metro quadro ela não conseguirá desenvolver o enunciado (muitos não se lembram que o metro quadrado é igual a área do
                            retângulo, basta multiplicar a base pela altura, onde a altura passa a ser uma medida horizontal). Então, conhecer a
                            fórmula do metro quadrado não trata-se de lógica e sim de conhecimento alheio. Já o como fazer (algoritmo) para calcular
                            o metro quadrado é pura lógica. A notícia ruim é que raríssimos profissionais atuam sobre este princípio, logo você
                            terá trabalho extra para resolver os exercícios de lógica de programação (ter um pouco de conhecimento alheio). É muito
                            mais eficiente e honesto quando limpa-se os exercícios de lógica do conhecimento alheio, obtendo-se dessa forma apenas a
                            lógica pura. Comentarei sobre isso ao longo dos exercícios.</p>

                        <p><em>IMPORTANTE: O aprendizado da lógica se faz a passos lentos, bem lentos. Leia o exercício mas não veja a solução enquanto
                                não tiver “suado a camisa”. Normalmente, leva-se de 10 a 20 minutos em cada exercício, cronometre o seu tempo e não
                                desista antes dos 20 minutos pensando  na solução (o tempo para desenhar o diagrama e para executar o teste de mesa não
                                contam). Em um curso formal (acadêmico), a disciplina lógica de programação dura um semestre inteiro. Se você nunca viu
                                programação antes, dê-se pelo menos 6 meses de amadurecimento em lógica.</em></p>

                        <p>Inspirado nos <a href="http://fit.faccat.br/~fpereira/apostilas/exerc_resp_alg_mar2007.pdf">91 exercícios</a> de
                            Flávia Pereira de Carvalho.</p>

                        <h2>Exercício 1</h2>

                        <p>Escreva um algoritmo que armazene o valor 10 em uma variável denominada “num_a” e também o valor 20 em uma variável
                            denominada “num_b”. Agora, apenas com o uso de atribuições (vimos isto em artigos anteriores) passe o valor de num_a
                            para num_b e imprima os resultados.</p>

                        <h4>Solução (comentada)</h4>

                        <p>Você entendeu o problema e o que se espera dele? É importante que o anunciado seja lido com atenção e que ele não deixe
                            dúvidas ou seja ambíguo.</p>

                        <p>Esse primeiro exercício é bastante básico, o objetivo é apenas “quebrar o gelo”. Comece rascunhando a solução, passe a
                            limpo, faça o diagrama e aplique o teste de mesa. Se estiver seguro, parta para a codificação (transformar o algoritmo
                            em código fonte).</p>

                        <p>As primeiras atribuições são fáceis...</p>

                        <div class="code menor">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>num_a = 10

num_b = 20</pre>
                        </div>

                        <p>Vamos pensar no resultado final</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>imprimir num_a, num_b

// mostra na tela “20, 10”</pre>
                        </div>

                        <p>O que fazer para trocar os valores de uma variável para a outra? Esse é o foco do problema. Se utilizar uma variável a
                            mais, podemos resolver dessa forma...</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

// Inicializar as variáveis
num_a = 10
num_b = 20
num_c = 0

// Efetuar a troca
num_c = num_a
num_a = num_b
num_b = num_c

// Mostrar na tela
imprimir num_a, num_b

<em>FIM</em></pre>
                        </div>

                        <p>Agora em php...</p>

                        <div class="code">
                            <h6>file.php</h6>
                            <pre>&lt;?php

// Inicializar as variáveis
$num_a = 10;
$num_b = 20;
$num_c = null; // inicializamos os variáveis com null em PHP.

// Efetuar a troca
$num_c = $num_a;
$num_a = $num_b;
$num_b = $num_c;

// Mostrar na tela
echo “$num_a, $num_b”;
?&gt;</pre>
                            <p>Solução para o exercício 1.</p>
                        </div>

                        <h2>Exercício 2</h2>

                        <p>Escreva um algoritmo que mostre a área quadrada de um espaço qualquer (os valores desse espaço são atribuídos
                            arbitrariamente pelo programador)</p>

                        <h4>Solução (comentada)</h4>

                        <p>A primeira lição que tiramos deste exercício é a diferença entre “lógica pura” e “conhecimento alheio”. Neste caso,
                            conhecimento alheio é saber que o metro quadrado é obtido através de uma simples multiplicação(lado x lado) e lógica pura
                            seria o algoritmo que expressa a multiplicação de dois números.</p>

                        <p>Se este exercício estivesse escrito assim “escreva um algoritmo para calcular as área de um retângulo de dimensões
                            quaisquer” ele teria a mesma solução, então vamos à ela.</p>

                        <p>Sabendo que temos que multiplicar dois números para encontrar o metro quadrado a solução aparece rapidamente...</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre>&lt;?php

$lado_um = 7;   // poderia ser qualquer valor
$lado_dois = 2; // poderia ser qualquer valor

$metro_quadrado = $lado_um * $lado_dois;

echo $metro_quadrado; // mostra na tela “14”
?&gt;</pre>
                            <p>Solução para o exercício 2.</p>
                        </div>

                        <h2>Exercício 3</h2>

                        <p>Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.</p>

                        <h4>Solução (comentada)</h4>

                        <p>Este problema é interessante porque envolve outro tipo de “conhecimento alheio”, o conhecimento de artifícios que a cada
                            linguagem propicia. Veremos duas soluções para o problema, a segunda o leitor entrará em contato com artifícios da
                            linguagem que nos ajuda poupando muito trabalho e tempo. Por enquanto, eis a primeira solução:</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

// Inicia as variáveis
numero     = 0
numero_ant = 0
numero_suc = 0

// Efetua a operação
numero     = 45;
numero_ant = numero - 1
numero_suc = numero + 1

// Mostra os resultados obtidos
mostrar numero_suc, numero_ant

<em>FIM</em></pre>
                        </div>

                        <p>Se o leitor alcançou o resultado como a solução acima (mesmo que ligeiramente diferente), parabéns! Utilizou de pura
                            lógica.</p>

                        <p>Em algum momento percebeu-se que essa iteração
                            “numero + 1” repetia-se muito ao longo dos código fontes produzidos, então porque não criar um “artifício” para
                            simplificar o trabalho de leitura e escrita do código fonte? Criaram os operadores ++ e -- equivalentes a “numero + 1” e
                            “numero - 1”, respectivamente. Claro que isto não foi criado com php, foi em C ou até mesmo antes e, obviamente, essa
                            historinha foi eu quem inventou, mas vamos ao exemplo:</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

numero = 5
mostrar numero + 1
mostrar numero++
// Ambas as linhas acima mostram na tela o número 6

numero = 5
mostrar numero - 1
mostrar numero--
// Ambas as linhas acima mostram na tela o número 4</pre>
                        </div>

                        <p>Logo, a segunda solução do problema seria a seguinte:</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

// Inicia as variáveis
numero     = 0
numero_ant = 0
numero_suc = 0

// Efetua a operação
numero = 45;
numero_ant  = numero--
numero_suc = numero++

// Mostra os resultados obtidos
mostrar numero_suc, numero_ant

<em>FIM</em></pre>
                        </div>

                        <p>Alguns profissionais entendem a segunda solução como sendo a resposta correta, ledo ingano. Como saber a solução do
                            problema se não conhecemos os artifícios adequados da linguagem? O ponto importante é que para resolver problemas é
                            possível contar com a ajuda de ferramentas(artifícios). Essas ferramentas devem ser apresentadas antes de se tentar
                            resolver o problema, por isso eu digo e insisto que ensinar lógica de programação através da “lógica pura” é mais
                            honesto. Se não, seria como perguntar ao aprendiz uma resposta que ele certamente não tem, então para que perguntar?</p>

                        <p>Talvez o leitor esteja se perguntando o que tem há ver com tudo isso? Afinal o objetivo é apenas aprender um pouco de
                            lógica de programação. É que eu tenho uma enorme vontade de que você não perca o tempo precioso que eu e muitos outros
                            programadores perdemos com essa falha no ensino da lógica de programação. E também que o seu aprendizado seja mais
                            proveitoso.</p>

                        <h2>Exercício 4</h2>

                        <p>Calcular o total de dias desde o início do ano até a presente data, considerando que os meses tenham 30 dias.</p>

                        <h4>Solução (comentada)</h4>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

data_atual_mes = 3

total_de_dias  = data_atual_mes * 30

mostrar total_de_dias


<em>FIM</em></pre>
                        </div>

                        <p>O algoritmo acima fora desenhado no mês da Março, por essa razão o valor da variável “data_atual_mes” inicia-se com 3.
                            Dessa forma teremos que alterar o código fonte a cada mês que não corresponder com o mês atual, nada prático. Então,
                            precisaremos de uma função que retorne apenas o mês atual, trata-se de um artifício, ou melhor uma ferramenta. A solução
                            ficaria assim;</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

data_atual_mes = retorna_mes_atual()

total_de_dias  = data_atual_mes * 30

mostrar total_de_dias

<em>FIM</em></pre>
                        </div>

                        <p>Na primeira linha do algoritmo invocamos uma função que retorna uma valor do tipo referente ao mês atual, talvez o
                            algoritmo busque a data atual no computador onde está sendo executado (no servidor). Como estamos construindo uma
                            aplicação web sabemos que os scripts são executado no lado do servidor e a data atual deve se basear no relógio do
                            servidor.</p>

                        <p>Ainda é cedo para vermos o conceito de função, em breve abordaremos o assunto. Por enquanto basta acreditar que ela
                            retornará o valor esperado. Repare que no final do nome da função abrimos e fechamos parênteses, esse arranjo indica que
                            estamos utilizando uma função, esse é o padrão mais comum e que representa uma função.</p>

                        <h2>Exercício 5</h2>

                        <p>Faça um algoritmo que mostre e calcule o reajuste de um salário qualquer. O salário e o reajuste serão valores quaisquer
                            e a saída mostrará o valor do reajuste e o salário reajustado.</p>

                        <h4>Solução (comentada)</h4>

                        <p>O objetivo deste exercícío é apenas ganhar prática. Seu nível de dificuldade é extremamente baixo e não envolve o uso de
                            nenhuma ferramenta, basta lógica pura. O ideal seria os valores de salário e percentual de reajuste fossem inseridos
                            pelo usuário, mas como estamos construíndo aplicações web, precisaríamos desenhar um formulário, tarefa esta que
                            enfrentaremos em breve.</p>

                        <p>Apresentamos apenas o pseudo-código, mas não deixe de fazer os diagramas, o teste de mesa e transcreva o algoritmo para
                            uma linguagem de programação (no caso PHP).</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

salario = 1000

perc_reajuste = 0.05 // 0.05 é igual a 5%

valor_reajuste = salario * perc_reajuste

salario_reajustado = salario + valor_reajuste

mostrar valor_reajuste, salario_reajustado
<em>FIM</em></pre>
                        </div>

                        <p class="fim">Fim da matéria</p>
                    </article>

                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12  -->
            </div><!-- row  -->
        </div><!-- container -->

        <div class="container sem_borda">
            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_parcial.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span8 offset2">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>
        </div>

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>