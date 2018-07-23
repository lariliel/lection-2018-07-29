<?php
/**
* Функция для примера.
*
* Функция, которую я написал для примера как работают генераторы документации<br>
* Она просто здоровается с человеком
*
* @param string $myArgument это с кем надо поздороваться
* @author dddsh <ddsh@ddsh.ru>
* @see http://ddsh.ru/lections/2018-07-29/
* @see https://docs.phpdoc.org/getting-started/your-first-set-of-documentation.html
* @example php testFile.php Dmitry
* @return void
*/
function printEhlo($myArgument){
    echo 'Ehlo, ', $myArgument, PHP_EOL;
}

printEhlo($argv[1]);

/**
 * Ещё какая-то функция
 * 
 * @return void
 */
function anotherFunction(){
    die();
}
?>


