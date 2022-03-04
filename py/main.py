from eltolas import *
import string

k_betuk = string.ascii_lowercase
n_betuk = string.ascii_uppercase

e_m = []

with open("caesar.txt", "r") as file:
    for sor in file:
        e_m.append(sor.strip())
        #print(sor.split())

print()
key = elt()

d_m = []
d = ""

for sor in e_m:
    for c in sor:
        if c == c.lower():
            if c in k_betuk:
                hely = k_betuk.find(c)
                uj_hely = (hely - key) % 26
                uj_kar = k_betuk[uj_hely]
                d += uj_kar
            else:
                d += c
        else:
            if c in n_betuk:
                hely = n_betuk.find(c)
                uj_hely = (hely - key) % 26
                uj_kar = n_betuk[uj_hely]
                d += uj_kar
            else:
                d += c

    d_m.append(d)
    d = ""

with open("vers.txt", "w") as file:
    for adat in d_m:
        file.write(adat + "\n")
