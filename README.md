# WordCompletions

This is a PHP Class coded using PHP 7
author: Castro Hamiltone

## Purpose

The aim is to provide a sorted ( based on the percentage of the frequecny of occurrence of the suggested word in the source of words ) list of most probable completions of a word given the begining letters of the word and a source of words to be used.

## Parameters

***@param $begining:- string, the begining portion of the word to be completed. e.g 'yo', 'you', or 'your' etc<br>***
***@param $words_source:- string, the filename (.txt) of the text file containing the commonly used words.<br>***
**You can use a corpus from [The Guternburg Project](http://www.gutenberg.org/files/)** 

## Return

array:- possible completions with probability in percentages