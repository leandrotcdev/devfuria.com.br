---
layout:      materia
title:       Como compilar no Linux
description: 
---


Não, não é coisa de outro mundo. Usar c/c++ no Linux é muito fácil.

Obviamente, voê precisará ter o Linux instalado, nem que seja em uma máquina virtual.

Depois o mais importante é o compilador, no caso o __gcc__.

Para instalar é muito fácil.

    apt-get install gcc  // Ubunto, Debian
    yum install gcc      // Fedora, Centos



Editor de texto
---

Esse também não pode faltar. O __gedit__ é o editor de texto padrão em diversas distro's, quer dizer nem precisa instalar.

É como se fosse __notpad__ só que muito, muuuuiiiito melhor.



Compilando
---

A linha de comando que compila é essa:

    gcc seucodigo.c -o seuprograma.run

Vamos quebrá-la para entendê-la.

    gcc seucodigo.c      // compile o código  
    -o seuprograma.run   // e gere o arquivo binário (executável)


A extensão `run` é facultativa. Quero dizer, posso colocar qualquer coisa.

O Linux não é como o Windows, no Linux não precisa nem de extensão, ok?

Ao invés de `.run` poderia ser `.exe`, `.bin` ou poderia até não ter extensão alguma.


Executando
---

Como executar um arquivo binário (executável) no Linux ?

    ./seuprograma.run



Código minimalista para teste
---

Experimente compilar este código.

    int main (){
        return 0;
    }

Esse é o menor código na __linguagem c__ possível de ser compilado.

Por ser minúsculo, você não conseguirá fazer nada com ele, então vamos dar um "up".

    #include <stdio.h>

    int main (){
        printf ("Hello, world!\n");
        return 0;
    }



Dicas rápidas de uso do terminal
---

- `clear` limpa a tela
- `seta para cima` pesquisa histórico de comandos
- `CTRL + U` limpa linha
- `TAB` Acione a tecla __TAB__ para usufruir do "autocomplete"
    