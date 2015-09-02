---
layout:      grid12-article
title:       yield
description: 
---


O __yield__ só pode ser usado dentro de uma função.

    >>> yield
      File "<stdin>", line 1
    SyntaxError: 'yield' outside function

Dentro de uma função ele funciona mais ou menos como um `return`, com a diferença que ele retorna um __generator__.

    >>> def foo():
    ...   yield
    ... 
    >>> 
    >>> foo()
    <generator object foo at 0x7fd1434a88b8>

Na primeira vez que a função for executada, ela vai rodar do começo e parar até tocar no primeiro yield. 

Após encontrar o primeiro yield, ela vai continuar do ponto que foi parado até tocar o próximo yield. 

Quando não for encontrado um yield, a exceção StopIteration é lançada.

    >>> def foo():
    ...   yield 10
    ...   yield 20
    ... 
    >>> g = foo()
    >>> next(g)
    10
    >>> next(g)
    20
    >>> next(g)
    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    StopIteration

O código da função não é executado quando utilizamos o yield dentro dela. Por exemplo, podemos chamar a função acima 
quantas vezes quisermos mas o retorno da função será sempre um generator.

    >>> foo()
    <generator object foo at 0x7fbcb4143948>
    >>> foo()
    <generator object foo at 0x7fbcb4143990>
    >>> 

Para o código ser executado precisamos utilizar a função `next()` ou usar um laço `for` no objeto. Como já utilizamos o
`next` vou exemplificar com o laço `for`. Repare que o laço termina corretamente, sem a exceção `StopIteration`.

    >>> generator = foo()
    >>> for x in generator:
    ...   x
    ... 
    100
    200

Se agruparmos valores separados por vírgula, a função `yield` retornará um dupla.

    >>> def foo():
    ...   yield 10, 20, 30
    ... 
    >>> next(g)
    (10, 20, 30)

Continuando o código acima, se chamarmos mais uma vez a função `next()`, encontraremos o `StopIeration`.

    >>> next(g)
    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    StopIteration
    >>> 


No artigo do [Mazulo](http://indacode.com/introducao-ao-python-generators/ "link-externo") encontrei uma explicação 
mais formal sobre o yield...

Quando uma função que está executando encontra o yield, ela suspende a execução naquele ponto, salva seu contexto e 
retorna para o chamador, juntamente com qualquer valor na `lista_expressao;` quando o chamador invoca o método `next()` 
no objeto, a execução da função continua até outro yield ou return ser encontrado, ou quando o fim da função é atingido.

Segundo a [PEP 255](https://www.python.org/dev/peps/pep-0255/ "link-externo"):

> Se a declaração de um yield é encontrado, o estado da função é congelado, e o valor da `lista_expressao` é retornado 
> para o chamador do método `next()`. Por "congelado" nós queremos dizer que todo o estado local é retido, incluindo a 
> ligação das variáveis locais, o ponteiro de instrução e a pilha de avaliação interna: informação suficiente é salva para 
> que na próxima vez que o `.next()` é invocado, a função pode proceder exatamente como se a declaração yield fosse apenas 
> outra chamada externa. Por outro lado, quando uma função encontra a declaração de um return, ele retorna para o chamador 
> junto com qualquer valor que prosseguir a declaração do return, e a execução de tal função é completa para todos os 
> efeitos. Pode-se pensar do yield como o causador de uma interrupção temporária.
    