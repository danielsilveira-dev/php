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
<?php>
$idade = 21;
```
## Como retornar o tipo de uma variável?
```php
<?php>
$idade = 21;
echo gettype($idade);
// integer
```
### Tipos Primitivos
```php
<?php>
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
<?php>
$idade = 36;
echo 'Minha idade é '.$idade;
```
### Como incluir o valor das variáveis dentro de uma frase?
```php
<?php>
$nome = 'Daniel'
$idade = 36;
echo "Meu nome é $nome e tenho $idade anos."
```
Para quebrar linhas no `php` colocamos no final do texto, `\n`.  

Obs: Lembrando que para colocar a quebra de linha, precisamos incluir o `\n` dentro de aspas duplas, caso colocarmos dentro de aspas simples, a mesma somente identifica Strings e não executa a função de quebra a linha.

## Sequências de Escape
No php temos diversas sequências de escape para utilizar.  
\n  fim de linha (LF ou 0x0A(10) em ASCII)

## Caminhos diferentes
```php
<?php>
$idade = 17;
echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;
if($idade >= 18) {
  echo "Você tem $idade anos.". PHP_EOL;
  echo 'Pode entrar';
}
```
##  Para saber mais: Precedência
Vimos que há mais de uma forma de representar o operador lógico “ou”, sendo possível através da palavra `or` ou dos caracteres `||`. Embora o segundo seja mais comum e mais utilizado, o primeiro é mais legível e amigável para quem está começando.  

Mas existe uma pequena diferença entre ambos. Assim como operadores matemáticos têm regras de precedência, operadores lógicos também.  

A precedência de todos os operadores existentes pode ser conferida na documentação, mas para não confundir mais do que ajudar, basicamente funciona assim:  

Primeiro serão avaliadas as regras individualmente, e depois os operadores serão aplicados na seguinte ordem:  
 - &&
 - ||
 - and
 - or  

Os operadores de comparação (<, >, ==, !=) têm a mesma precedência, logo, serão avaliados da esquerda para direita.  

Talvez isso tudo fique um pouco confuso agora, mas não se preocupe. A prática fará com que isso fique bem mais claro.  

## Senão
```php
<?php>
$idade = 7;
echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;
if($idade >= 18) {
  echo "Você tem $idade anos.". PHP_EOL;
  echo 'Pode entrar';
}else{
  echo "Você só tem $idade anos. Você não pode entrar.";
}
```

# Avançando com o php: Arrays, Strings, Função e Web

## Lista de dados

### Como criar uma lista de dados?

1ª Forma:
```php
<?php>
$ageList = array(21, 23, 19, 25, 30, 41, 18);
```
Atualmente, não é mais preciso informar a palavra `array` para informar. Podemos fazer da seguinte forma:
```php
<?php>
$ageList = [21, 23, 19, 25, 30, 41, 18];
```
### Como pegar uma informação do array de idades?
```php
<?php>
$ageList = [21, 23, 19, 25, 30, 41, 18];
$primeiraIdade = $ageList[0]; // 21
```

### Loops em listas
```php
<?php>
$ageList = [21, 23, 19, 25, 30, 41, 18];
for($i = 0; $i < 7; $i++){
	echo ageList[$i];
}