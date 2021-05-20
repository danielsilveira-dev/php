![Logo php](new-php-logo.svg)

# Introdução ao PHP 
## Primeiros passos com a linguagem
## Download do PhP

Windows Version:[ Download](https://windows.php.net/download#php-8.0)  

Imprime `"Olá mundo" na tela.`
```php
<?php // A partir deste comando,  será executado código php
  echo "Olá mundo!"; // imprime
```

## Variáveis e tipos

## Como declarar uma variável no php?

```php
$idade = 21;
```
## Como retornar o tipo de uma variável?
```php
$idade = 21;
echo gettype($idade);
// integer
```
### Tipos Primitivos
```php
$soma = 2 + 2;
$subtracao = 2 - 2;
$multiplicacao = 2 * 2;
$divisao = 2 / 2;
$exponenciacao = 2 ** 2;
$restoDaDivisao = 4 % 2;
```
## Trabalhando com texto
### Como concatenar texto com valor de variáveis?
```php
$idade = 36;
echo 'Minha idade é '.$idade;
```
### Como incluir o valor das variáveis dentro de uma frase?
```php
$nome = 'Daniel'
$idade = 36;
echo "Meu nome é $nome e tenho $idade anos."
```
Para quebrar linhas no `php` colocamos no final do texto, `\n`.  

Obs: Lembrando que para colocar a quebra de linha, precisamos incluir o `\n` dentro de aspas duplas, caso colocarmos dentro de aspas simples, a mesma somente identifica Strings e não executa a função de quebra a linha.

## Sequências de Escape
No php temos diversas sequências de escape para utilizar.  
\n  fim de linha (LF ou 0x0A(10) em ASCII)