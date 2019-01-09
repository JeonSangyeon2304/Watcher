import sys

print("Num is ?\n");
Input = input()
Hashed_PW = 'ED3AA79DAF8E991ADDA33B8B0EEF5284'

if len(Input)>12:
    print("Num is", Hashed_PW)
else:
    print("Num is 8")

print("buffer is", Input);
