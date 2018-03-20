# WordCompletions

A class that generates a sorted list of most probable completion(s) of the beginning portions of a given word (or letters) using a given source of words (typically a .txt file) as the reference for spellings and how frequently words are used.

Basically, it works by following these steps:

Step #1:

Having the beginning portions of the word to be completed and the name of the file containing the source words to be used as a reference, it reads in and stores the words.

Step #2:

It then stores a list how many times each word in the words stored(in Step #1), and the length of the longest word.

Step #3:

It then sets up a data structure as follows:
i. (at top level) The structure is a zero-based array whose length is equal to the longest word.
ii. Each element of the array is made up of a none zero-based array(second level) of length 26 whose keys are the letters of the alphabet (A-Z).
iii. Each none zero-based array(with key A, B, C etc ..Z) in each element of the (top level) array consists of a set of words (third level).

Step #4:

It then populates the data structure as follows:
i. It adds all words(in the list from Step #2) that have their nth letter as 'L' to the set of words(third level, see Step #3 iii.) in the element(second level, see step#3 i.) at index 'L' of the element at index n-1 of the data structure(top level see step#1 i.)

Step #5:

It then intersects the set of words in the third level of the data structure as follows:
i. Considering two letters at a time, starting with the first and second letters of the word to be completed; intersect the set of all words in the element(third level) indexed as the first letter with the set of words in the element(third level) indexed as the second letter.
ii. Intersect the set of words resulting(from Step #5 i.) with the set of all words in the element(third level) indexed as the third letter etc
iii. Generate a list of words with their frequencies(using the list from Step #2) from the set of words resulting from the intersection(in Step #5 ii.) as the set of probable completion(s) sorted in terms of their percentages in the set.

author: Castro Hamiltone

## Purpose

The aim is to provide a sorted ( based on the percentage of the frequecny of occurrence of the suggested word in the source of words ) list of most probable completions of a word given the begining letters of the word and a source of words to be used.

## Parameters

***@param $begining:- string, the begining portion of the word to be completed. e.g 'yo', 'you', or 'your' etc<br>***
***@param $words_source:- string, the filename (.txt) of the text file containing the commonly used words.<br>***
**You can use a corpus from [The Guternburg Project](http://www.gutenberg.org/files/)** 

## Return

array:- possible completions with probability in percentages
