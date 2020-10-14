#!/usr/bin/python3
#
# FizzBuzz in Python


for num in range(1,101):
  fizz = buzz = ''

  if num % 3 == 0: fizz = 'Fizz' 
  if num % 7 == 0: buzz = 'Buzz' 

  if fizz != '' or buzz != '':
    print(fizz + buzz)
  else:
    print(num)

